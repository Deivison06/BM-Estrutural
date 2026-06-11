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
          <a class="whats" href="https://wa.me/551938782233?text=Estou+no+site+e+gostaria+de+mais+informa%C3%A7%C3%B5es" target="_blank" rel="noopener">
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

        <div class="social reveal d2"><?php include __DIR__ . '/social.php'; ?></div>
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
