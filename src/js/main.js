// CSS
import '../scss/style.scss';
import '../scss/admin-home-slider.scss';

// Images
import '../img/imagen-predeterminada-para-posts.png';
import '../img/logo-vertical-comercio-justo-clac-web.png';
import '../img/icono-clac-admin.png';

const btnMenu = document.querySelector('.js-btn-menu');
const mbMenu = document.querySelector('.js-mb-menu');
const closeBtnMbMenu = document.querySelector('.js-close-mb-menu');
/* const whoWeAreBtn = document.querySelector('.js-who-we-are-btn');
const whoWeAreMenu = document.querySelector('.js-who-we-are-menu'); */

btnMenu.addEventListener('click', function() {
  mbMenu.classList.remove('hidden');
});

closeBtnMbMenu.addEventListener('click', function() {
  mbMenu.classList.add('hidden');
});

/* whoWeAreBtn.addEventListener('click', function(event) {
  event.stopPropagation();
  whoWeAreMenu.classList.remove('hidden');
}); */

/* document.body.addEventListener('click', function() {
  whoWeAreMenu.classList.add('hidden');
});

whoWeAreMenu.addEventListener('click', function(event) {
  event.stopPropagation();
}); */

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

swiper2.slideTo(1, 0);

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

swiper3.slideTo(1, 0);
