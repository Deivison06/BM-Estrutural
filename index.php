<?php
$active = 'home';
$title  = 'BM Estrutural | Lajes e Aço para Construção Civil — Jundiaí e Campinas';
$desc   = 'BM Estrutural Soluções em Engenharia: 25 anos fabricando lajes treliçadas e representante exclusivo Morandin de aço para construção civil. Atendimento em todo o estado de São Paulo, com foco em Jundiaí e Campinas.';
$cta_href = 'https://wa.me/551938782233';
ob_start(); ?>
<style>
/* ============================================================
   ESTILOS DA HOME (index) — inline no head para não tocar style.css
   ============================================================ */

/* ---- HERO com vídeo full-screen ---- */
.hero-video{
  position:relative;
  min-height:100vh;
  min-height:100svh;
  display:flex;
  align-items:center;
  overflow:hidden;
  background:var(--navy-900);
}
.hero-bg-video{
  position:absolute;
  inset:0;
  width:100%;
  height:100%;
  object-fit:cover;
  filter:saturate(0.75) brightness(0.7);
}
.hero-overlay{
  position:absolute;
  inset:0;
  background:linear-gradient(
    180deg,
    rgba(4,24,46,0.55) 0%,
    rgba(4,24,46,0.72) 60%,
    rgba(4,24,46,0.90) 100%
  );
}
.hero-content{
  position:relative;
  z-index:2;
  color:#fff;
  display:flex;
  flex-direction:column;
  gap:22px;
  padding-block:clamp(80px,12vh,140px);
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
  font-size:clamp(42px,7.5vw,100px);
  line-height:.92;
  letter-spacing:-.02em;
  max-width:14ch;
}
.hero-title .hl{ color:var(--yellow); }
.hero-sub{
  font-size:clamp(16px,1.6vw,19px);
  line-height:1.65;
  color:rgba(255,255,255,.78);
  max-width:50ch;
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
</style>
<?php $head_extra = ob_get_clean(); include __DIR__ . '/includes/header.php'; ?>
<!-- ============================ HERO COM VÍDEO FULL-SCREEN ============================ -->
<section class="hero-video" id="top-hero">
  <video
    class="hero-bg-video"
    src="https://video.wixstatic.com/video/e9aa01_0ead27b3e69540c485024ad9b81a75a0/720p/mp4/file.mp4"
    autoplay muted loop playsinline
    poster="https://static.wixstatic.com/media/e9aa01_0ead27b3e69540c485024ad9b81a75a0f000.jpg/v1/fill/w_1920,h_1080,al_c,q_85,enc_avif,quality_auto/e9aa01_0ead27b3e69540c485024ad9b81a75a0f000.jpg"
  ></video>
  <div class="hero-overlay"></div>
  <div class="hero-content wrap">
    <span class="hero-badge">BM ESTRUTURAL — 25 ANOS</span>
    <h1 class="hero-title">LAJES <span class="hl">TRELIÇADAS</span><br>E AÇO PARA<br>CONSTRUÇÃO CIVIL</h1>
    <p class="hero-sub">Fabricação própria de lajes e representante exclusivo Morandin — soluções estruturais para toda a sua obra em Jundiaí, Campinas e todo o estado de São Paulo.</p>
    <div class="hero-actions">
      <a class="btn-solid" href="#produtos">Ver Produtos <span>&rarr;</span></a>
      <a class="btn-ghost" href="https://wa.me/551938782233" target="_blank" rel="noopener">Solicitar Orçamento</a>
    </div>
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
          <p>Vigotas treliçadas com enchimento em EPS ou cerâmica — excelente opção para obras de pequeno e grande porte.</p>
          <a class="prod-link" href="/lajes#laje-trelicada">Saiba mais <span class="ar">&rarr;</span></a>
        </div>
      </article>

      <article class="prod reveal d1">
        <div class="prod-img"><span class="prod-num">02</span>
          <img loading="lazy" decoding="async" src="https://static.wixstatic.com/media/e9aa01_144fc9c06d66422a91927a9a026cbced~mv2.png/v1/fill/w_800,h_600,al_c,q_85,enc_avif,quality_auto/LAJE%20PAINEL.png" alt="Painel treliçado"></div>
        <div class="prod-body">
          <h3>Painel Treliçado</h3>
          <p>Fôrma zero e acabamento liso na face inferior, em painéis de 25 cm ou 1,10 m — pode ficar aparente.</p>
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
        <img loading="lazy" decoding="async" src="/assets/img/vergalhoes_CA50_e_CA.webp" alt="Aço para construção civil — vergalhões e telas soldadas">
      </div>
      <div class="prod-aco-body">
        <span class="prod-aco-idx">05 / NOVA VERTICAL</span>
        <h3>AÇO para Construção Civil</h3>
        <p>Representante exclusivo Morandin — vergalhões CA-50, telas soldadas e AÇO cortado e dobrado.</p>
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
        <p class="lead reveal">A <b>BM Estrutural Soluções em Engenharia</b> é uma empresa com mais de 25 anos de experiência, especializada na fabricação de lajes treliçadas e, como <b>representante exclusivo Morandin</b>, no fornecimento de aço para construção civil. Com engenheiros experientes e rigor técnico, atuamos em todo o estado de São Paulo — com foco nas regiões de Jundiaí e Campinas — entregando soluções estruturais para pequenos e grandes vãos com qualidade, segurança e agilidade em cada projeto.</p>
        <div class="stats reveal d1">
          <div class="stat"><span class="big">25</span><span class="lbl">Anos de Experiência</span></div>
          <div class="stat"><div class="mk"></div><span class="lbl">Valor Justo para cada Obra</span></div>
          <div class="stat"><div class="mk"></div><span class="lbl">Material ideal para cada Projeto</span></div>
          <div class="stat accent"><div class="mk"></div><span class="lbl">Atendimento Diferenciado</span></div>
        </div>
      </div>
      <div class="about-media reveal d2 ticks">
        <img loading="lazy" decoding="async" src="https://static.wixstatic.com/media/e9aa01_0f21dc1412ea4eb7962c4f82598c3d0c~mv2.jpg/v1/fill/w_1100,h_825,al_c,q_85,enc_avif,quality_auto/about-image_edited.jpg" alt="Sede da BM Estrutural em Louveira — SP">
        <span class="badge">SEDE · LOUVEIRA — SP</span>
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
          Louveira — SP
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
          E-mail: <span class="phone">contato@estruturalse.com.br</span><br>
          Tel fixo: <span class="phone">(19) 3878-2233</span><br>
          Zap <span class="phone">(19) 3878-2233</span></p>
        </div>

        <div class="info-block reveal d2">
          <h3>Carreiras</h3>
          <p>Se você deseja fazer parte da nossa equipe, envie seu currículo e informações para o zap <span class="phone">(19) 3878-2233</span></p>
          <p style="margin-top:14px">Orçamento &nbsp; <span class="phone">(19) 3878-2233</span></p>
        </div>

        <div class="social reveal d2">
          <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="FACEBOOK">
            <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.07C24 5.4 18.63 0 12 0S0 5.4 0 12.07c0 6.02 4.39 11.01 10.13 11.93v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.68.24 2.68.24v2.97h-1.51c-1.49 0-1.96.93-1.96 1.89v2.25h3.33l-.53 3.49h-2.8V24C19.61 23.08 24 18.09 24 12.07z"/></svg>
          </a>
          <a href="https://www.instagram.com/bmestrutural" target="_blank" rel="noopener" aria-label="INSTAGRAM @bmestrutural">
            <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.7 3.7 0 01-1.38-.9 3.7 3.7 0 01-.9-1.38c-.16-.42-.36-1.06-.41-2.23C2.17 15.58 2.16 15.2 2.16 12s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16zm0 3.68A6.16 6.16 0 1018.16 12 6.16 6.16 0 0012 5.84zm0 10.16A4 4 0 1116 12a4 4 0 01-4 4zm6.4-10.4a1.44 1.44 0 11-1.44-1.44 1.44 1.44 0 011.44 1.44z"/></svg>
          </a>
        </div>
      </div>

      <form class="form reveal d1" id="contact-form" novalidate>
        <div class="frow">
          <div class="field"><label for="nome">Nome</label><input id="nome" type="text" placeholder="Nome"></div>
          <div class="field"><label for="sobrenome">Sobrenome</label><input id="sobrenome" type="text" placeholder="Sobrenome"></div>
        </div>
        <div class="frow">
          <div class="field"><label for="email">Email</label><input id="email" type="email" placeholder="Email"></div>
          <div class="field"><label for="telefone">Telefone</label><input id="telefone" type="tel" placeholder="Telefone"></div>
        </div>
        <div class="field full"><label for="msg">Mensagem</label><textarea id="msg" placeholder="Deixe-nos uma mensagem..."></textarea></div>
        <button type="submit" class="form-submit">Enviar <span>&rarr;</span></button>
        <div class="form-note" id="form-note"></div>
      </form>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
