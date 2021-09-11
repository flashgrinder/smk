import burger from '../libs/modules/burger-menu.js';
import servicesSlider from '../libs/modules/slider-swiper.js';
import modal from '../libs/modules/modal.js';
import tooltipModal from '../libs/modules/tooltip-modal.js';
import reveal from '../libs/modules/reveal.js';

document.addEventListener('DOMContentLoaded', function(e) {
    burger.init();
    modal.init();
    servicesSlider.init();
    tooltipModal.init();
    reveal.init();
    
});