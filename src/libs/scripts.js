import burger from '../libs/modules/burger-menu.js';
import servicesSlider from '../libs/modules/slider-swiper.js';
import modal from '../libs/modules/modal.js';
import tooltipModal from '../libs/modules/tooltip-modal.js';
// import rangeCount from '../libs/modules/range-count.js';

document.addEventListener('DOMContentLoaded', function(e) {
    console.log('i`m work');
    burger.init();
    modal.init();
    servicesSlider.init();
    tooltipModal.init();
    // rangeCount.init();

    // const rangeSliders = document.querySelector(".shop-card__range");
    // const output = document.querySelector(".shop-card__field");

    // output.setAttribute('value', '')

    // output.innerHTML = rangeSliders.value; // Display the default slider value

    // Update the current slider value (each time you drag the slider handle)
    // rangeSliders.oninput = function() {
    //     output.innerHTML = this.setAttribute(value, this.value);
    // }

    // rangeSliders.forEach(el => {
    //     // console.log(el);
    //     // console.log(rangeSliders);
    //     el.addEventListener('oninput', function() {
    //         output.innerHTML = this.value;
    //     })
    //     console.log(output)
    // })
    
});