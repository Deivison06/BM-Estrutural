<?php
/* ============================================================
   BM ESTRUTURAL — rodapé compartilhado (footer + scripts)
   ============================================================ */
$isHome = (($active ?? '') === 'home');
if (!function_exists('bm_sref')) {
  function bm_sref(bool $isHome, string $anchor): string {
    return $isHome ? '#' . $anchor : '/#' . $anchor;
  }
}
$bm_logo = 'https://static.wixstatic.com/media/e9aa01_ae47d8bda54545b3a6e85fc1d8172524~mv2.png/v1/fill/w_350,h_192,al_c,q_85,enc_avif,quality_auto/LOGO%20SITE_SEM_FUNDO.png';
?>
<!-- ============================ FOOTER ============================ -->
<footer class="site-footer">
  <div class="wrap">
    <div class="footer-top">
      <img loading="lazy" decoding="async" src="<?= $bm_logo ?>" alt="BM ESTRUTURAL">
      <nav class="footer-nav">
        <a href="/">INÍCIO</a>
        <a href="/lajes">LAJES</a>
        <a href="/aco">AÇO</a>
        <a href="<?= bm_sref($isHome, 'quem-somos') ?>">QUEM SOMOS</a>
        <a href="<?= bm_sref($isHome, 'obras') ?>">OBRAS</a>
        <a href="<?= bm_sref($isHome, 'regioes') ?>">REGIÕES</a>
        <a href="<?= bm_sref($isHome, 'contato') ?>">CONTATO</a>
      </nav>
    </div>
    <div class="footer-bot">
      <span>©2025 BM ESTRUTURAL — Todos os direitos reservados · contato@estruturalse.com.br · (19) 3878-2233</span>
      <span class="badge-y">LOUVEIRA · SP</span>
    </div>
  </div>
</footer>

<script src="/assets/js/app.js"></script>
</body>
</html>
