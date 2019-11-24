<?php
session_start();
$conn = mysqli_connect("localhost", "root", "root", "eventer");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM vendor WHERE user_name = '$_SESSION[username]'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($rows = $result->fetch_assoc()) {
    $id = $rows ['id'];
    $name = $rows ['company_name'];
    $address = $rows ['office_address'];
    $username = $rows ['user_name'];
    $contact = $rows ['contact_person'];
    $telephone = $rows ['tel_number'];
    $email = $rows ['email'];

    // booleans
    $birthday = $rows['birthday'];
    $baptism = $rows['baptism'];
    $wedding = $rows['wedding'];
    $babyshower = $rows['babyshower'];
    $tradeshows = $rows['tradeshows'];
    $sports = $rows['sports'];
    $productlaunch = $rows['productlaunch'];
    $boardmeetings = $rows['boardmeetings'];
    $anniversary = $rows['anniversary'];
    $general = $rows['general'];
}
} else { echo "0 results"; }
$conn->close();
?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/js/main.js"></script>
    </head>

    <body>
        <div data-include-php="navbar"></div>

        <div class="container animated fadeInUp delay-05s main-container">
            <div class='bg-light rounded p-5 border border-warning'>
                <h1>About You as a <u>Vendor</u>.</h1>
                <br>
                <h3><i class="fas fa-user"></i> Basic Information</h3>
                <p>Vendor ID: <?php echo $id; ?> </p>
                <p>Company Name: <?php echo $name; ?> </p>
                <p>Address: <?php echo $address; ?> </p>
                <p>Username: <?php echo $username; ?> </p>
                <h3><i class="fas fa-user-friends"></i> Contact Details</h3>
                <p>Contact Person: <?php echo $contact; ?> </p>
                <p>Telephone Number: <?php echo $telephone; ?></p>
                <p>Email: <?php echo $email; ?></p>
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
            </div>

            <br>
            <br>
            <br>
            <h1><i class="fas fa-receipt"></i> Your Clients</h1>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#HireId</th>
                        <th scope="col">Client Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Update Status</th>
                        <th scope="col">View Status History</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $conn = mysqli_connect("localhost", "root", "root", "eventer");
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM hire INNER JOIN user ON hire.client_username = user.user_name WHERE vendor_username = '$_SESSION[username]'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($rows = $result->fetch_assoc()) {

                            if ($rows['current_status'] == 'Completed! (Closed)') {
                                $view_link = '<td><a class="btn btn-link disabled" href="/php/updatetracking.php?hire_id='.$rows['hire_id'].'">Change</a></td>';
                            } else {
                                $view_link = '<td><a href="/php/updatetracking.php?hire_id='.$rows['hire_id'].'">Change</a></td>';
                            }

                            echo '
                            <tr>
                                <th scope="row">'.$rows['hire_id'].'</th>
                                <td><a href="mailto:'.$rows['email'].'">'.$rows['first_name'].' '.$rows['last_name'].'</a></td>
                                <td>'.$rows['current_status'].'</td>
                                '.$view_link.'
                                <td><a href="/php/trackinghistory.php?hire_id='.$rows['hire_id'].'">View</a></td>
                            </tr>
                            ';
                        }
                    }
                    $conn->close();

                    ?>
                    <!-- <tr>
                        <th scope="row">1</th>
                        <td>John Smith</td>
                        <td>Birthday</td>
                        <td>Buying Supplies</td>
                        <td><a href="#">Update</a></td>
                        <td><a href="/php/trackinghistory.php">View</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jane Doe</td>
                        <td>Wedding</td>
                        <td>Renting Hall</td>
                        <td><a href="#">Update</a></td>
                        <td><a href="/php/trackinghistory.php">View</a></td>
                    </tr> -->
                </tbody>
            </table>
        </div>

    </body>
</html>
