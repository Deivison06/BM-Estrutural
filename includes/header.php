<?php
/* ============================================================
   BM ESTRUTURAL — cabeçalho compartilhado (head + nav)
   Variáveis opcionais definidas pela página antes do include:
     $active     'home' | 'lajes' | 'aco'
     $title      <title> da página
     $desc       meta description
     $head_extra HTML extra para o <head> (ex.: <style> da página)
     $cta_href   link do botão "Solicitar Orçamento"
   ============================================================ */
$active     = $active     ?? '';
$title      = $title      ?? 'BM Estrutural | Lajes e Aço para Construção Civil';
$desc       = $desc       ?? 'BM Estrutural Soluções em Engenharia — lajes treliçadas e aço para construção civil em Jundiaí, Campinas e todo o estado de São Paulo.';
$head_extra = $head_extra ?? '';
$cta_href   = $cta_href   ?? 'https://wa.me/551938782233?text=Estou+no+site+e+gostaria+de+mais+informa%C3%A7%C3%B5es';
$isHome     = ($active === 'home');

/* link de seção: âncora interna na home; volta para a home nas demais páginas */
if (!function_exists('bm_sref')) {
  function bm_sref(bool $isHome, string $anchor): string {
    return $isHome ? '#' . $anchor : '/#' . $anchor;
  }
}
$inicioHref = $isHome ? '#top-hero' : '/';
$bm_logo = 'https://static.wixstatic.com/media/e9aa01_ae47d8bda54545b3a6e85fc1d8172524~mv2.png/v1/fill/w_350,h_192,al_c,q_85,enc_avif,quality_auto/LOGO%20SITE_SEM_FUNDO.png';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/jpeg" href="/assets/img/favicon.jpg">
<link rel="apple-touch-icon" href="/assets/img/favicon.jpg">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5778LBBZ');</script>
<!-- End Google Tag Manager -->
<title><?= $title ?></title>
<meta name="description" content="<?= $desc ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700&family=Roboto+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">
<?= $head_extra ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5778LBBZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- ============================ HEADER ============================ -->
<header class="site-header" id="top">
  <div class="wrap header-inner">
    <a class="brand" href="<?= $inicioHref ?>" aria-label="BM Estrutural">
      <img src="<?= $bm_logo ?>" alt="BM ESTRUTURAL">
    </a>
    <nav class="nav" id="nav">
      <a href="<?= $inicioHref ?>"<?= $isHome ? ' class="active"' : '' ?>>INÍCIO</a>
      <a href="/lajes"<?= $active === 'lajes' ? ' class="active"' : '' ?>>LAJES</a>
      <a href="/aco"<?= $active === 'aco' ? ' class="active"' : '' ?>>AÇO</a>
      <a href="<?= bm_sref($isHome, 'quem-somos') ?>">QUEM SOMOS</a>
      <a href="<?= bm_sref($isHome, 'obras') ?>">OBRAS</a>
      <a href="<?= bm_sref($isHome, 'regioes') ?>">REGIÕES</a>
      <a href="#contato">CONTATO</a>
    </nav>
    <a class="header-cta" href="<?= $cta_href ?>" target="_blank" rel="noopener">Solicitar Orçamento <span>&rarr;</span></a>
    <button class="burger" id="burger" aria-label="Menu"><span></span><span></span><span></span></button>
  </div>
</header>

<!-- mobile nav -->
<div class="mnav" id="mnav">
  <button class="mclose" id="mclose" aria-label="Fechar">&times;</button>
  <a href="<?= $inicioHref ?>">INÍCIO</a>
  <a href="/lajes">LAJES</a>
  <a href="/aco">AÇO</a>
  <a href="<?= bm_sref($isHome, 'quem-somos') ?>">QUEM SOMOS</a>
  <a href="<?= bm_sref($isHome, 'obras') ?>">OBRAS</a>
  <a href="<?= bm_sref($isHome, 'regioes') ?>">REGIÕES</a>
  <a href="#contato">CONTATO</a>
  <a class="cta-line" href="<?= $cta_href ?>" target="_blank" rel="noopener">Solicitar Orçamento &rarr;</a>
</div>
