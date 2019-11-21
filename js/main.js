function redirectTo_User() {
    $('#main').load('/html/user.html');
    $('#session_write').load('/php/current_page.php?current_page=/html/user.html');
    window.scrollTo(0, 0);
}

function redirectTo_Vendor() {
    $('#main').load('/html/vendor.html');
    $('#session_write').load('/php/current_page.php?current_page=/html/vendor.html');
    window.scrollTo(0, 0);
}

function redirectTo_Login() {
    $('#main').load('/html/login.html');
    $('#session_write').load('/php/current_page.php?current_page=/html/login.html');
    window.scrollTo(0, 0);
}


function redirectTo_vendorLogin(){
    $('#main').load('/html/vendorlogin.html');
    $('#session_write').load('/php/current_page.php?current_page=/html/vendorlogin.html');
    window.scrollTo(0, 0);
}

function redirectTo_Index() {
    $('#session_write').load('/php/current_page.php?current_page=/index.php');
    window.location.replace('/index.php');
    window.scrollTo(0, 0);
}



function syncMainDiv(current_page) {
    $('#main').load(current_page);
}
