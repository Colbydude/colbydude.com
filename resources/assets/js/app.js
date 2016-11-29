/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function()
{
    // Switch to dark color scheme.
    $('.choose-dark').click(function (e)
    {
        e.preventDefault();
        $.post('update_style', { style: 'dark' });
        $('body').removeClass('light');
        $('body').addClass('dark');
        $('.lastname').fadeOut(300, function()
        {
            $('.username').fadeIn(300);
        });
    });

    // Switch to light color scheme.
    $('.choose-light').click(function (e)
    {
        e.preventDefault();
        $.post('update_style', { style: 'light' });
        $('body').removeClass('dark');
        $('body').addClass('light');
        $('.username').fadeOut(300, function()
        {
            $('.lastname').fadeIn(300);
        });
    });
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
