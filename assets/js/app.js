/* ============================================================
   BM ESTRUTURAL — interações
   Compartilhado entre index.html, lajes.html e aco.html.
   Cada bloco é protegido para rodar apenas quando os
   elementos existem na página atual.
   ============================================================ */
(function () {
  'use strict';

  /* ---------- BANNER ROLÁVEL (somente na home) ---------- */
  var track = document.getElementById('track');
  var banner = document.getElementById('banner');
  if (track && banner) {
    var dots = Array.prototype.slice.call(document.querySelectorAll('.dot'));
    var slides = document.querySelectorAll('.banner-track .slide').length || 2;
    var cur = 0, timer = null, DUR = 6000;

    var go = function (i) {
      cur = (i + slides) % slides;
      track.style.transform = 'translateX(' + (-cur * 100) + '%)';
      dots.forEach(function (d, k) { d.classList.toggle('active', k === cur); });
      restart();
    };
    var next = function () { go(cur + 1); };
    var prev = function () { go(cur - 1); };
    var restart = function () {
      clearInterval(timer);
      if (!banner.classList.contains('paused')) timer = setInterval(next, DUR);
    };

    var nextBtn = document.getElementById('next');
    var prevBtn = document.getElementById('prev');
    if (nextBtn) nextBtn.addEventListener('click', next);
    if (prevBtn) prevBtn.addEventListener('click', prev);
    dots.forEach(function (d) {
      d.addEventListener('click', function () { go(parseInt(d.dataset.i, 10)); });
    });

    banner.addEventListener('mouseenter', function () {
      banner.classList.add('paused'); clearInterval(timer);
    });
    banner.addEventListener('mouseleave', function () {
      banner.classList.remove('paused'); restart();
    });

    /* touch / swipe */
    var sx = 0, dx = 0, drag = false;
    banner.addEventListener('touchstart', function (e) { sx = e.touches[0].clientX; drag = true; }, { passive: true });
    banner.addEventListener('touchmove', function (e) { if (drag) dx = e.touches[0].clientX - sx; }, { passive: true });
    banner.addEventListener('touchend', function () {
      if (drag && Math.abs(dx) > 50) { dx < 0 ? next() : prev(); }
      drag = false; dx = 0;
    });

    restart();
  }

  /* ---------- HEADER SCROLL ---------- */
  var header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', function () {
      header.classList.toggle('scrolled', window.scrollY > 20);
    }, { passive: true });
  }

  /* ---------- ACTIVE NAV (scroll spy — apenas âncoras internas) ---------- */
  var navLinks = Array.prototype.slice.call(document.querySelectorAll('.nav a'));
  var spyPairs = navLinks
    .map(function (a) {
      var href = a.getAttribute('href') || '';
      if (href.charAt(0) !== '#' || href === '#') return null;
      var sec = document.querySelector(href);
      return sec ? { link: a, sec: sec } : null;
    })
    .filter(Boolean);

  if (spyPairs.length) {
    var spy = function () {
      var y = window.scrollY + 140;
      var idx = -1;
      spyPairs.forEach(function (p, i) { if (p.sec.offsetTop <= y) idx = i; });
      if (idx >= 0) {
        navLinks.forEach(function (a) { a.classList.remove('active'); });
        spyPairs[idx].link.classList.add('active');
      }
    };
    window.addEventListener('scroll', spy, { passive: true });
    spy();
  }

  /* ---------- MOBILE NAV ---------- */
  var mnav = document.getElementById('mnav');
  var burger = document.getElementById('burger');
  var mclose = document.getElementById('mclose');
  if (mnav && burger) {
    burger.addEventListener('click', function () { mnav.classList.add('open'); });
    if (mclose) mclose.addEventListener('click', function () { mnav.classList.remove('open'); });
    Array.prototype.slice.call(mnav.querySelectorAll('a')).forEach(function (a) {
      a.addEventListener('click', function () { mnav.classList.remove('open'); });
    });
  }

  /* ---------- SCROLL REVEAL ---------- */
  var revealEls = Array.prototype.slice.call(document.querySelectorAll('.reveal'));
  if (revealEls.length && 'IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (en.isIntersecting) { en.target.classList.add('in'); io.unobserve(en.target); }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('in'); });
  }

  /* ---------- FORM (somente onde existe) ---------- */
  var form = document.getElementById('contact-form');
  var note = document.getElementById('form-note');
  if (form && note) {
    form.addEventListener('submit', function (e) {
      var nome = (document.getElementById('nome').value || '').trim();
      var email = (document.getElementById('email').value || '').trim();
      if (!nome || !email) {
        e.preventDefault();
        note.style.color = '#D9B400';
        note.textContent = '› Preencha ao menos Nome e Email.';
        return;
      }
      // Válido: deixa o POST seguir para /contato (sem preventDefault)
      note.style.color = '#2faa5a';
      note.textContent = '› Enviando...';
    });
  }

  /* ---------- MÁSCARA DE TELEFONE (BR) ---------- */
  var tel = document.getElementById('telefone');
  if (tel) {
    var maskPhone = function (value) {
      var d = value.replace(/\D/g, '').slice(0, 11);
      if (d.length === 0) return '';
      if (d.length < 3) return '(' + d;
      var ddd = d.slice(0, 2);
      var rest = d.slice(2);
      if (d.length <= 6) return '(' + ddd + ') ' + rest;
      if (d.length <= 10) return '(' + ddd + ') ' + rest.slice(0, 4) + '-' + rest.slice(4); // fixo
      return '(' + ddd + ') ' + rest.slice(0, 5) + '-' + rest.slice(5);                     // celular
    };
    tel.setAttribute('inputmode', 'numeric');
    tel.setAttribute('maxlength', '15');
    tel.addEventListener('input', function () {
      tel.value = maskPhone(tel.value);
    });
  }

})();
