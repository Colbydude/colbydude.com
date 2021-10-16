<template>
    <div class="style-chooser">
        <button @click.prevents="toggleStyle('dark')" class="choose-style choose-dark" title="Switch to Dark Theme"></button>
        <button @click.prevents="toggleStyle('light')" class="choose-style choose-light" title="Switch to Light Theme"></button>
    </div>
</template>

<script>
import { fadeIn, fadeOut } from '../utils';

export default {
    name: 'StyleChooser',

    methods: {
        /**
         * Toggle the light/dark style across the site.
         *
         * @param  {string}  style
         * @return {Void}
         */
        toggleStyle(style) {
            window.axios.post('/update_style', { style })
            .then(() => {
                const bodyElement = document.querySelector('body');

                if (style == 'dark') {
                    if (bodyElement.classList.contains('dark')) {
                        return;
                    }

                    bodyElement.classList.remove('light');
                    bodyElement.classList.add('dark');

                    fadeOut('.lastname', 30, () => {
                        fadeIn('.username', 30);
                    });
                }

                if (style == 'light') {
                    if (bodyElement.classList.contains('light')) {
                        return;
                    }

                    bodyElement.classList.remove('dark');
                    bodyElement.classList.add('light');

                    fadeOut('.username', 30, () => {
                        fadeIn('.lastname', 30);
                    });
                }
            })
            .catch(() => console.log);
        }
    }
}
</script>
