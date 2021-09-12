
const sidebarLinks = document.querySelectorAll('.js-sidebar-link');



function sidebarIsActive(e) {
    sidebarLinks.forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('is-active');
        }
    })
}

function init() {
    sidebarIsActive();
}

export default { init }