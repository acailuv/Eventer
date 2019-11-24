<!--

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

 -->

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
        <h1 class="animated fadeInUp delay-1s">Innovative Event Organizer Marketplace.</h1>
        <div class="row">
            <div class="col-sm-8">
                <p class="animated fadeInUp delay-1s" style="text-align: justify">
                    Eventer gives you what you want whether you are a client or an event organizer.
                    Wherever you are, wherever you go, Rest easy with eventer. Whether it is a birthday,
                    a plain meeting, or even an unforgetable wedding ceremony, hundreds of talented
                    event organizers will be at your service gladly, gracefully. Always.
                    Praesent sed sapien risus. Mauris varius nisi sit amet fermentum faucibus. Etiam tincidunt sem at molestie aliquam. Pellentesque sed congue libero, in rhoncus lectus. Phasellus dictum blandit enim, pretium fringilla libero mollis nec. Nunc libero est, vulputate ac justo id, aliquam interdum nunc. Etiam ipsum enim, feugiat in ultrices iaculis, gravida eu nibh. In feugiat convallis vulputate. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>
            </div>
            <div class="col-sm">
                <div style="padding: 32px 32px 32px 0;">
                    <img src="img/wedding.png" class="rounded-circle animated fadeInRight delay-1s" alt="Wedding Event Organizer" style="height: auto; width: auto;">
                </div>
            </div>
        </div>
        <h1 class="animated fadeInUp delay-1s">Why Eventer?</h1>
        <div class="row">
            <div class="col-lg-4">
                <div style="padding: 32px 0 32px 32px;">
                    <img src="img/birthday.png" class="rounded-circle animated fadeInLeft delay-1s" alt="Birthday Event Organizer">
                </div>
            </div>
            <div class="col-sm">
                <p class="animated fadeInUp delay-1s text-break" style="text-align: justify">
                    Choosing Eventer as you gateway to find event organizers easily is fast, simple, and efficient.
                    Leaving you with what matters most, the event itself. Leave the heavy lifting to us, and let us
                    find you the most suitable event organizer for your needs.
                    Praesent sed sapien risus. Mauris varius nisi sit amet fermentum faucibus. Etiam tincidunt sem at molestie aliquam. Pellentesque sed congue libero, in rhoncus lectus. Phasellus dictum blandit enim, pretium fringilla libero mollis nec. Nunc libero est, vulputate ac justo id, aliquam interdum nunc. Etiam ipsum enim, feugiat in ultrices iaculis, gravida eu nibh. In feugiat convallis vulputate. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>
            </div>
        </div>
        <h1 class="animated fadeInUp delay-1s">How does Eventer works?</h1>
        <p class="animated fadeInUp delay-1s" style="text-align: justify">
            Eventer is a marketplace for event organizers so that you, as the client can search an event organizer easily and efficiently.
            Say goodbye to the ways of old where you have to surf out the entire internet just to find one event organizer that perfectly suits your needs.
            With Eventer, you can quickly find the perfect event organizer with a press of a button.
            Praesent sed sapien risus. Mauris varius nisi sit amet fermentum faucibus. Etiam tincidunt sem at molestie aliquam. Pellentesque sed congue libero, in rhoncus lectus. Phasellus dictum blandit enim, pretium fringilla libero mollis nec. Nunc libero est, vulputate ac justo id, aliquam interdum nunc. Etiam ipsum enim, feugiat in ultrices iaculis, gravida eu nibh. In feugiat convallis vulputate. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
        <p class="animated fadeInUp delay-1s h1" href="/html/user.html">Get Started Now!</p>
        <p class="animated fadeInUp delay-1s" style="text-align: justify; margin-bottom: 30%">
            So, what are you waiting for? Get started now! Your patronage is the most valuable to our services.
        </p>
    </div>
</body>
</html>
