<?php
/**
 * Modelo de configuração SMTP.
 * Copie este arquivo para "config.php" e preencha com a senha real.
 * O config.php NÃO é versionado (ver .gitignore).
 */
return [
    // Servidor de saída (SMTP) do cPanel — bmestrutural.com.br
    'smtp_host' => 'bmestrutural.com.br',
    'smtp_port' => 465,            // SSL = 465 | TLS = 587
    'smtp_user' => 'noreply@bmestrutural.com.br',
    'smtp_pass' => 'SUA_SENHA_AQUI',

    // Remetente (deve ser a mesma conta autenticada acima)
    'from_email' => 'noreply@bmestrutural.com.br',
    'from_name'  => 'BM Estrutural - Site',

    // Destinatário que recebe os contatos do formulário
    'to_email' => 'contato@bmestrutural.com.br',
    'to_name'  => 'BM Estrutural',
];
