<?php
$active = 'home';
$canonical_path = '/';

// Feedback do formulário de contato (redirecionado por /contato)
$form_status = '';
if (isset($_GET['sucesso'])) { $form_status = 'ok'; }
elseif (isset($_GET['erro'])) { $form_status = 'err'; }

$title  = 'BM Estrutural | Lajes e Aço para Construção Civil em Jundiaí e Campinas';
$desc   = 'BM Estrutural Soluções em Engenharia: 25 anos fabricando lajes treliçadas e representante exclusivo Morandin de aço para construção civil. Atendimento em todo o estado de São Paulo, com foco em Jundiaí e Campinas.';
$cta_href = 'https://wa.me/551938782233?text=Estou+no+site+e+gostaria+de+mais+informa%C3%A7%C3%B5es';
ob_start(); ?>
<style>
/* ============================================================
   ESTILOS DA HOME (index): inline no head para não tocar style.css
   ============================================================ */

/* ---- HERO: vídeo na metade direita, divisória diagonal dourada ---- */
.hero-video{
  position:relative;
  overflow:hidden;
  background:var(--navy-900);
}
.hero-inner{
  position:relative;
  z-index:2;
  display:flex;
  align-items:center;
  min-height:clamp(540px,82vh,780px);
}
.hero-content{
  color:#fff;
  display:flex;
  flex-direction:column;
  gap:22px;
  max-width:min(500px,40vw);
  padding-block:clamp(40px,8vh,90px);
  padding-right:clamp(16px,3vw,48px);
}

/* painel de vídeo: metade direita, sangra até a borda, corte diagonal */
.hero-media-video{
  position:absolute;
  top:0; right:0; bottom:0;
  width:54%;
  z-index:1;
  background:var(--navy-900);
}
.hero-media-video::before{          /* fio dourado ao longo da diagonal */
  content:"";
  position:absolute; inset:0; z-index:1;
  background:linear-gradient(180deg,var(--yellow),var(--yellow-deep));
  clip-path:polygon(13.2% 0, 100% 0, 100% 100%, -0.8% 100%);
}
.hero-media-video video{
  position:absolute; inset:0; z-index:2;
  width:100%; height:100%;
  object-fit:cover; display:block;
  clip-path:polygon(14% 0, 100% 0, 100% 100%, 0 100%);
}

/* mobile: empilha — vídeo cheio em moldura arredondada (sem diagonal) */
@media (max-width:979px){
  .hero-inner{ display:block; min-height:0; padding-block:clamp(40px,9vh,72px); }
  .hero-content{ max-width:none; padding:0 0 26px; }
  .hero-media-video{
    position:relative; width:100%;
    border-radius:var(--r-lg); overflow:hidden;
    border-top:3px solid var(--yellow);
    filter:none;
  }
  .hero-media-video::before{ display:none; }
  .hero-media-video video{ position:static; clip-path:none; aspect-ratio:16/9; }
}
.hero-badge{
  font-family:var(--mono);
  font-size:12px;
  font-weight:600;
  letter-spacing:.22em;
  text-transform:uppercase;
  color:var(--yellow);
  display:inline-flex;
  align-items:center;
  gap:10px;
}
.hero-badge::before{
  content:"";
  width:28px;
  height:2px;
  background:var(--yellow);
}
.hero-title{
  font-family:var(--display);
  font-weight:800;
  font-size:clamp(36px,4.6vw,64px);
  line-height:.98;
  letter-spacing:-.02em;
  max-width:16ch;
}
.hero-title .hl{ color:var(--yellow); }
.hero-sub{
  font-size:clamp(16px,1.6vw,19px);
  line-height:1.65;
  color:rgba(255,255,255,.78);
  max-width:46ch;
}
.hero-actions{
  display:flex;
  flex-wrap:wrap;
  gap:14px;
  margin-top:8px;
}
@media (max-width:560px){
  .hero-title{ font-size:clamp(36px,12vw,56px); }
}

/* ---- OBRAS: imagem no topo + texto em fundo claro abaixo ---- */
.on-navy .obra{
  background:var(--paper);
  border-radius:var(--r-lg);
  overflow:hidden;
  min-height:auto;
  display:flex;
  flex-direction:column;
  align-items:stretch;
  box-shadow:var(--sh-md);
}
.obra-img{
  position:relative;
  aspect-ratio:3/4;
  overflow:hidden;
  background:var(--navy-700);
}
.obra-img img{
  position:absolute;
  inset:0;
  width:100%;
  height:100%;
  object-fit:cover;
  filter:saturate(0.9);
  transition:transform .7s cubic-bezier(.2,.7,.2,1);
}
.obra:hover .obra-img img{ transform:scale(1.06); }
.on-navy .obra::after{ display:none; }
.on-navy .obra-body{
  position:static;
  background:var(--paper);
  color:var(--ink);
  padding:24px 26px 28px;
  gap:10px;
}
.on-navy .obra-body .n{ color:var(--yellow-deep); }
.on-navy .obra-body h3{ color:var(--navy); font-size:24px; }
.on-navy .obra-body p{ color:var(--muted); }
.on-navy .obra-body .more{ color:var(--navy); }
.on-navy .obra-body .more:hover{ color:var(--yellow-deep); }

/* ---- MODAL DE FEEDBACK DO FORMULÁRIO ---- */
.fb-modal{
  position:fixed; inset:0; z-index:9999;
  display:flex; align-items:center; justify-content:center;
  padding:24px;
  background:rgba(4,24,46,.62);
  backdrop-filter:blur(3px);
}
.fb-card{
  position:relative;
  width:min(420px,100%);
  background:var(--paper);
  border-radius:var(--r-lg);
  box-shadow:var(--sh-md);
  padding:38px 32px 32px;
  text-align:center;
}
.fb-ico{
  width:62px; height:62px; margin:0 auto 18px;
  display:flex; align-items:center; justify-content:center;
  border-radius:50%;
}
.fb-card.ok  .fb-ico{ background:rgba(47,170,90,.14); color:#2faa5a; }
.fb-card.err .fb-ico{ background:rgba(217,180,0,.16); color:var(--yellow-deep); }
.fb-ico svg{ width:30px; height:30px; }
.fb-card h3{ font-family:var(--display); color:var(--navy); font-size:24px; margin:0 0 8px; }
.fb-card p{ color:var(--muted); line-height:1.6; margin:0 0 22px; }
.fb-card .btn-solid{ width:100%; justify-content:center; }
.fb-close{
  position:absolute; top:12px; right:14px;
  background:none; border:0; cursor:pointer;
  font-size:26px; line-height:1; color:var(--muted);
}
.fb-close:hover{ color:var(--navy); }

/* ---- QUEM SOMOS: galeria com duas imagens ---- */
.about-gallery{ display:grid; gap:16px; }
.about-gallery img{
  width:100%;
  aspect-ratio:16/10;
  object-fit:cover;
  border-radius:var(--r-lg);
  box-shadow:var(--sh-md);
}
</style>
<?php $head_extra = ob_get_clean(); include __DIR__ . '/includes/header.php'; ?>
<!-- ============================ HERO: TEXTO + VÍDEO LADO A LADO ============================ -->
<section class="hero-video" id="top-hero">
  <div class="wrap hero-inner">
    <div class="hero-content">
      <span class="hero-badge">BM ESTRUTURAL · 25 ANOS</span>
      <h1 class="hero-title">LAJES <span class="hl">TRELIÇADAS</span> E AÇO PARA CONSTRUÇÃO CIVIL</h1>
      <p class="hero-sub">Fabricação própria de lajes e representante exclusivo Morandin, com soluções estruturais para toda a sua obra em Jundiaí, Campinas e todo o estado de São Paulo.</p>
      <div class="hero-actions">
        <a class="btn-solid" href="#produtos">Ver Produtos <span>&rarr;</span></a>
        <a class="btn-ghost" href="<?= $cta_href ?>" target="_blank" rel="noopener">Solicitar Orçamento</a>
      </div>
    </div>
  </div>
  <div class="hero-media-video">
    <video
      src="/assets/video/file.mp4"
      autoplay muted loop playsinline preload="metadata"
      poster="https://static.wixstatic.com/media/e9aa01_0ead27b3e69540c485024ad9b81a75a0f000.jpg/v1/fill/w_1920,h_1080,al_c,q_85,enc_avif,quality_auto/e9aa01_0ead27b3e69540c485024ad9b81a75a0f000.jpg"
    ></video>
  </div>
</section>

<!-- ticker -->
<div class="ticker" aria-hidden="true">
  <div class="ticker-track" id="ticker">
    <span>LAJES TRELIÇADAS</span><span>PAINEL TRELIÇADO</span><span>LAJE FÁCIL</span><span>TELAS SOLDADAS</span><span>AÇO PARA CONSTRUÇÃO</span><span>AÇO CORTADO E DOBRADO</span><span>25 ANOS DE EXPERIÊNCIA</span><span>REPRESENTANTE MORANDIN</span>
    <span>LAJES TRELIÇADAS</span><span>PAINEL TRELIÇADO</span><span>LAJE FÁCIL</span><span>TELAS SOLDADAS</span><span>AÇO PARA CONSTRUÇÃO</span><span>AÇO CORTADO E DOBRADO</span><span>25 ANOS DE EXPERIÊNCIA</span><span>REPRESENTANTE MORANDIN</span>
  </div>
</div>

<!-- ============================ PRODUTOS ============================ -->
<section class="sec on-concrete-2" id="produtos">
  <div class="wrap">
    <div class="sec-head">
      <div class="left">
        <h2 class="sec-title">PRODUTOS</h2>
      </div>
      <div class="sec-rule"></div>
    </div>

    <div class="prod-grid">
      <article class="prod reveal">
        <div class="prod-img"><span class="prod-num">01</span>
          <img loading="lazy" decoding="async" width="800" height="600" src="https://static.wixstatic.com/media/e9aa01_7f2531a2b18946e8a5536e801b9fc29f~mv2.jpg/v1/fill/w_800,h_600,al_c,q_85,enc_avif,quality_auto/laje-trelicada-unidirecional-e-bidirecional-03.jpg" alt="Laje treliçada unidirecional e bidirecional"></div>
        <div class="prod-body">
          <h3>Laje Treliçada</h3>
          <p>Vigotas treliçadas com enchimento em EPS ou cerâmica, excelente opção para obras de pequeno e grande porte.</p>
          <a class="prod-link" href="/lajes#laje-trelicada">Ver Laje Treliçada <span class="ar">&rarr;</span></a>
        </div>
      </article>

      <article class="prod reveal d1">
        <div class="prod-img"><span class="prod-num">02</span>
          <img loading="lazy" decoding="async" width="800" height="600" src="https://static.wixstatic.com/media/e9aa01_144fc9c06d66422a91927a9a026cbced~mv2.png/v1/fill/w_800,h_600,al_c,q_85,enc_avif,quality_auto/LAJE%20PAINEL.png" alt="Painel treliçado"></div>
        <div class="prod-body">
          <h3>Painel Treliçado</h3>
          <p>Fôrma zero e acabamento liso na face inferior, em painéis de 25 cm ou 1,10 m, pode ficar aparente.</p>
          <a class="prod-link" href="/lajes#painel-trelicado">Ver Painel Treliçado <span class="ar">&rarr;</span></a>
        </div>
      </article>

      <article class="prod reveal d2">
        <div class="prod-img"><span class="prod-num">03</span>
          <img loading="lazy" decoding="async" width="800" height="600" src="https://static.wixstatic.com/media/e9aa01_2a4aef17c318401c83b389cd4fd10634~mv2.png/v1/fill/w_800,h_600,al_c,q_85,enc_avif,quality_auto/FACIL.png" alt="Laje Fácil"></div>
        <div class="prod-body">
          <h3>Laje Fácil</h3>
          <p>Leve, prática e com encaixe intuitivo: instalação ágil e segura, sem equipamentos pesados.</p>
          <a class="prod-link" href="/lajes#laje-facil">Ver Laje Fácil <span class="ar">&rarr;</span></a>
        </div>
      </article>

      <article class="prod reveal d3">
        <div class="prod-img"><span class="prod-num">04</span>
          <img loading="lazy" decoding="async" width="800" height="600" src="https://static.wixstatic.com/media/e9aa01_6ea87fe0ab0b43cab3aceae7ac2d3e5d~mv2.jpg/v1/fill/w_800,h_600,al_c,q_85,enc_avif,quality_auto/team-image4.jpg" alt="Telas soldadas em aço CA-60"></div>
        <div class="prod-body">
          <h3>Telas Soldadas</h3>
          <p>Em aço CA-60, distribuem as cargas sobre as lajes e reduzem fissuras em calçadas e estruturas.</p>
          <a class="prod-link" href="/lajes#telas">Ver Telas Soldadas <span class="ar">&rarr;</span></a>
        </div>
      </article>
    </div>

    <!-- destaque: nova vertical AÇO -->
    <article class="prod-aco reveal">
      <span class="prod-badge">NOVO</span>
      <div class="prod-aco-media ticks">
        <img loading="lazy" decoding="async" src="/assets/img/vergalhoes_CA50_e_CA.webp" alt="Aço para construção civil: vergalhões e telas soldadas">
      </div>
      <div class="prod-aco-body">
        <span class="prod-aco-idx">05 / NOVA VERTICAL</span>
        <h3>AÇO para Construção Civil</h3>
        <p>Representante exclusivo Morandin: vergalhões CA-50, telas soldadas e AÇO cortado e dobrado.</p>
        <a class="btn-solid" href="/aco">Ver Produtos <span>&rarr;</span></a>
      </div>
    </article>
  </div>
</section>

<!-- ============================ QUEM SOMOS ============================ -->
<section class="sec" id="quem-somos">
  <div class="wrap">
    <div class="sec-head">
      <div class="left">
        <h2 class="sec-title">QUEM SOMOS</h2>
      </div>
      <div class="sec-rule"></div>
    </div>

    <div class="about-grid" style="align-items:start">
      <div class="about-copy">
        <p class="lead reveal">A <b>BM Estrutural Soluções em Engenharia</b> é uma empresa com mais de 25 anos de experiência, especializada na fabricação de lajes treliçadas e, como <b>representante exclusivo Morandin</b>, no fornecimento de aço para construção civil. Com engenheiros experientes e rigor técnico, atuamos em todo o estado de São Paulo, com foco nas regiões de Jundiaí e Campinas, entregando soluções estruturais para pequenos e grandes vãos com qualidade, segurança e agilidade em cada projeto.</p>
        <div class="stats reveal d1">
          <div class="stat"><span class="big">25</span><span class="lbl">Anos de Experiência</span></div>
          <div class="stat"><div class="mk"></div><span class="lbl">Valor Justo para cada Obra</span></div>
          <div class="stat"><div class="mk"></div><span class="lbl">Material ideal para cada Projeto</span></div>
          <div class="stat accent"><div class="mk"></div><span class="lbl">Atendimento Diferenciado</span></div>
        </div>
      </div>
      <div class="about-media reveal d2 ticks">
        <div class="about-gallery">
          <img loading="lazy" decoding="async" src="./assets/img/bm-estrutural-vista-de-cima-com-logo.png" alt="Vista aérea da sede da BM Estrutural em Louveira/SP">
          <img loading="lazy" decoding="async" src="./assets/img/bm-entrada.png" alt="Entrada da BM Estrutural com caminhão carregado de lajes treliçadas para entrega">
        </div>
        <span class="badge">SEDE · LOUVEIRA/SP</span>
      </div>
    </div>
  </div>
</section>

<!-- ============================ OBRAS ============================ -->
<section class="sec on-navy" id="obras">
  <div class="wrap">
    <div class="sec-head">
      <div class="left">
        <h2 class="sec-title">OBRAS</h2>
      </div>
      <div class="sec-rule"></div>
    </div>

    <div class="obras-grid">
      <article class="obra reveal">
        <div class="obra-img">
          <img loading="lazy" decoding="async" width="600" height="740" src="https://static.wixstatic.com/media/e9aa01_ff613288d5854aed8b9f62fb353d37e6~mv2.png/v1/crop/x_7,y_0,w_595,h_733/fill/w_600,h_740,al_c,q_85,enc_avif,quality_auto/1.png" alt="Obra com lajes treliçadas da BM Estrutural — Inovar">
        </div>
        <div class="obra-body">
          <span class="n">/01</span>
          <h3>Inovar</h3>
          <p>Na BM Estrutural, a inovação é a chave para o sucesso. Trabalhamos com qualidade, agilidade e confiança.</p>
          <a class="more" href="#contato">Fale com a BM Estrutural &rarr;</a>
        </div>
      </article>

      <article class="obra reveal d1">
        <div class="obra-img">
          <img loading="lazy" decoding="async" width="600" height="740" src="https://static.wixstatic.com/media/e9aa01_f83e9d99d41247e49c2555263e02933e~mv2.png/v1/crop/x_121,y_0,w_693,h_854/fill/w_600,h_740,al_c,q_85,enc_avif,quality_auto/2.png" alt="Obra com lajes treliçadas da BM Estrutural — Renovar">
        </div>
        <div class="obra-body">
          <span class="n">/02</span>
          <h3>Renovar</h3>
          <p>Com tradição e tecnologia, a BM Estrutural renova sua obra com soluções inteligentes para a sua obra.</p>
          <a class="more" href="#contato">Fale com a BM Estrutural &rarr;</a>
        </div>
      </article>

      <article class="obra reveal d2">
        <div class="obra-img">
          <img loading="lazy" decoding="async" width="600" height="740" src="https://static.wixstatic.com/media/e9aa01_ebe5f9f6d71148a39f2510c1b531b08d~mv2.png/v1/crop/x_57,y_0,w_689,h_849/fill/w_600,h_740,al_c,q_85,enc_avif,quality_auto/3.png" alt="Obra com lajes treliçadas da BM Estrutural — Evoluir">
        </div>
        <div class="obra-body">
          <span class="n">/03</span>
          <h3>Evoluir</h3>
          <p>A BM Estrutural evolui para entregar lajes com mais qualidade e agilidade.</p>
          <a class="more" href="#contato">Fale com a BM Estrutural &rarr;</a>
        </div>
      </article>
    </div>

    <div class="obras-tag reveal">
      <div class="big">Soluções modernas para a sua <em>Obra.</em></div>
      <a class="btn-solid" href="https://wa.me/551938782233" target="_blank" rel="noopener">Fale conosco <span>&rarr;</span></a>
    </div>
  </div>
</section>

<!-- ============================ REGIÕES ============================ -->
<section class="sec on-concrete-2" id="regioes">
  <div class="wrap">
    <div class="sec-head">
      <div class="left">
        <h2 class="sec-title">REGIÕES ATENDIDAS</h2>
      </div>
      <div class="sec-rule"></div>
    </div>

    <div class="reg-grid reveal">
      <div class="reg-info">
        <span class="kicker">Cobertura</span>
        <div class="reg-coord">
          <b>MATRIZ</b> &nbsp; 23°05′S · 46°57′O<br>
          Estrada das Abelhas, 445<br>
          Louveira/SP
        </div>
        <div class="reg-chips">
          <span class="reg-chip">Louveira</span>
          <span class="reg-chip">Vinhedo</span>
          <span class="reg-chip">Valinhos</span>
          <span class="reg-chip">Campinas</span>
          <span class="reg-chip">Itatiba</span>
          <span class="reg-chip">Jundiaí</span>
          <span class="reg-chip">Itupeva</span>
          <span class="reg-chip">São Paulo</span>
        </div>
      </div>
      <div class="reg-map">
        <iframe loading="lazy" title="Região atendida" src="https://www.google.com/maps?q=Louveira,+SP&z=10&output=embed"></iframe>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/contato.php'; ?>

<?php if ($form_status === 'ok'): ?>
<div class="fb-modal" id="fb-modal" role="dialog" aria-modal="true" aria-labelledby="fb-title">
  <div class="fb-card ok">
    <button type="button" class="fb-close" data-fb-close aria-label="Fechar">&times;</button>
    <div class="fb-ico">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
    </div>
    <h3 id="fb-title">Mensagem enviada!</h3>
    <p>Recebemos seu contato e retornaremos em breve. Obrigado!</p>
    <button type="button" class="btn-solid" data-fb-close>Fechar</button>
  </div>
</div>
<?php elseif ($form_status === 'err'): ?>
<div class="fb-modal" id="fb-modal" role="dialog" aria-modal="true" aria-labelledby="fb-title">
  <div class="fb-card err">
    <button type="button" class="fb-close" data-fb-close aria-label="Fechar">&times;</button>
    <div class="fb-ico">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 9v4m0 4h.01M10.3 3.86l-8.5 14.7A2 2 0 003.5 21h17a2 2 0 001.73-2.44l-8.5-14.7a2 2 0 00-3.46 0z"/></svg>
    </div>
    <h3 id="fb-title">Não foi possível enviar</h3>
    <p>Ocorreu um erro ao enviar sua mensagem. Tente novamente ou fale conosco pelo WhatsApp (19) 3878-2233.</p>
    <button type="button" class="btn-solid" data-fb-close>Fechar</button>
  </div>
</div>
<?php endif; ?>
<?php if ($form_status): ?>
<script>
(function () {
  var modal = document.getElementById('fb-modal');
  if (!modal) return;
  function fechar() {
    modal.remove();
    // limpa ?sucesso/?erro da URL sem recarregar
    if (window.history && history.replaceState) {
      history.replaceState(null, '', location.pathname + '#contato');
    }
  }
  modal.addEventListener('click', function (e) {
    if (e.target === modal || e.target.hasAttribute('data-fb-close')) fechar();
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') fechar();
  });
})();
</script>
<?php endif; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
