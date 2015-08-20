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
    });

    // Switch to light color scheme.
    $('.choose-light').click(function (e)
    {
        e.preventDefault();
        $.post('update_style', { style: 'light' });
        $('body').removeClass('dark');
        $('body').addClass('light');
    });

    // Handle contact modal.
    $('#contact-button').click(function(e)
    {
        e.preventDefault();

        $('#contact-modal').modal();
    });
});
