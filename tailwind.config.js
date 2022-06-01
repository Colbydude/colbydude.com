const plugin = require('tailwindcss/plugin');

module.exports = {
    content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
    darkMode: 'class',
    plugins: [
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),

        // ::backdrop pseudo-element support.
        plugin(function ({ addVariant, e }) {
            addVariant('backdrop', ({ modifySelectors, separator }) => {
                modifySelectors(({ className }) => {
                    return `.${e(`backdrop${separator}${className}`)}::backdrop`;
                });
            });
        }),
    ],
    theme: {
        extend: {},
    },
};
