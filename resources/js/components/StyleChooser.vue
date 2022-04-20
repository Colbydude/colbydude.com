<template>
    <div class="flex h-full items-center">
        <button
            @click.prevents="toggleStyle('dark')"
            class="w-6 h-6 mr-2 bg-slate-900 border-[1px] border-slate-700 rounded-full opacity-50 hover:opacity-100 transition duration-500 ease-in-out"
            title="Switch to Dark Theme"
        />
        <button
            @click.prevents="toggleStyle('light')"
            class="w-6 h-6 bg-white border-[1px] border-slate-200 rounded-full opacity-50 hover:opacity-100 transition duration-500 ease-in-out"
            title="Switch to Light Theme"
        />
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
                const htmlElement = document.querySelector('html');
                const siteImage = document.querySelector('[src*="colbydude-"]');

                if (style == 'dark') {
                    if (htmlElement.classList.contains('dark')) {
                        return;
                    }

                    htmlElement.classList.add('dark');

                    fadeOut('#lastname', 25, () => {
                        fadeIn('#username', 25);
                    });

                    if (siteImage) {
                        siteImage.src = siteImage.src.replace('light', 'dark');
                    }
                }

                if (style == 'light') {
                    if (!htmlElement.classList.contains('dark')) {
                        return;
                    }

                    htmlElement.classList.remove('dark');

                    fadeOut('#username', 25, () => {
                        fadeIn('#lastname', 25);
                    });

                    if (siteImage) {
                        siteImage.src = siteImage.src.replace('dark', 'light');
                    }
                }
            })
            .catch(() => console.log);
        }
    }
}
</script>
