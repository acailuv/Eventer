<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/js/main.js"></script>
    </head>

    <body>
        <div data-include-php="navbar"></div>

        <div class="container main-container bg-light border border-warning p-5 animated fadeInUp delay-05s">

            <div class="row">
                <div class="col-sm">
                    <h1>ORGANIZER_NAME</h1>
                    <p>Vendor ID: <?php echo $id; ?> </p>
                    <p>Address: <?php echo $address; ?> </p>
                    <p>Fee: <?php echo $fee; ?> </p>
                </div>
                <div class="col-sm">
                    <img src="/img/placeholder.png" alt="Vendor Profile Picture" class="rounded border border-dark" style="max-height: 300px; max-width: 300px; margin-left: 300px;">
                    <!-- NOTE: Don't forget to replace VENDOR@EMAIL.com to current vendor email that is being viewed -->
                    <a class="btn btn-primary text-white" style="margin-left: 300px; margin-top: 24px;" href="mailto:VENDOR@EMAIL.com?Subject=[Eventer] Mail"><i class="fas fa-envelope"></i> Mail this vendor</a>
                </div>
            </div>

            <h3>Contact Details</h3>
            <p>Contact Person: <?php echo $contact; ?> </p>
            <p>Telephone Number: <?php echo $telephone; ?> </p>
            <p>Email: <?php echo $email; ?> </p>

            <h3>About this Organizer</h3>
            <p>Description_here.......</p>

            <h3>Specialties</h3>
            <ul>
                <li><?php echo $org; ?></li>
            </ul>
        </div>
    </body>
</html>
