/**
 * First we will load all of this project's JavaScript dependencies which
 * includes a plethora of libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(() => {
    // Switch color scheme.
    $('.choose-style').on('click', function (e) {
        e.preventDefault();
        var style = $(this).data('style');

        axios.post('/update_style', {
            style: $(this).data('style')
        }).then(response => {
            if (style == 'dark') {
                $('body').removeClass('light');
                $('body').addClass('dark');
                $('.lastname').fadeOut(300, () => {
                    $('.username').fadeIn(300);
                });
            }

            if (style == 'light') {
                $('body').removeClass('dark');
                $('body').addClass('light');
                $('.username').fadeOut(300, () => {
                    $('.lastname').fadeIn(300);
                });
            }
        }).catch(error => {
            console.log(error);
        });
    });
});
