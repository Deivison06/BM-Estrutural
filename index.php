<?php
$active = 'home';

// Feedback do formulário de contato (redirecionado por /contato)
$form_status = '';
if (isset($_GET['sucesso'])) { $form_status = 'ok'; }
elseif (isset($_GET['erro'])) { $form_status = 'err'; }

$title  = 'BM Estrutural | Lajes e Aço para Construção Civil em Jundiaí e Campinas';
$desc   = 'BM Estrutural Soluções em Engenharia: 25 anos fabricando lajes treliçadas e representante exclusivo Morandin de aço para construção civil. Atendimento em todo o estado de São Paulo, com foco em Jundiaí e Campinas.';
$cta_href = 'https://wa.me/551938782233';
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
        <a class="btn-ghost" href="https://wa.me/551938782233" target="_blank" rel="noopener">Solicitar Orçamento</a>
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
          <img loading="lazy" decoding="async" src="https://static.wixstatic.com/media/e9aa01_7f2531a2b18946e8a5536e801b9fc29f~mv2.jpg/v1/fill/w_800,h_600,al_c,q_85,enc_avif,quality_auto/laje-trelicada-unidirecional-e-bidirecional-03.jpg" alt="Laje treliçada unidirecional e bidirecional"></div>
        <div class="prod-body">
          <h3>Laje Treliçada</h3>
          <p>Vigotas treliçadas com enchimento em EPS ou cerâmica, excelente opção para obras de pequeno e grande porte.</p>
          <a class="prod-link" href="/lajes#laje-trelicada">Saiba mais <span class="ar">&rarr;</span></a>
        </div>
      </article>

      <article class="prod reveal d1">
        <div class="prod-img"><span class="prod-num">02</span>
          <img loading="lazy" decoding="async" src="https://static.wixstatic.com/media/e9aa01_144fc9c06d66422a91927a9a026cbced~mv2.png/v1/fill/w_800,h_600,al_c,q_85,enc_avif,quality_auto/LAJE%20PAINEL.png" alt="Painel treliçado"></div>
        <div class="prod-body">
          <h3>Painel Treliçado</h3>
          <p>Fôrma zero e acabamento liso na face inferior, em painéis de 25 cm ou 1,10 m, pode ficar aparente.</p>
          <a class="prod-link" href="/lajes#painel-trelicado">Saiba mais <span class="ar">&rarr;</span></a>
        </div>
      </article>

      <article class="prod reveal d2">
        <div class="prod-img"><span class="prod-num">03</span>
          <img loading="lazy" decoding="async" src="https://static.wixstatic.com/media/e9aa01_2a4aef17c318401c83b389cd4fd10634~mv2.png/v1/fill/w_800,h_600,al_c,q_85,enc_avif,quality_auto/FACIL.png" alt="Laje Fácil"></div>
        <div class="prod-body">
          <h3>Laje Fácil</h3>
          <p>Leve, prática e com encaixe intuitivo: instalação ágil e segura, sem equipamentos pesados.</p>
          <a class="prod-link" href="/lajes#laje-facil">Saiba mais <span class="ar">&rarr;</span></a>
        </div>
      </article>

      <article class="prod reveal d3">
        <div class="prod-img"><span class="prod-num">04</span>
          <img loading="lazy" decoding="async" src="https://static.wixstatic.com/media/e9aa01_6ea87fe0ab0b43cab3aceae7ac2d3e5d~mv2.jpg/v1/fill/w_800,h_600,al_c,q_85,enc_avif,quality_auto/team-image4.jpg" alt="Telas soldadas"></div>
        <div class="prod-body">
          <h3>Telas Soldadas</h3>
          <p>Em aço CA-60, distribuem as cargas sobre as lajes e reduzem fissuras em calçadas e estruturas.</p>
          <a class="prod-link" href="/lajes#telas">Saiba mais <span class="ar">&rarr;</span></a>
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
          <img loading="lazy" decoding="async" src="https://static.wixstatic.com/media/e9aa01_ff613288d5854aed8b9f62fb353d37e6~mv2.png/v1/crop/x_7,y_0,w_595,h_733/fill/w_600,h_740,al_c,q_85,enc_avif,quality_auto/1.png" alt="Inovar">
        </div>
        <div class="obra-body">
          <span class="n">/01</span>
          <h3>Inovar</h3>
          <p>Na BM Estrutural, a inovação é a chave para o sucesso. Trabalhamos com qualidade, agilidade e confiança.</p>
          <a class="more" href="#contato">Leia mais &rarr;</a>
        </div>
      </article>

      <article class="obra reveal d1">
        <div class="obra-img">
          <img loading="lazy" decoding="async" src="https://static.wixstatic.com/media/e9aa01_f83e9d99d41247e49c2555263e02933e~mv2.png/v1/crop/x_121,y_0,w_693,h_854/fill/w_600,h_740,al_c,q_85,enc_avif,quality_auto/2.png" alt="Renovar">
        </div>
        <div class="obra-body">
          <span class="n">/02</span>
          <h3>Renovar</h3>
          <p>Com tradição e tecnologia, a BM Estrutural renova sua obra com soluções inteligentes para a sua obra.</p>
          <a class="more" href="#contato">Leia mais &rarr;</a>
        </div>
      </article>

      <article class="obra reveal d2">
        <div class="obra-img">
          <img loading="lazy" decoding="async" src="https://static.wixstatic.com/media/e9aa01_ebe5f9f6d71148a39f2510c1b531b08d~mv2.png/v1/crop/x_57,y_0,w_689,h_849/fill/w_600,h_740,al_c,q_85,enc_avif,quality_auto/3.png" alt="Evoluir">
        </div>
        <div class="obra-body">
          <span class="n">/03</span>
          <h3>Evoluir</h3>
          <p>A BM Estrutural evolui para entregar lajes com mais qualidade e agilidade.</p>
          <a class="more" href="#contato">Leia mais &rarr;</a>
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

<!-- ============================ CONTATO ============================ -->
<section class="sec on-navy" id="contato">
  <div class="wrap">
    <div class="sec-head">
      <div class="left">
        <h2 class="sec-title">CONTATO</h2>
      </div>
      <div class="sec-rule"></div>
    </div>

    <div class="contact-grid">
      <div class="contact-info">
        <div class="info-block reveal">
          <h3>Informações</h3>
          <p>Para obter informações, esclarecer dúvidas ou enviar comentários, entre em contato pelo WhatsApp <span class="phone">(19) 3878-2233</span>. Ou preencha e envie o formulário abaixo:</p>
          <a class="whats" href="https://wa.me/551938782233" target="_blank" rel="noopener">
            <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163a11.867 11.867 0 01-1.587-5.946C.16 5.335 5.495 0 12.05 0a11.817 11.817 0 018.413 3.488 11.824 11.824 0 013.48 8.414c-.003 6.557-5.338 11.892-11.893 11.892a11.9 11.9 0 01-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884a9.86 9.86 0 001.51 5.26l-.999 3.648 3.978-1.107zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
            Chamar no WhatsApp
          </a>
        </div>

        <div class="info-block reveal d1">
          <h3>Matriz</h3>
          <p>Estrada das Abelhas, 445<br>
          Bairro Ponte Preta - Louveira - SP<br><br>
          Cep 13291-258<br>
          E-mail: <span class="phone">contato@bmestrutural.com.br</span><br>
          Tel fixo: <span class="phone">(19) 3878-2233</span><br>
          Zap <span class="phone">(19) 3878-2233</span></p>
        </div>

        <div class="info-block reveal d2">
          <h3>Carreiras</h3>
          <p>Se você deseja fazer parte da nossa equipe, envie seu currículo e informações para o zap <span class="phone">(19) 3878-2233</span></p>
          <p style="margin-top:14px">Orçamento &nbsp; <span class="phone">(19) 3878-2233</span></p>
        </div>

        <div class="social reveal d2"><?php include __DIR__ . '/includes/social.php'; ?></div>
      </div>

      <form class="form reveal d1" id="contact-form" action="/contato" method="post" novalidate>
        <div class="frow">
          <div class="field"><label for="nome">Nome</label><input id="nome" name="nome" type="text" placeholder="Nome" required></div>
          <div class="field"><label for="sobrenome">Sobrenome</label><input id="sobrenome" name="sobrenome" type="text" placeholder="Sobrenome"></div>
        </div>
        <div class="frow">
          <div class="field"><label for="email">Email</label><input id="email" name="email" type="email" placeholder="Email" required></div>
          <div class="field"><label for="telefone">Telefone</label><input id="telefone" name="telefone" type="tel" placeholder="Telefone"></div>
        </div>
        <div class="field full"><label for="msg">Mensagem</label><textarea id="msg" name="msg" placeholder="Deixe-nos uma mensagem..."></textarea></div>
        <!-- honeypot anti-spam: oculto, deve ficar vazio -->
        <input type="text" name="website" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0">
        <button type="submit" class="form-submit">Enviar <span>&rarr;</span></button>
        <div class="form-note" id="form-note"></div>
      </form>
    </div>
  </div>
</section>

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
