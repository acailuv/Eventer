<?php

session_start();
$current_vendor_id = $_GET['vendor'];

$conn = mysqli_connect("localhost","root","root","eventer");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Perform queries
$result = mysqli_query($conn, "SELECT * FROM vendor WHERE id = '$current_vendor_id'");
$vendor_data = mysqli_fetch_assoc($result);

$id = $vendor_data['id'];
$company_name = $vendor_data['company_name'];
$username = $vendor_data['user_name'];
$address = $vendor_data['office_address'];
$fee = $vendor_data['price'];
$contact = $vendor_data['contact_person'];
$telephone = $vendor_data['tel_number'];
$email = $vendor_data['email'];
$description = $vendor_data['description'];

// booleans
$birthday = $vendor_data['birthday'];
$baptism = $vendor_data['baptism'];
$wedding = $vendor_data['wedding'];
$babyshower = $vendor_data['babyshower'];
$tradeshows = $vendor_data['tradeshows'];
$sports = $vendor_data['sports'];
$productlaunch = $vendor_data['productlaunch'];
$boardmeetings = $vendor_data['boardmeetings'];
$anniversary = $vendor_data['anniversary'];
$general = $vendor_data['general'];

?>

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
                    <h1><?php echo $company_name; ?></h1>
                    <p>Vendor ID: <?php echo $id; ?> </p>
                    <p>Address: <?php echo $address; ?> </p>
                    <p>Fee Estimation: Rp. <?php echo $fee; ?> </p>
                </div>
                <div class="col-sm">
                    <img src="/img/placeholder.png" alt="Vendor Profile Picture" class="rounded border border-dark" style="max-height: 300px; max-width: 300px; margin-left: 300px;">
                    <?php
                    if ($_SESSION['status'] != 'vendor') {
                        echo '<a class="btn btn-primary text-white" style="margin-left: 300px; margin-top: 24px;" href="mailto:'.$email.'?Subject=[Eventer] Mail"><i class="fas fa-envelope"></i> Mail this vendor</a>';
                    }
                    ?>
                    <?php
                    if ($_SESSION['status'] != 'vendor') {
                        echo '<a class="btn btn-success text-white" style="margin-left: 300px; margin-top: 24px;" href="/php/hire.php?vendor='.$username.'"><i class="fas fa-signature"></i> Hire this vendor</a>';
                    }
                    ?>
                </div>
            </div>

            <h3><i class="fas fa-user-friends"></i> Contact Details</h3>
            <p>Contact Person: <?php echo $contact; ?> </p>
            <p>Telephone Number: <?php echo $telephone; ?> </p>
            <p>Email: <?php echo $email; ?> </p>

            <h3><i class="fas fa-glass-cheers"></i> About this Organizer</h3>
            <p><?php echo $description; ?></p>

            <h3><i class="fas fa-star"></i> Specialties</h3>
            <ul>
                <?php
                if ($birthday) {
                    echo "<li>Birthday</li>";
                }
                if ($baptism) {
                    echo "<li>Baptism</li>";
                }
                if ($wedding) {
                    echo "<li>Wedding</li>";
                }
                if ($babyshower) {
                    echo "<li>Baby Shower</li>";
                }
                if ($tradeshows) {
                    echo "<li>Trade Show</li>";
                }
                if ($sports) {
                    echo "<li>Sports</li>";
                }
                if ($productlaunch) {
                    echo "<li>Product Launch</li>";
                }
                if ($boardmeetings) {
                    echo "<li>Board Meetings</li>";
                }
                if ($anniversary) {
                    echo "<li>Anniversary</li>";
                }
                if ($general) {
                    echo "<li>General (All Purpose)</li>";
                }
                ?>
            </ul>

            <?php

            if ($_SESSION['status'] != 'vendor') {
                echo '<h3><i class="fas fa-comments"></i> Comments</h3>
                <form action="" method="post">
                    <label for="comment">Write a comment...</label>
                    <input id="comment" class="form-control" placeholder="e.g. Great Event Organizer! I recommend this one." name="comment" required>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-outline-danger btn-rounded my-1 waves-effect z-depth-0 pl-lg-4 pr-lg-4 mr-2" type="reset">Clear</button>
                        <button class="btn btn-success btn-rounded my-1 waves-effect z-depth-0 pl-lg-4 pr-lg-4" type="submit">Send</button>
                    </div>
                </form>
                <br>';
            }

            ?>
            <?php
            $current_vendor_id = $_GET['vendor'];

            // Form Handler
            if (isset($_POST['comment'])) {
                // Insert into status tracking table
                $stmt = $conn->prepare("INSERT INTO comment(vendor_id, client_username, date, content)
                    values('$current_vendor_id', '$_SESSION[username]', NOW(), ?)");
                $stmt->bind_param("s", $_POST['comment']);
                $done = $stmt->execute();
                if (!$done) {
                    echo "ERROR";
                }
                header('Refresh:0');
            }

            // Show Comments
            $conn = mysqli_connect("localhost", "root", "root", "eventer");
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM comment WHERE vendor_id = '$current_vendor_id'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($rows = $result->fetch_assoc()) {
                    echo '
                    <div class="container bg-white border border-warning rounded mt-2">
                        <div class="row p-2">
                            <div class="col-sm-1">
                                <img src="/img/placeholder.png" class="rounded-circle">
                            </div>
                            <div class="col-sm">
                                <b>'.$rows['client_username'].'</b> - <i>'.$rows['date'].'</i><br>
                                <p>'.$rows['content'].'</p>
                            </div>
                        </div>
                    </div>
                    ';
                }
            }
            $conn->close();

            ?>
        </div>
    </body>
</html>
