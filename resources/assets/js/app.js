/**
 * First we will load all of this project's JavaScript dependencies which
 * includes a plethora of libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function() {
    // Switch color scheme.
    $('.choose-style').on('click', function (e) {
        e.preventDefault();
        var style = $(this).data('style');

        axios.post('/update_style', {
            style: $(this).data('style')
        }).then(function (response) {
            if (style == 'dark') {
                $('body').removeClass('light');
                $('body').addClass('dark');
                $('.lastname').fadeOut(300, function()
                {
                    $('.username').fadeIn(300);
                });
            }

            if (style == 'light') {
                $('body').removeClass('dark');
                $('body').addClass('light');
                $('.username').fadeOut(300, function()
                {
                    $('.lastname').fadeIn(300);
                });
            }
        }).catch(function (error) {
            console.log(error);
        });
    });
});
