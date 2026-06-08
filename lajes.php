<?php
$active = 'lajes';
$title  = 'Lajes Treliçadas | BM Estrutural — Louveira SP';
$desc   = 'Lajes treliçadas de fabricação própria: unidirecional e bidirecional, painel treliçado, Laje Fácil, cortina de contenção e telas soldadas. Qualidade certificada para pequenos e grandes vãos — BM Estrutural, Louveira SP.';
$cta_href = 'https://wa.me/551938782233?text=Ol%C3%A1%2C+quero+um+or%C3%A7amento+de+Lajes';
ob_start(); ?>
<style>
/* ============================================================
   CARROSSEL 3D COVER FLOW — seção #porque (escopo desta página)
   Usa as variáveis já definidas no projeto (--yellow, --navy...).
   ============================================================ */
.why-carousel{
  position:relative;
  margin-top:10px;
  perspective:1600px;
  user-select:none;
}
.wc-stage{
  position:relative;
  height:340px;
  transform-style:preserve-3d;
}
/* cada card é posicionado/animado via JS (translateX + scale + blur) */
.why-carousel .why-card{
  position:absolute;
  top:50%;
  left:50%;
  width:min(340px,82vw);
  min-height:248px;
  margin:0;
  padding:32px 30px;
  display:flex;
  flex-direction:column;
  gap:14px;
  background:linear-gradient(160deg,var(--navy-800),var(--navy-900));
  border:1px solid var(--line-light);
  border-radius:var(--r,16px);
  box-shadow:0 24px 50px -26px rgba(0,0,0,.6);
  transform:translate(-50%,-50%);
  transition:transform .5s ease-in-out, filter .5s ease-in-out, opacity .5s ease-in-out, box-shadow .5s ease-in-out, border-color .5s ease-in-out;
  will-change:transform,filter,opacity;
  backface-visibility:hidden;
  cursor:pointer;
}
.why-carousel .why-card .ic{width:36px;height:36px;color:var(--yellow)}
.why-carousel .why-card .ic svg{width:100%;height:100%;display:block}
.why-carousel .why-card h4{font-family:var(--head);font-weight:700;font-size:19px;line-height:1.2;color:#fff}
.why-carousel .why-card p{font-size:14.5px;line-height:1.6;color:rgba(255,255,255,.74)}
/* card central em destaque: borda dourada + brilho */
.why-carousel .why-card.is-active{
  border-color:var(--yellow);
  box-shadow:0 0 0 1px var(--yellow), 0 26px 60px -22px rgba(237,205,31,.45), 0 30px 60px -30px rgba(0,0,0,.7);
}

/* setas */
.wc-arrow{
  position:absolute;top:50%;transform:translateY(-50%);z-index:60;
  width:52px;height:52px;border-radius:999px;
  display:grid;place-items:center;
  background:rgba(6,34,63,.06);border:1px solid var(--line-strong);
  color:var(--navy);font-size:20px;line-height:1;
  transition:background .2s,color .2s,border-color .2s,transform .2s;
}
.wc-arrow:hover{background:var(--yellow);color:var(--navy-900);border-color:var(--yellow)}
.wc-prev{left:max(6px,2vw)}
.wc-next{right:max(6px,2vw)}

/* dots */
.wc-dots{display:flex;justify-content:center;gap:10px;margin-top:30px}
.wc-dot{
  width:9px;height:9px;border-radius:999px;padding:0;border:0;
  background:var(--line-strong);transition:background .3s,transform .3s,width .3s;
}
.wc-dot.is-active{background:var(--yellow-deep);width:26px;transform:none}

/* ---- mobile: 1 card por vez, sem efeito 3D lateral ---- */
@media (max-width:768px){
  .why-carousel{perspective:none}
  .wc-stage{height:auto;min-height:300px}
  .why-carousel .why-card{width:min(360px,86vw)}
  .wc-arrow{width:46px;height:46px;font-size:18px}
}
</style>
<?php $head_extra = ob_get_clean(); include __DIR__ . '/includes/header.php'; ?>
<!-- ============================ HERO ============================ -->
<section class="page-hero" id="hero">
  <div class="wrap">
    <div class="crumbs"><a href="/">Início</a> / <span>Lajes</span></div>
    <span class="badge-tag">Fabricação própria · 25 anos</span>
    <h1>LAJES <span class="hl">TRELIÇADAS</span></h1>
    <p class="lead">Fabricação própria. Qualidade certificada. Soluções para pequenos e grandes vãos.</p>
    <div class="hero-actions">
      <a class="btn-solid" href="https://wa.me/551938782233?text=Ol%C3%A1%2C+quero+um+or%C3%A7amento+de+Lajes" target="_blank" rel="noopener">Solicitar Orçamento <span>&rarr;</span></a>
      <a class="btn-ghost" href="#laje-trelicada">Ver Produtos</a>
    </div>
  </div>
</section>

<!-- ============================ PRODUTOS DE LAJE (seções full-screen 100vh) ============================ -->

<!-- 1. Laje Treliçada -->
<section class="sec prod-section on-concrete-2" id="laje-trelicada">
  <div class="wrap">
    <div class="prod-detail reveal">
      <div class="pd-media ticks">
        <img loading="lazy" decoding="async" src="https://static.wixstatic.com/media/e9aa01_7f2531a2b18946e8a5536e801b9fc29f~mv2.jpg/v1/fill/w_1000,h_750,al_c,q_85,enc_avif,quality_auto/laje-trelicada-unidirecional-e-bidirecional-03.jpg" alt="Laje treliçada unidirecional e bidirecional">
        <span class="pd-meta">LAJE TRELIÇADA</span>
      </div>
      <div class="pd-copy">
        <span class="pd-idx">/01</span>
        <h3>Laje Treliçada Unidirecional e Bidirecional</h3>
        <p class="pd-text">Sistema pré-fabricado com vigotas treliçadas de concreto armado e enchimento em EPS ou lajotas cerâmicas. Distribui as cargas em uma ou duas direções, adaptando-se a obras de todos os portes — residenciais, comerciais e industriais — com agilidade de montagem e alto desempenho estrutural.</p>
        <div class="feat-list">
          <span class="feat"><span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h7l-1 8 10-12h-7l1-8z"/></svg></span>Agilidade na execução</span>
          <span class="feat"><span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6l8-4z"/></svg></span>Alto desempenho estrutural</span>
          <span class="feat"><span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7h18M3 12h18M3 17h18"/></svg></span>Versátil (uni e bidirecional)</span>
        </div>
        <a class="pd-cta" href="https://wa.me/551938782233?text=Ol%C3%A1%2C+quero+um+or%C3%A7amento+de+Lajes" target="_blank" rel="noopener">Quero um orçamento <span>&rarr;</span></a>
      </div>
    </div>
  </div>
</section>

<!-- 2. Painel Treliçado -->
<section class="sec prod-section on-navy" id="painel-trelicado">
  <div class="wrap">
    <div class="prod-detail flip reveal">
      <div class="pd-media ticks">
        <img loading="lazy" decoding="async" src="https://static.wixstatic.com/media/e9aa01_144fc9c06d66422a91927a9a026cbced~mv2.png/v1/fill/w_1000,h_750,al_c,q_85,enc_avif,quality_auto/LAJE%20PAINEL.png" alt="Laje painel treliçado">
        <span class="pd-meta">PAINEL TRELIÇADO</span>
      </div>
      <div class="pd-copy">
        <span class="pd-idx">/02</span>
        <h3>Laje Painel Treliçado (Uni e Bidirecional)</h3>
        <p class="pd-text">Armação treliçada sobre base de concreto, podendo receber EPS. O próprio painel atua como fôrma — fôrma zero, dispensando compensados e tábuas — e entrega acabamento liso na face inferior, pronto para gesso ou pintura. Disponível em painéis de 25 cm ou 1,10 m, podendo ficar aparente.</p>
        <div class="feat-list">
          <span class="feat"><span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3l18 18M5 5v14h14"/></svg></span>Sem fôrma de madeira</span>
          <span class="feat"><span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7h16M4 12h16M4 17h16"/></svg></span>Acabamento uniforme</span>
          <span class="feat"><span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h7v7H4zM13 13h7v7h-7z"/></svg></span>Encaixe perfeito</span>
          <span class="feat"><span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h7l-1 8 10-12h-7l1-8z"/></svg></span>Montagem rápida</span>
        </div>
        <a class="pd-cta" href="https://wa.me/551938782233?text=Ol%C3%A1%2C+quero+um+or%C3%A7amento+de+Lajes" target="_blank" rel="noopener">Quero um orçamento <span>&rarr;</span></a>
      </div>
    </div>
  </div>
</section>

<!-- 3. Laje Fácil -->
<section class="sec prod-section on-concrete-2" id="laje-facil">
  <div class="wrap">
    <div class="prod-detail reveal">
      <div class="pd-media ticks">
        <img loading="lazy" decoding="async" src="https://static.wixstatic.com/media/e9aa01_2a4aef17c318401c83b389cd4fd10634~mv2.png/v1/fill/w_1000,h_750,al_c,q_85,enc_avif,quality_auto/FACIL.png" alt="Laje Fácil">
        <span class="pd-meta">LAJE FÁCIL</span>
      </div>
      <div class="pd-copy">
        <span class="badge-novidade">Novidade</span>
        <span class="pd-idx">/03</span>
        <h3>Laje Fácil</h3>
        <p class="pd-text">Vigotas mais leves e sistema de encaixe intuitivo, para uma instalação ágil e segura — sem necessidade de equipamentos pesados. Ideal para obras residenciais e comerciais, inclusive em grandes vãos, com a praticidade que acelera o canteiro.</p>
        <div class="feat-list">
          <span class="feat"><span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h7l-1 8 10-12h-7l1-8z"/></svg></span>Leve</span>
          <span class="feat"><span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5L20 6"/></svg></span>Prática</span>
          <span class="feat"><span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5L20 6"/></svg></span>Sem equipamentos pesados</span>
        </div>
        <a class="pd-cta" href="https://wa.me/551938782233?text=Ol%C3%A1%2C+quero+um+or%C3%A7amento+de+Lajes" target="_blank" rel="noopener">Quero um orçamento <span>&rarr;</span></a>
      </div>
    </div>
  </div>
</section>

<!-- 4. Cortina de Contenção -->
<section class="sec prod-section on-navy" id="cortina-contencao">
  <div class="wrap">
    <div class="prod-detail flip reveal">
      <div class="pd-media ticks">
        <img loading="lazy" decoding="async" src="https://static.wixstatic.com/media/e9aa01_144fc9c06d66422a91927a9a026cbced~mv2.png/v1/fill/w_1000,h_750,al_c,q_85,enc_avif,quality_auto/LAJE%20PAINEL.png" alt="Cortina de contenção — painel treliçado duplo">
        <span class="pd-meta">CORTINA DE CONTENÇÃO</span>
      </div>
      <div class="pd-copy">
        <span class="pd-idx">/04</span>
        <h3>Cortina de Contenção — Painel Treliçado Duplo</h3>
        <p class="pd-text">Solução estrutural e geotécnica para estabilização de taludes e contenção de solo. O painel duplo funciona como fôrma faceada pré-pronta, encaixada nos perfis metálicos cravados — agilidade extrema na montagem, eliminação das fôrmas de madeira e alta resistência aos empuxos de terra. Ideal para subsolos e garagens.</p>
        <div class="feat-list">
          <span class="feat"><span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h7l-1 8 10-12h-7l1-8z"/></svg></span>Contenção rápida</span>
          <span class="feat"><span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3l18 18M5 5v14h14"/></svg></span>Sem madeira</span>
          <span class="feat"><span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6l8-4z"/></svg></span>Alta resistência</span>
        </div>
        <a class="pd-cta" href="https://wa.me/551938782233?text=Ol%C3%A1%2C+quero+um+or%C3%A7amento+de+Lajes" target="_blank" rel="noopener">Quero um orçamento <span>&rarr;</span></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================ TELAS SOLDADAS ============================ -->
<section class="sec prod-section on-concrete-2" id="telas">
  <div class="wrap">
    <div class="sec-head">
      <div class="left">
        <span class="sec-idx"><b>02</b> / COMPLEMENTO</span>
        <h2 class="sec-title">TELAS SOLDADAS</h2>
      </div>
      <div class="sec-rule"></div>
    </div>
    <p class="sec-intro">Produzidas com aço CA-60 e soldagem elétrica automatizada, são ideais para lajes, calçadas e estruturas — reduzem fissuras e aceleram a montagem. Disponíveis nos modelos EQ45, EQ61, EQ92 e EQ138 (2,00×3,00 m) e Q61 a Q283 (2,45×6,00 m).</p>

    <div class="tbl-block reveal">
      <div class="tbl-cap">Tela Soldada 2,00 × 3,00 m</div>
      <div class="tbl-wrap">
        <table class="tbl">
          <thead><tr><th>Modelo</th><th>Malha (cm)</th><th>Bitola</th></tr></thead>
          <tbody>
            <tr><td>EQ45</td><td>20x20</td><td>ø 3,4mm</td></tr>
            <tr><td>EQ61</td><td>15x15</td><td>ø 3,4mm</td></tr>
            <tr><td>EQ92</td><td>15x15</td><td>ø 4,2mm</td></tr>
            <tr><td>EQ138</td><td>10x10</td><td>ø 4,2mm</td></tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="tbl-block reveal">
      <div class="tbl-cap">Tela Soldada 2,45 × 6,00 m</div>
      <div class="tbl-wrap">
        <table class="tbl">
          <thead><tr><th>Modelo</th><th>Malha (cm)</th><th>Bitola</th></tr></thead>
          <tbody>
            <tr><td>Q61</td><td>15x15</td><td>ø 3,4mm</td></tr>
            <tr><td>Q92</td><td>15x15</td><td>ø 4,2mm</td></tr>
            <tr><td>Q113</td><td>10x10</td><td>ø 3,8mm</td></tr>
            <tr><td>Q138</td><td>10x10</td><td>ø 4,2mm</td></tr>
            <tr><td>Q166</td><td>10x10</td><td>ø 4,5mm</td></tr>
            <tr><td>Q196</td><td>10x10</td><td>ø 5,0mm</td></tr>
            <tr><td>Q246</td><td>10x10</td><td>ø 5,6mm</td></tr>
            <tr><td>Q283</td><td>10x10</td><td>ø 6,0mm</td></tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="hero-actions" style="margin-top:34px">
      <a class="btn-solid" href="https://wa.me/551938782233?text=Ol%C3%A1%2C+quero+um+or%C3%A7amento+de+Telas+Soldadas" target="_blank" rel="noopener">Solicitar Telas Soldadas <span>&rarr;</span></a>
    </div>
  </div>
</section>

<!-- ============================ POR QUE ESCOLHER ============================ -->
<section class="sec" id="porque">
  <div class="wrap">
    <div class="sec-head">
      <div class="left">
        <span class="sec-idx"><b>03</b> / DIFERENCIAIS</span>
        <h2 class="sec-title">POR QUE A BM ESTRUTURAL</h2>
      </div>
      <div class="sec-rule"></div>
    </div>

    <!-- Carrossel 3D cover flow (JS puro, escopo desta página) -->
    <div class="why-carousel reveal" id="whyCarousel" aria-roledescription="carrossel">
      <button class="wc-arrow wc-prev" type="button" aria-label="Card anterior">&larr;</button>

      <div class="wc-stage" id="wcStage">
        <div class="why-card">
          <span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
          <h4>25 anos de experiência</h4>
          <p>Tradição e know-how técnico acumulados em milhares de obras pelo estado de São Paulo.</p>
        </div>
        <div class="why-card">
          <span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0z"/><path d="M4 21v-1a6 6 0 0112 0v1"/></svg></span>
          <h4>Engenheiros experientes</h4>
          <p>Equipe técnica que dimensiona a solução estrutural ideal para cada projeto e vão.</p>
        </div>
        <div class="why-card">
          <span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6l8-4z"/><path d="M9 12l2 2 4-4"/></svg></span>
          <h4>Qualidade certificada</h4>
          <p>Matérias-primas certificadas e produção conforme as normas técnicas vigentes.</p>
        </div>
        <div class="why-card">
          <span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></span>
          <h4>Atendimento diferenciado</h4>
          <p>Suporte técnico próximo, do orçamento à entrega, para tirar dúvidas em cada etapa.</p>
        </div>
        <div class="why-card">
          <span class="ic"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 13l2-5h11l3 5M5 13h14v4H5z"/><circle cx="8" cy="18" r="1.6"/><circle cx="16" cy="18" r="1.6"/></svg></span>
          <h4>Entrega em todo SP</h4>
          <p>Logística própria com foco em Jundiaí e Campinas, atendendo todo o estado.</p>
        </div>
      </div>

      <button class="wc-arrow wc-next" type="button" aria-label="Próximo card">&rarr;</button>
      <div class="wc-dots" id="wcDots" aria-hidden="true"></div>
    </div>
  </div>
</section>

<!-- ============================ CTA FINAL ============================ -->
<section class="cta-final">
  <div class="wrap">
    <h2>Pronto para acelerar <span class="hl">sua obra?</span></h2>
    <p>Fale com nossa equipe e receba um orçamento de lajes sob medida para o seu projeto.</p>
    <a class="btn-big" href="https://wa.me/551938782233?text=Ol%C3%A1%2C+quero+um+or%C3%A7amento+de+Lajes" target="_blank" rel="noopener">
      <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163a11.867 11.867 0 01-1.587-5.946C.16 5.335 5.495 0 12.05 0a11.817 11.817 0 018.413 3.488 11.824 11.824 0 013.48 8.414c-.003 6.557-5.338 11.892-11.893 11.892a11.9 11.9 0 01-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884a9.86 9.86 0 001.51 5.26l-.999 3.648 3.978-1.107zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
      Chamar no WhatsApp
    </a>
    <span class="cta-phone">(19) 3878-2233</span>
  </div>
</section>
<script>
/* ============================================================
   Carrossel 3D cover flow (#porque) — JavaScript puro
   ============================================================ */
(function () {
  'use strict';
  var root = document.getElementById('whyCarousel');
  if (!root) return;

  var stage = document.getElementById('wcStage');
  var dotsWrap = document.getElementById('wcDots');
  var cards = Array.prototype.slice.call(stage.querySelectorAll('.why-card'));
  var n = cards.length;
  if (!n) return;

  var active = Math.floor(n / 2);   // começa no card do meio
  var timer = null;
  var DUR = 3000;
  var mq = window.matchMedia('(max-width:768px)');

  /* menor deslocamento circular entre i e o card ativo (ex.: -2..2) */
  function offsetOf(i) {
    var d = i - active;
    if (d > n / 2) d -= n;
    if (d < -n / 2) d += n;
    return d;
  }

  function place(card, off) {
    var x, ry, scale, blur, op, z, active0 = (off === 0);
    if (mq.matches) {
      /* mobile: só o card central visível, sem 3D lateral */
      if (active0) { x = 0; scale = 1; blur = 0; op = 1; z = 30; }
      else { x = off > 0 ? 120 : -120; scale = .9; blur = 0; op = 0; z = 0; }
      card.style.transform = 'translate(-50%,-50%) translateX(' + x + '%) scale(' + scale + ')';
    } else {
      var a = Math.abs(off);
      if (a === 0) { x = 0; ry = 0; scale = 1.06; blur = 0; op = 1; z = 30; }
      else if (a === 1) { x = off * 260; ry = off * -22; scale = .86; blur = 1.5; op = .92; z = 20; }
      else { x = off * 235; ry = off * -28; scale = .72; blur = 3; op = .5; z = 10; }
      card.style.transform = 'translate(-50%,-50%) translateX(' + x + 'px) rotateY(' + ry + 'deg) scale(' + scale + ')';
    }
    card.style.filter = blur ? 'blur(' + blur + 'px)' : 'none';
    card.style.opacity = op;
    card.style.zIndex = z;
    card.style.pointerEvents = (op === 0) ? 'none' : 'auto';
    card.classList.toggle('is-active', active0);
    card.setAttribute('aria-hidden', active0 ? 'false' : 'true');
  }

  function render() {
    cards.forEach(function (c, i) { place(c, offsetOf(i)); });
    Array.prototype.slice.call(dotsWrap.children).forEach(function (d, i) {
      d.classList.toggle('is-active', i === active);
    });
  }

  function go(i) { active = (i + n) % n; render(); }
  function next() { go(active + 1); }
  function prev() { go(active - 1); }

  function start() { stop(); timer = setInterval(next, DUR); }
  function stop() { if (timer) { clearInterval(timer); timer = null; } }

  /* dots */
  for (var k = 0; k < n; k++) {
    (function (i) {
      var b = document.createElement('button');
      b.type = 'button';
      b.className = 'wc-dot';
      b.setAttribute('aria-label', 'Ir ao card ' + (i + 1));
      b.addEventListener('click', function () { go(i); start(); });
      dotsWrap.appendChild(b);
    })(k);
  }

  /* setas */
  root.querySelector('.wc-next').addEventListener('click', function () { next(); start(); });
  root.querySelector('.wc-prev').addEventListener('click', function () { prev(); start(); });

  /* clicar / passar o mouse num card lateral o torna central */
  cards.forEach(function (c, i) {
    c.addEventListener('click', function () { if (i !== active) { go(i); start(); } });
    c.addEventListener('mouseenter', function () { if (!mq.matches && i !== active) go(i); });
  });

  /* pausa o giro automático com o mouse sobre o carrossel */
  root.addEventListener('mouseenter', stop);
  root.addEventListener('mouseleave', start);

  /* swipe no mobile */
  var sx = 0, drag = false;
  stage.addEventListener('touchstart', function (e) { sx = e.touches[0].clientX; drag = true; stop(); }, { passive: true });
  stage.addEventListener('touchend', function (e) {
    if (!drag) return;
    var dx = e.changedTouches[0].clientX - sx;
    if (Math.abs(dx) > 40) { dx < 0 ? next() : prev(); }
    drag = false; start();
  }, { passive: true });

  /* reposiciona ao trocar entre desktop/mobile */
  (mq.addEventListener ? mq.addEventListener('change', render) : mq.addListener(render));

  /* pausa quando a aba não está visível */
  document.addEventListener('visibilitychange', function () {
    document.hidden ? stop() : start();
  });

  render();
  start();
})();
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
