const rangeSlider = document.querySelector(".shop-card__range");
const output = document.querySelector(".shop-card__field").value;
output.innerHTML = rangeSlider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
// rangeSlider.oninput = function() {
//   output.innerHTML = this.value;
// }

function rangeCount() {
    output.innerHTML = this.value;
}

function init() {
    rangeSlider.addEventListener('oninput', rangeCount);
    // rangeSlider.oninput = function() {
    //     output.innerHTML = this.value;
    // }
}

export default { init }