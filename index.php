<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <meta name="Description" content="Event Organizer Marketplace.">
  <link rel="icon" href="/favicon.png">

  <!-- JavaScript -->
  <!-- <script src="/js/jquery-min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/js/popper-min.js"></script>
  <script src="/js/bootstrap-min.js"></script>
  <script src="/js/main.js"></script>
  <script src="/js/wow.js"></script>
  <script>
    new WOW().init();
  </script>

  <!-- CSS -->
  <link href="/css/bootstrap-min.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/animate.css" rel="stylesheet">

  <title>Eventer</title>
</head>

<body>
  <!-- Navbar Header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <!-- Brand Logo/Button -->
    <button class="navbar-brand btn btn-link" onclick="redirectTo_Index()">E v e n t e r</button>
    <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- END -->

    <!-- Login and stuff -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <!-- Search Bar -->
            <form class="form-inline" style="margin-right: 24px;" action="/php/eolist.php" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name ="search" placeholder="What's on your mind?" size="56">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="search" value="search" onclick="redirectTo_eolist()">Search</button>
                    </div>
                </div>
            </form>
            <!-- END -->

            <li class="nav-item">
                <button class="btn btn-outline-dark" onclick="redirectTo_User()">Sign Up</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-link" onclick="redirectTo_Login()">Sign In</button>
            </li>
        </ul>
    </div>
    <!-- END -->
  </nav>
  <!-- Navbar END -->

  <div class="container-fluid" id="main">

    <div class="container">
        <br>
        <br>
        <img class="animated fadeInDown delay-05s" src="img/logo.png" style="min-height: auto; width: auto;">
        <h1 class="animated fadeInUp delay-1s">Innovative Event Organizer Marketplace.</h1>
        <div class="row">
            <div class="col-sm-8">
                <p class="animated fadeInUp delay-1s">
                    Eventer gives you what you want whether you are a client or an event organizer.
                    Wherever you are, wherever you go, Rest easy with eventer. Whether it is a birthday,
                    a plain meeting, or even an unforgetable wedding ceremony, hundreds of talented
                    event organizers will be at your service gladly, gracefully. Always.
                    Praesent sed sapien risus. Mauris varius nisi sit amet fermentum faucibus. Etiam tincidunt sem at molestie aliquam. Pellentesque sed congue libero, in rhoncus lectus. Phasellus dictum blandit enim, pretium fringilla libero mollis nec. Nunc libero est, vulputate ac justo id, aliquam interdum nunc. Etiam ipsum enim, feugiat in ultrices iaculis, gravida eu nibh. In feugiat convallis vulputate. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>
            </div>
            <div class="col-sm">
                <div style="padding: 32px 32px 32px 0;">
                    <img src="img/wedding.png" class="rounded animated fadeInRight delay-1s">
                </div>
            </div>
        </div>
        <h1 class="wow fadeInUp delay-1s">Why Eventer?</h1>
        <div class="row">
            <div class="col-sm-4">
                <div style="padding: 32px 0 32px 32px;">
                    <img src="img/birthday.png" class="rounded animated fadeInLeft delay-1s">
                </div>
            </div>
            <div class="col-sm">
                <p class="wow fadeInUp delay-1s">
                    Choosing Eventer as you gateway to find event organizers easily is fast, simple, and efficient.
                    Leaving you with what matters most, the event itself. Leave the heavy lifting to us, and let us
                    find you the most suitable event organizer for your needs.
                    Praesent sed sapien risus. Mauris varius nisi sit amet fermentum faucibus. Etiam tincidunt sem at molestie aliquam. Pellentesque sed congue libero, in rhoncus lectus. Phasellus dictum blandit enim, pretium fringilla libero mollis nec. Nunc libero est, vulputate ac justo id, aliquam interdum nunc. Etiam ipsum enim, feugiat in ultrices iaculis, gravida eu nibh. In feugiat convallis vulputate. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>
            </div>
        </div>
        <h1 class="wow fadeInUp delay-05s">How does Eventer works?</h1>
        <p class="wow fadeInUp delay-05s">
            Eventer is a marketplace for event organizers so that you, as the client can search an event organizer easily and efficiently.
            Say goodbye to the ways of old where you have to surf out the entire internet just to find one event organizer that perfectly suits your needs.
            With Eventer, you can quickly find the perfect event organizer with a press of a button.
            Praesent sed sapien risus. Mauris varius nisi sit amet fermentum faucibus. Etiam tincidunt sem at molestie aliquam. Pellentesque sed congue libero, in rhoncus lectus. Phasellus dictum blandit enim, pretium fringilla libero mollis nec. Nunc libero est, vulputate ac justo id, aliquam interdum nunc. Etiam ipsum enim, feugiat in ultrices iaculis, gravida eu nibh. In feugiat convallis vulputate. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
        <h1 class="wow fadeInUp delay-05s">Get Started Now!</h1>
        <p class="wow fadeInUp delay-05s">
            So, what are you waiting for? Get started now! Your patronage is the most valuable to our services.
        </p>
        <button type="button" class="btn btn-success wow fadeInUp delay-05s" onclick="redirectTo_User()">Get Started!</button>
    </div>
  </div>

  <div id="session_write"></div>
  <?php
    session_start();
    // Save Current Page State
    if (isset($_SESSION['current_page']) && $_SESSION['current_page'] != "/index.php") {
        echo "<script>syncMainDiv('".$_SESSION['current_page']."')</script>";
    }
  ?>

</body>

</html>
