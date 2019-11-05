$(document).ready(function() {
    $('#login').on('click', function() {
        $('#main').load('/login.html');
    });
});

$(document).ready(function() {
    $('#register').on('click', function() {
        $('#main').load('/register.html');
    });
});


// footer
$(document).ready(function() {
    $('#aboutus').on('click', function() {
        $('#main').load('/aboutus.html');
    });
});

$(document).ready(function() {
    $('#followus').on('click', function() {
        $('#main').load('/followus.html');
    });
});

$(document).ready(function() {
    $('#contact').on('click', function() {
        $('#main').load('/contact.html');
    });
});
