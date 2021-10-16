const createModalBackdrop = () => {
    const backdrop = document.createElement('div');
    backdrop.id = 'contact-backdrop';
    backdrop.classList.add('modal-backdrop', 'fade');

    return document.body.appendChild(backdrop);
};

const openModal = () => {
    const modal = document.getElementById('contact-modal');
    const backdrop = createModalBackdrop();

    modal.style.display = 'block';

    setTimeout(() => {
        backdrop.classList.add('in');
        modal.classList.add('in');
    }, 150);
}

const closeModal = () => {
    const backdrop = document.getElementById('contact-backdrop');
    const modal = document.getElementById('contact-modal');

    backdrop.classList.remove('in');
    modal.classList.remove('in');

    setTimeout(() => {
        modal.style.display = 'none';
        backdrop.remove();
    }, 150);
}

// Add event handlers.
const contactModal = document.getElementById('contact-modal');
const openTriggers = document.querySelectorAll(`[data-toggle*="modal"]`);
const closeTriggers = document.querySelectorAll(`[data-dismiss*="modal"]`);

for (let i = 0; i < closeTriggers.length; i++) {
    closeTriggers[i].onclick = (event) => {
        event.preventDefault();
        closeModal();
    }
}

for (let i = 0; i < openTriggers.length; i++) {
    openTriggers[i].onclick = (event) => {
        event.preventDefault();
        openModal();
    }
}

window.onclick = (event) => {
    if (event.target == contactModal) {
        closeModal();
    }
};
