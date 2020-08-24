const body = document.getElementsByTagName('body')[0];

export default () => ({
    /**
     * Change the site theme.
     *
     * @param  {String}  theme
     * @return {Void}
     */
    changeTheme(theme) {
        if (body.classList.contains(theme)) {
            return;
        }

        const themeToUnset = theme === 'dark' ? 'light' : 'dark';

        body.classList.remove(themeToUnset);
        body.classList.add(theme);

        this.setCookie('theme', theme);
    },

    /**
     * Set the given cookie to the given value.
     *
     * @param  {String}  name
     * @param  {mixed}   value
     * @return {Void}
     */
    setCookie(name, value) {
        const date = new Date();
        date.setTime(date.getTime() + (1000 * 60 * 60 * 24 * 365)); // 1 year

        const expires = `expires=${date.toUTCString()}`;

        document.cookie = `${name}=${value};${expires};path=/`;
    }
})
