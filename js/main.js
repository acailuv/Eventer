$(function(){
    // Remove warning
    $.ajaxPrefilter(function( options, originalOptions, jqXHR ) { options.async = true; });

    // Head Inits
    $('head').load('/html/head_init.html');

    // Load Resusable HTML Objects
    var includes = $('[data-include]');
    jQuery.each(includes, function(){
        var file = '/html/' + $(this).data('include') + '.html';
        $(this).load(file);
    });

    // Load Resusable PHP Objects
    var includes = $('[data-include-php]');
    jQuery.each(includes, function(){
        var file = '/php/' + $(this).data('include-php') + '.php';
        $(this).load(file);
    });
});
