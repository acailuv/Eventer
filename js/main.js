$(function(){

    // Head Inits
    $('head').load('/html/head_init.html');

    // Load Resusable Objects
    var includes = $('[data-include]');
    jQuery.each(includes, function(){
        var file = '/html/' + $(this).data('include') + '.html';
        $(this).load(file);
    });
});
