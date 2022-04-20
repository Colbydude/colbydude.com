const container = document.getElementById('contact');
const backdrop = document.getElementById('contact-backdrop');
const modal = document.getElementById('contact-modal');

const openModal = () => {
    // Show container.
    container.style.display = 'block';

    setTimeout(() => {
        // Set entering "to" state.
        backdrop.classList.replace('opacity-0', 'opacity-100');
        modal.classList.replace('opacity-0', 'opacity-100');
        modal.classList.replace('translate-y-4', 'translate-y-0');
        modal.classList.replace('sm:scale-95', 'sm:scale-100');

        // Finished transition.
        setTimeout(() => {
            // Setup for leaving "from" state.
            backdrop.classList.replace('ease-out', 'ease-in');
            modal.classList.replace('ease-out', 'ease-in');
        }, 150);
    }, 5);
};

const closeModal = () => {
    // Set leaving "to" state.
    backdrop.classList.replace('opacity-100', 'opacity-0');
    modal.classList.replace('opacity-100', 'opacity-0');
    modal.classList.replace('translate-y-0', 'translate-y-4');
    modal.classList.replace('sm:scale-100', 'sm:scale-95');

    // Finished transition.
    setTimeout(() => {
        // Hide container.
        container.style.display = 'none';
        // Reset state to entering "from" state.
        backdrop.classList.replace('ease-in', 'ease-out');
        modal.classList.replace('ease-in', 'ease-out');
    }, 150);
};

// Add event handlers.
const openTriggers = document.querySelectorAll(`[data-toggle*="modal"]`);
const closeTriggers = document.querySelectorAll(`[data-dismiss*="modal"]`);

for (let i = 0; i < closeTriggers.length; i++) {
    closeTriggers[i].onclick = (event) => {
        event.preventDefault();
        closeModal();
    };
}

for (let i = 0; i < openTriggers.length; i++) {
    openTriggers[i].onclick = (event) => {
        event.preventDefault();
        openModal();
    };
}

/**
 * @param {MouseEvent} event
 */
window.onclick = (event) => {
    if (event.target == backdrop) {
        closeModal();
    }
};

/**
 * @param {KeyboardEvent} event
 */
window.onkeyup = (event) => {
    if (event.key === 'Escape' && container.style.display === 'block') {
        closeModal();
    }
};
