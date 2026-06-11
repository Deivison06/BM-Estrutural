<?php
$active = '';
$title  = 'Obrigado pelo contato | BM Estrutural';
$desc   = 'Recebemos sua mensagem. A equipe da BM Estrutural retornará em breve.';
ob_start(); ?>
<style>
/* ---- PÁGINA DE AGRADECIMENTO ---- */
.thanks{
  min-height:68vh;display:flex;align-items:center;justify-content:center;text-align:center;
  background:var(--navy-900);color:#fff;padding-block:clamp(64px,12vh,150px);
}
.thanks .wrap{max-width:640px}
.thanks .ico{
  width:86px;height:86px;margin:0 auto 28px;
  display:flex;align-items:center;justify-content:center;border-radius:50%;
  background:rgba(47,170,90,.16);color:#2faa5a;
}
.thanks .ico svg{width:42px;height:42px}
.thanks h1{
  font-family:var(--display);font-weight:800;letter-spacing:-.015em;line-height:1.02;
  font-size:clamp(34px,5vw,58px);margin:0 0 16px;
}
.thanks h1 .hl{color:var(--yellow)}
.thanks p{font-size:clamp(16px,1.7vw,19px);line-height:1.7;color:rgba(255,255,255,.78);margin:0 0 30px}
.thanks .hero-actions{display:flex;flex-wrap:wrap;gap:14px;justify-content:center}
</style>
<?php $head_extra = ob_get_clean(); include __DIR__ . '/includes/header.php'; ?>

<section class="thanks">
  <div class="wrap">
    <div class="ico">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
    </div>
    <h1>Mensagem <span class="hl">enviada!</span></h1>
    <p>Obrigado pelo seu contato. Recebemos sua mensagem e a equipe da BM Estrutural retornará o mais breve possível.</p>
    <div class="hero-actions">
      <a class="btn-solid" href="/">Voltar ao início <span>&rarr;</span></a>
      <a class="btn-ghost" href="<?= $cta_href ?>" target="_blank" rel="noopener">Falar no WhatsApp</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
