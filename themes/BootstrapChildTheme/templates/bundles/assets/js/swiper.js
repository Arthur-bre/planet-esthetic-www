import Swiper, { Navigation, Pagination } from 'swiper';

const swiper = new Swiper('#banner-slider', {
  modules: [Navigation, Pagination],
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
