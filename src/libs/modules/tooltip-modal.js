
const tooltipModalService = () => {
    const d = document;
    const body = d.querySelector('body');
    const buttons = d.querySelectorAll('[data-tooltip-trigger]');

    for(let button of buttons) {
        triggerEventTooltip(button);
    }
    
    function triggerEventTooltip(button) {
      button.addEventListener('click', () => {
        const trigger = button.getAttribute('data-tooltip-trigger');
        const modal = d.querySelector(`[data-tooltip=${trigger}]`);
        const modalBody = modal.querySelector('.tooltip-modal__body');
        const closeBtnTooltip = modal.querySelector('.tooltip-modal__close');
        
        closeBtnTooltip.addEventListener('click', () => {
            modal.classList.remove('is-open')
            modal.classList.add('is-out');
            setTimeout(() => {
                modal.classList.remove('is-out');
            }, 1300);
        } )

        modal.addEventListener('click', () => {
            modal.classList.remove('is-open');
            modal.classList.add('is-out');
            setTimeout(() => {
                modal.classList.remove('is-out');
            }, 1300);
        } )
        
        modalBody.addEventListener('click', (e) => e.stopPropagation());
  
        modal.classList.add('is-open');
        
        body.addEventListener('keydown', (e) => {
                if(e.keyCode === 27) {
                    modal.classList.remove('is-open')
                }
            });
        });
    }
}

function init() {
    tooltipModalService();
}
  
export default { init }