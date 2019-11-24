<?php
session_start();
$conn = mysqli_connect("localhost", "root", "root", "eventer");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM user WHERE user_name = '$_SESSION[username]'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($rows = $result->fetch_assoc()) {
        $id = $rows ['id'];
        $firstname = $rows ['first_name'];
        $lastname = $rows ['last_name'];
        $username = $rows ['user_name'];
        $email = $rows ['email'];
    }
}
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
                <h1>About You.</h1>
                <p>User ID: <?php echo $id ?> </p>
                <p>Name: <?php echo $firstname , " " , $lastname ?> </p>
                <p>Username: <?php echo $username ?> </p>
                <p>Email: <?php echo $email ?> </p>
            </div>

            <br>
            <br>
            <br>
            <h1><i class="fas fa-receipt"></i> Your Orders</h1>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#HireId</th>
                        <th scope="col">Event Organizer</th>
                        <th scope="col">Status</th>
                        <th scope="col">View Status History</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $conn = mysqli_connect("localhost", "root", "root", "eventer");
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM hire LEFT JOIN vendor ON hire.vendor_username = vendor.user_name WHERE client_username = '$_SESSION[username]'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($rows = $result->fetch_assoc()) {
                            echo '
                            <tr>
                                <th scope="row">'.$rows['hire_id'].'</th>
                                <td>'.$rows['company_name'].'</td>
                                <td>'.$rows['current_status'].'</td>
                                <td><a href="/php/trackinghistory.php?hire_id='.$rows['hire_id'].'">View</a></td>
                            </tr>
                            ';
                        }
                    }
                    $conn->close();

                    ?>

                    <!-- <tr>
                        <th scope="row">1</th>
                        <td>Hashi Organizer</td>
                        <td>Birthday</td>
                        <td>Buying Supplies</td>
                        <td><a href="/php/trackinghistory.php">View</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Elegancies Co.</td>
                        <td>Wedding</td>
                        <td>Renting Hall</td>
                        <td><a href="/php/trackinghistory.php">View</a></td>
                    </tr> -->
                </tbody>
            </table>
        </div>

    </body>
</html>
