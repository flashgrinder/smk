import gsap from 'gsap';

const burger = document.querySelector('.js-burger');
const menu = document.querySelector('.js-menu');
let isOpen = burger.classList.contains('is-open');

let tl = gsap.timeline({defaults: {duration: .2, ease: 'power3.out'}});

tl.paused(true);
tl.to('.header__menu .menu__item', {opacity: 1, stagger: .1});

function open() {
    burger.classList.add('is-open');
    menu.classList.add('is-open');
    setTimeout(() => {
        tl.play();
    }, 300);
    isOpen = true;
}

function close() {
    burger.classList.remove('is-open');
    menu.classList.remove('is-open');
    tl.reverse(1);
    isOpen = false;
}

const anchorLinks = document.querySelectorAll('.js-anchor-link'); // .js-anchor-link .menu__link

anchorLinks.forEach(link => {
    link.addEventListener('click', () => {
        close();
    })
});

document.addEventListener('keydown', (e) => {if(e.keyCode === 27 || e.which === 27) {close()}});

function toggle() {
    isOpen ? close() : open();
}

function init() {
    burger.addEventListener('click', toggle);
}

function destroy() {
    burger.removeEventListener('click', toggle)
}

export default {init, destroy, toggle}