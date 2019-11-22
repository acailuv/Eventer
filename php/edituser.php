<?php

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','root','eventer');
    if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);
    } else {
      $stmt = $conn->prepare("UPDATE user SET first_name='$first_name', last_name='$last_name', email='$email', password='$password' WHERE id = '4'") or die("Query failed.");
        $done = $stmt->execute();
        if ($done) {
          session_start();
          $_SESSION['current_page'] = "/index.php";
          header("location:/index.php");
        } else {
          echo "ERROR";
        }
        $stmt->close();
        $conn->close();
    }
}

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/js/main.js"></script>
    </head>

    <body>
        <div data-include-php="navbar"></div>

        <div class="container animated fadeInDown" style="padding: 10%; margin-top: -5%">
            <form class="border rounded border-warning p-5 rounded bg-light" action="/php/edituser.php" method="post">
                <p class="h4 mb-4">EDIT USER DETAILS</p>
                <div class="row">
                    <div class="col-sm">
                        <!-- The placeholder of this will be the old first name -->
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" class="form-control mb-4" placeholder="John" name="first_name">
                    </div>

                    <div class="col-sm">
                        <!-- The placeholder of this will be the old last name, etc. -->
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" class="form-control mb-4" placeholder="Smith" name="last_name">
                    </div>
                </div>
                <label for="email">Email</label>
                <input type="text" id="email" class="form-control mb-4" placeholder="example@email.com" name="email">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control mb-4" placeholder="Password" name="password">
                <label for="password_confirm">Password Confirmation</label>
                <input type="password" id="password_confirm" class="form-control mb-4" placeholder="Password Confirmation" name="password_confirm">
                <br>
                <i>*If you do not wish to change certain details, just leave it empty and we will do the rest.</i>
                <!-- NOTE: USER CAN LEAVE THE FORM EMPTY (REMAINS THE SAME) -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" id="submit" name="submit">Edit Details</button>
            </form>
        </div>

    </body>

</html>
