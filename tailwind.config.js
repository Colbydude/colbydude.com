module.exports = {
    content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
    darkMode: 'class',
    plugins: [
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
    theme: {
        extend: {},
    }
};
