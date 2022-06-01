const contactModal = document.querySelector('dialog#contact');
const nameInput = document.querySelector('#contact input#name');

const showContactModal = () => {
    // Show container.
    contactModal.showModal();
    // Focus on input.
    nameInput.focus();

    setTimeout(() => {
        // Set entering "to" state.
        contactModal.classList.replace('backdrop:bg-black/0', 'backdrop:bg-black/50');
        contactModal.classList.replace('opacity-0', 'opacity-100');
        contactModal.classList.replace('sm:scale-95', 'sm:scale-100');

        // Finished transition.
        setTimeout(() => {
            // Setup for leaving "from" state.
            contactModal.classList.replace('backdrop:ease-out', 'backdrop:ease-in');
            contactModal.classList.replace('ease-out', 'ease-in');
        }, 150);
    }, 5);
};

const closeContactModal = () => {
    // Set leaving "to" state.
    contactModal.classList.replace('backdrop:bg-black/50', 'backdrop:bg-black/0');
    contactModal.classList.replace('opacity-100', 'opacity-0');
    contactModal.classList.replace('sm:scale-100', 'sm:scale-95');

    // Finished transition.
    setTimeout(() => {
        // Hide container.
        contactModal.close();

        // Reset state to entering "from" state.
        contactModal.classList.replace('backdrop:ease-in', 'backdrop:ease-out');
        contactModal.classList.replace('ease-in', 'ease-out');
    }, 150);
};

// Open the contact modal when any element with data-dialog is set.
document.querySelectorAll(`[data-dialog*="contact"]`).forEach((el) => {
    el.addEventListener('click', (e) => {
        e.preventDefault();
        showContactModal();
    });
});

// Close the contact modal when any element with data-dismiss is set.
document.querySelectorAll(`[data-dismiss*="contact"]`).forEach((el) => {
    el.addEventListener('click', (e) => {
        e.preventDefault();
        closeContactModal();
    });
});

// Handle closing the dialog with the escape key to allow transitions.
contactModal.addEventListener('cancel', (e) => {
    e.preventDefault();
    closeContactModal();
});
