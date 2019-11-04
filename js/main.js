$(document).ready(function() {
    $('#a').on('click', function() {
        $('#main').load('/login.html');
    });
});

$(document).ready(function() {
    $('#b').on('click', function() {
        $('#main').load('/register.html');
    });
});