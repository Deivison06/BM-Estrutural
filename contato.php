<?php
/**
 * Recebe o formulário de contato da home e envia por e-mail (PHPMailer + SMTP cPanel).
 * Em sucesso redireciona para  /?sucesso=1#contato
 * Em erro      redireciona para /?erro=1#contato
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ini_set('display_errors', '0');   // não vazar erros na resposta ao visitante
ini_set('log_errors', '1');
error_reporting(E_ALL);

/* ---------- Log simples em envio.log ---------- */
function registrarLog(string $status, string $email, string $detalhe = ''): void {
    $linha = sprintf(
        "[%s] %s | %s | %s\n",
        date('Y-m-d H:i:s'),
        $status,
        $email !== '' ? $email : '-',
        $detalhe
    );
    $ok = @file_put_contents(__DIR__ . '/envio.log', $linha, FILE_APPEND | LOCK_EX);
    if ($ok === false) {
        error_log('Falha ao escrever em envio.log — verificar permissões em ' . __DIR__);
    }
}

/* ---------- Helpers de redirecionamento ---------- */
function voltar(string $query): void {
    header('Location: /?' . $query . '#contato', true, 303);
    exit;
}
function sucesso(): void {            // página de agradecimento
    header('Location: /obrigado', true, 303);
    exit;
}

/* Só aceita POST */
if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Location: /#contato');
    exit;
}

registrarLog('HIT', $_SERVER['REMOTE_ADDR'] ?? 'desconhecido', 'Método: POST');

require __DIR__ . '/vendor/autoload.php';
$cfg = require __DIR__ . '/config.php';

/* ---------- Coleta dos campos ---------- */
$nome      = trim($_POST['nome']      ?? '');
$sobrenome = trim($_POST['sobrenome'] ?? '');
$email     = trim($_POST['email']     ?? '');
$telefone  = trim($_POST['telefone']  ?? '');
$msg       = trim($_POST['msg']       ?? '');
$honeypot  = trim($_POST['website']   ?? ''); // anti-spam: deve vir vazio

/* Bot preencheu o honeypot: finge sucesso e descarta */
if ($honeypot !== '') {
    registrarLog('SPAM', $email, 'Honeypot preenchido');
    sucesso();
}

/* ---------- Validação ---------- */
if ($nome === '' || $email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    registrarLog('VALIDACAO_FALHOU', $email, 'Nome ou e-mail inválido');
    voltar('erro=1');
}

$nomeCompleto = trim($nome . ' ' . $sobrenome);

/* ---------- Envio ---------- */
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $cfg['smtp_host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $cfg['smtp_user'];
    $mail->Password   = $cfg['smtp_pass'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL (porta 465)
    $mail->Port       = (int) $cfg['smtp_port'];
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom($cfg['from_email'], $cfg['from_name']);
    $mail->addAddress($cfg['to_email'], $cfg['to_name']);
    $mail->addReplyTo($email, $nomeCompleto !== '' ? $nomeCompleto : $email);

    $mail->isHTML(true);
    $mail->Subject = 'Novo contato pelo site — ' . ($nomeCompleto !== '' ? $nomeCompleto : 'Site BM Estrutural');

    $mail->Body =
        '<h2>Novo contato pelo site</h2>' .
        '<p><strong>Nome:</strong> '     . htmlspecialchars($nomeCompleto) . '</p>' .
        '<p><strong>E-mail:</strong> '   . htmlspecialchars($email)        . '</p>' .
        '<p><strong>Telefone:</strong> ' . htmlspecialchars($telefone)     . '</p>' .
        '<p><strong>Mensagem:</strong><br>' . nl2br(htmlspecialchars($msg)) . '</p>';

    $mail->AltBody =
        "Novo contato pelo site:\n\n" .
        "Nome: $nomeCompleto\n" .
        "E-mail: $email\n" .
        "Telefone: $telefone\n" .
        "Mensagem:\n$msg\n";

    $mail->send();

    registrarLog('SUCESSO', $email, "Contato: $nomeCompleto | Tel: $telefone");
    sucesso();
} catch (Exception $e) {
    registrarLog('FALHA', $email, $mail->ErrorInfo);
    error_log('Erro PHPMailer: ' . $mail->ErrorInfo);
    voltar('erro=1');
}
