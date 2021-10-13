export const fadeIn = (selector, time, callback = () => {}) => {
    let style = document.querySelector(selector).style;
    style.removeProperty('display');
    style.opacity = 0;

    (function fade() {
        style.opacity = parseFloat(style.opacity) + 0.1;

        if (style.opacity >= 1) {
            style.removeProperty('opacity');
            callback();
        } else {
            setTimeout(fade, time);
        }
    })();
};

export const fadeOut = (selector, time, callback = () => {}) => {
    let style = document.querySelector(selector).style;
    style.opacity = 1;

    (function fade() {
        style.opacity = parseFloat(style.opacity) - 0.1;

        if (style.opacity <= 0) {
            style.display = 'none';
            style.removeProperty('opacity');
            callback();
        } else {
            setTimeout(fade, time);
        }
    })();
};

export default {
    fadeIn,
    fadeOut
}
