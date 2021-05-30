// CSS
import '../scss/style.scss';

// Images
import '../img/imagen-predeterminada-para-posts.png';
import '../img/logo-vertical-comercio-justo-clac-web.png';
import '../img/icono-clac-admin.png';
import '../img/logo-clac.png';
import '../img/logo-fairtrade.png';
import '../img/logo-spp.png';
import '../img/logo-wfto-latino-america.png';
import '../img/logo-union-europea.jpeg';
import '../img/favicon-comercio-justo-clac-web.png';
import '../img/fondo-de-iconos.jpg';
import '../img/foto-01-pagina-inicio.png';
import '../img/foto-01-pagina-quienes-somos.jpg';
import '../img/foto-02-pagina-quienes-somos.jpg';
import '../img/icono-comercio-justo-01.png';
import '../img/icono-comercio-justo-02.png';
import '../img/icono-comercio-justo-03.png';
import '../img/icono-comercio-justo-clac-web.png';
import '../img/logo-comercio-justo-clac-web.png';

// Js
import './contact-form.js';

const btnMenu = document.querySelector('.js-btn-menu');
const mbMenu = document.querySelector('.js-mb-menu');
const closeBtnMbMenu = document.querySelector('.js-close-mb-menu');

btnMenu.addEventListener('click', function() {
  mbMenu.classList.remove('hidden');
});

closeBtnMbMenu.addEventListener('click', function() {
  mbMenu.classList.add('hidden');
});

var swiper1 = new Swiper ('.swiper-container-1', {
  speed: 1500,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },

  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

var swiper2 = new Swiper('.swiper-container-2', {
  slidesPerView: 4,
  spaceBetween: 30,
  centeredSlides: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    720: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1140: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  }
});

var swiper3 = new Swiper('.swiper-container-3', {
  slidesPerView: 4,
  spaceBetween: 30,
  centeredSlides: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    720: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1140: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  }
});
