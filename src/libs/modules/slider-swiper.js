import Swiper, { Navigation } from 'swiper';

function init() {

    Swiper.use([Navigation]);

    const servicesSlider = new Swiper(".services-slider__swiper", {
        slidesPerView: 2,
        slidesPerColumn: 2,
        slidesPerColumnFill: 'row',
        spaceBetween: 10,
        navigation: {
            nextEl: '.services-slider__arrow--next',
            prevEl: '.services-slider__arrow--prev'
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                slidesPerColumn: 2,
                spaceBetween: 10
            },
            576: {
                slidesPerView: 3,
                slidesPerColumn: 2,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 3,
                slidesPerColumn: 2,
                spaceBetween: 20
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
                slidesPerColumn: 1
            }
        }
    });

    // const swiperPrev = document.querySelector('.services-slider__arrow--prev')
    // const swiperNext = document.querySelector('.services-slider__arrow--next')

    // swiperPrev.addEventListener('click', () => {
    //     servicesSlider.slidePrev();
    // })
    // swiperNext.addEventListener('click', () => {
    //     servicesSlider.slideNext();
    // })
}

export default { init }