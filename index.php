<?php /*
    =======================================
    ; Job Board                           ;
    =======================================
    ; The purpose of this Job board       ;
    ; is to remind you the current issues ;
    ; that needs to be fixed.             ;
    ;                                     ;
    ; Good Luck! :)                       ;
    =======================================

    "Pretty much done."

    Things to improve [IMPORTANT - MAKE THIS YOUR TOP PRIORITY]:
    > Password confirmation: when signing up, if the password != confirmation, display an error message
                             achieve this using javascript somehow. (DONE)
    > Email regex: example - will accept 'a@b.c' or 'example@email.com' but will not accept entry other than that format (DONE)
    > NO duplicate username when signing up (vendor + user) (DONE)

    Things to add [DO THIS AFTER YOU ARE DONE]:
    > Profile picture upload.
    > Add icons besides headers: (see how shop page looks like for reference)
                                 use https://fontawesome.com/cheatsheet to see what icons are available

*/ ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/main.js"></script>
</head>

<body>
    <div data-include-php="navbar"></div>

    <div class="container">
        <img class="animated fadeInDown delay-05s" src="img/logo.png" style="margin: 144px; background: transparent;" alt="Eventer Event Organizer Marketplace Logo">
        <h1 class="animated fadeInUp delay-05s">Innovative Event Organizer Marketplace.</h1>
        <div class="row">
            <div class="col-sm-8">
                <p class="animated fadeInUp delay-05s" style="text-align: justify">
                    Eventer gives you what you want whether you are a client or an event organizer.
                    Wherever you are, wherever you go, Rest easy with eventer. Whether it is a birthday,
                    a plain meeting, or even an unforgetable wedding ceremony, hundreds of talented
                    event organizers will be at your service gladly, gracefully. Always.
                </p>
            </div>
            <div class="col-sm">
                <div style="padding: 32px 32px 32px 0;">
                    <img src="img/wedding.png" class="rounded-circle animated fadeInRight delay-05s" alt="Wedding Event Organizer" style="height: auto; width: auto;">
                </div>
            </div>
        </div>
        <h1 class="animated fadeInUp delay-05s">Why Eventer?</h1>
        <div class="row">
            <div class="col-lg-4">
                <div style="padding: 32px 0 32px 32px;">
                    <img src="img/birthday.png" class="rounded-circle animated fadeInLeft delay-05s" alt="Birthday Event Organizer">
                </div>
            </div>
            <div class="col-sm">
                <h4 class="animated fadeInLeft delay-1s"><i class="fas fa-star"></i> Simple</h4>
                <p class="animated fadeInLeft delay-1s">
                    Using eventer as your gateway to find a suitable event organizer is easy and simple. You are just a click away from the best event of your life.
                </p>
                <h4 class="animated fadeInLeft delay-1s"><i class="fas fa-fast-forward"></i> Straightforward</h4>
                <p class="animated fadeInLeft delay-1s">
                    Eventer does not talk its way around something. Click, and your event will be organized for you in no time. No advertisement, no tracking, no hassle.
                </p>
                <h4 class="animated fadeInLeft delay-1s"><i class="fas fa-calendar-check"></i> Available</h4>
                <p class="animated fadeInLeft delay-1s">
                    Take eventer anywhere you go. Visit this website any time you like a browse available event organizers anytime, anywhere.
                </p>
            </div>
        </div>
        <h1 class="animated fadeInUp delay-05s">How does Eventer works?</h1>
        <br>
        <div style="text-align: center" class="animated fadeIn delay-1s">
            <h3>
                <i class="fas fa-globe fa-lg"></i>
                <i class="fas fa-arrow-right fa-sm"></i>
                <i class="fas fa-search fa-lg"></i>
                <i class="fas fa-arrow-right fa-sm"></i>
                <i class="fas fa-money-check-alt fa-lg"></i>
                <i class="fas fa-arrow-right fa-sm"></i>
                <i class="fas fa-comments fa-lg"></i>
                <i class="fas fa-arrow-right fa-sm"></i>
                <i class="fas fa-check fa-lg"></i>
            </h3>
            <br>
            <p class="animated fadeInUp delay-1s">
                Visit this website, search for your preferred event organizer, hire them, and keep in contact until your event is done. Finding event organizer is never been simpler.
            </p>
        </div>
        <p class="animated fadeInUp delay-05s h1" href="/html/user.html">Get Started Now!</p>
        <p class="animated fadeInUp delay-05s" style="text-align: justify; margin-bottom: 30%">
            So, what are you waiting for? Get started now! Your patronage is the most valuable to our services.
        </p>
    </div>
</body>
</html>
