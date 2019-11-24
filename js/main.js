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

    // Load Reusable PHP Objects
    var includes = $('[data-include-php]');
    jQuery.each(includes, function(){
        var file = '/php/' + $(this).data('include-php') + '.php';
        $(this).load(file);
    });
});

    // Password confirmation
    var check = function() {
      if (document.getElementById('password').value ==
        document.getElementById('confirm_password').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Password Match';
        document.getElementById('submit').disabled = false;
      } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Password doesnt Match!';
        document.getElementById('submit').disabled = true;
      }
    }
