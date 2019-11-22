<?php

    if (isset($_POST['submit'])) {
        $company_name = $_POST['company_name'];
        $office_address = $_POST['office_address'];
        $contact_person = $_POST['contact_person'];
        $tel_number = $_POST['tel_number'];
        $org_type = $_POST['org_type'];
        $email = $_POST['email'];

        $password = $_POST['password'];
        $orgs="";
        foreach($org_type as $check){

          $orgs .= $check.",";
        }

    $conn = new mysqli('localhost','root','root','eventer');
    if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);
    }else{
      $stmt = $conn->prepare("UPDATE vendor SET company_name='$company_name', office_address='$office_address', contact_person='$contact_person',
          tel_number='$tel_number', org_type='$orgs', email='$email', password='$password' WHERE id = '15'") or die("Query failed.");
        $done = $stmt->execute();
        if ($done){
          session_start();
          $_SESSION['current_page'] = "/index.php";
          header("location:/index.php");
        }else{
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

        <div class="container animated fadeInDown" style="padding: 10%;">
            <form class="border rounded border-warning p-5 bg-light" action="/php/editvendor.php" method="post">
                <p class="h4 mb-4">EDIT VENDOR DETAILS</p>
                <label class="form-check-label" for="user_name">Username</label>

                <label class="form-check-label" for="email">Email</label>
                <input type="email" id="email" class="form-control mb-4" placeholder="example@email.com" name="email">
                <label class="form-check-label" for="password">Password</label>
                <input type="password" id="password" class="form-control mb-4" placeholder="Password" name="password" >
                <label class="form-check-label" for="company_name">Company Name</label>
                <input type="text" id="company_name" class="form-control mb-4" placeholder="Willowing Crane Co." name="company_name" >
                <label class="form-check-label" for="office_address">Office Address</label>
                <input type="text" id="office_address" class="form-control mb-4" placeholder="Grandwater Ave. 05" name="office_address" >
                <label class="form-check-label" for="contact_person">Contact Person</label>
                <input type="text" id="contact_person" class="form-control mb-4" placeholder="John Smith" name="contact_person" >
                <label class="form-check-label" for="tel_number">Contact Person Telephone Number</label>
                <input type="text" id="tel_number" class="form-control mb-4" placeholder="+13657894" name="tel_number" >
                <p>Specialties</p>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="birthday" id="birthday" name="org_type[]">
                  <label class="form-check-label" for="birthday"> Birthday </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="baptism" id="baptism" name="org_type[]">
                  <label class="form-check-label" for="baptism"> Baptsim </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="wedding" id="wedding" name="org_type[]">
                  <label class="form-check-label" for="wedding"> Wedding </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="babyshower" id="babyshower" name="org_type[]">
                  <label class="form-check-label" for="babyshower"> Baby Shower </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="tradeshows" id="tradeshows" name="org_type[]">
                  <label class="form-check-label" for="tradeshows"> Trade Shows </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="sports" id="sports" name="org_type[]">
                  <label class="form-check-label" for="sports"> Sports </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="productlaunch" id="productlaunch" name="org_type[]">
                  <label class="form-check-label" for="productlaunch"> Product Launch </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="boardmeetings" id="boardmeetings" name="org_type[]">
                  <label class="form-check-label" for="boardmeetings"> Board Meetings </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="anniversary" id="anniversary" name="org_type[]">
                  <label class="form-check-label" for="anniversary"> Anniversary </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="general" id="general" name="org_type[]">
                    <label class="form-check-label" for="general"> General </label>
                </div>
                <br>
                <i>*If you do not wish to change certain details, just leave it empty and we will do the rest.</i>
                <!-- NOTE: USER CAN LEAVE THE FORM EMPTY (REMAINS THE SAME) -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" id="submit" name="submit">Edit Details</button>
            </form>
        </div>

    </body>

</html>
