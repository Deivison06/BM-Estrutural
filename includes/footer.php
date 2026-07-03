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
        <a href="#contato">CONTATO</a>
      </nav>
      <div class="footer-credit">
      <span>Desenvolvido por</span>
      <span class="ello-chip">
        <img loading="lazy" decoding="async" src="/assets/img/logoELLO.png" alt="ELLO Táticas Digitais">
      </span>
    </div>
    </div>
    <div class="footer-bot">
      <span>©2025 BM ESTRUTURAL — Todos os direitos reservados · contato@bmestrutural.com.br · (19) 3878-2233</span>
      <span class="badge-y">LOUVEIRA · SP</span>
    </div>
    
  </div>
</footer>

<!-- Botão flutuante do WhatsApp -->
<a class="wa-float" href="https://wa.me/551938782233?text=Estou+no+site+e+gostaria+de+mais+informa%C3%A7%C3%B5es" target="_blank" rel="noopener" aria-label="Falar no WhatsApp">
  <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163a11.867 11.867 0 01-1.587-5.946C.16 5.335 5.495 0 12.05 0a11.817 11.817 0 018.413 3.488 11.824 11.824 0 013.48 8.414c-.003 6.557-5.338 11.892-11.893 11.892a11.9 11.9 0 01-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884a9.86 9.86 0 001.51 5.26l-.999 3.648 3.978-1.107zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
</a>

<!-- ============================ DADOS ESTRUTURADOS (Schema.org) ============================ -->
<!-- TODO: confirmar horário de funcionamento (openingHours) e CNPJ/razão social, se quiser exibir -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HomeAndConstructionBusiness",
  "@id": "https://www.bmestrutural.com.br/#empresa",
  "name": "BM Estrutural Soluções em Engenharia",
  "alternateName": "BM Estrutural",
  "url": "https://www.bmestrutural.com.br",
  "logo": "<?= $bm_logo ?>",
  "image": "https://www.bmestrutural.com.br/assets/img/bm-entrada.png",
  "telephone": "+551938782233",
  "email": "contato@bmestrutural.com.br",
  "priceRange": "$$",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Estrada das Abelhas, 445 - Ponte Preta",
    "addressLocality": "Louveira",
    "addressRegion": "SP",
    "postalCode": "13291-258",
    "addressCountry": "BR"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": -23.0833,
    "longitude": -46.95
  },
  "areaServed": [
    "Louveira - SP", "Vinhedo - SP", "Valinhos - SP", "Campinas - SP",
    "Itatiba - SP", "Jundiaí - SP", "Itupeva - SP", "São Paulo - SP"
  ],
  "openingHoursSpecification": [{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
    "opens": "08:00",
    "closes": "18:00"
  }],
  "sameAs": [
    "https://www.instagram.com/bmestrutural/",
    "https://www.facebook.com/profile.php?id=61590064959467",
    "https://www.youtube.com/@bmestrutural",
    "https://www.tiktok.com/@bmestrutural",
    "https://x.com/bmestrutural",
    "https://br.pinterest.com/estruturalbm/"
  ]
}
</script>
<?php if ($isHome): ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "BM Estrutural",
  "url": "https://www.bmestrutural.com.br"
}
</script>
<?php endif; ?>

<script src="/assets/js/app.js"></script>
</body>
</html>
