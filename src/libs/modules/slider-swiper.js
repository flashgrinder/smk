import Swiper from 'swiper';

function init() {
    const servicesSlider = new Swiper(".services-slider__swiper", {
        slidesPerView: 4,
        // slidesPerColumn: 2,
        // slidesPerColumnFill: 'row',
        spaceBetween: 20,
        freeMode: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
    });
}

export default { init }