$(document).ready(function()
{
    // Global tooltips.
    $('.buttons a').tooltip();

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
