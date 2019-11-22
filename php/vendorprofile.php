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
    $org = $rows ['org_type'];
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
            <div class='bg-light rounded p-5'>
                <h1>About You as a <u>Vendor</u>.</h1>
                <br>
                <h3>Basic Information</h3>
                <p>Vendor ID: <?php echo $id; ?> </p>
                <p>Company Name: <?php echo $name; ?> </p>
                <p>Address: <?php echo $address; ?> </p>
                <p>Username: <?php echo $username; ?> </p>
                <h3>Contact Details</h3>
                <p>Contact Person: <?php echo $contact; ?> </p>
                <p>Telephone Number: <?php echo $telephone; ?></p>
                <p>Email: <?php echo $email; ?></p>
                <h3>Specialties</h3>
                <ul>
                    <li><?php echo $org; ?></li>

                </ul>
                <a href="/php/editvendor.php">Edit Profile</a>
            </div>

            <br>
            <br>
            <br>
            <h1>Your Clients</h1>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#HireId</th>
                        <th scope="col">Client Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">Update Status</th>
                        <th scope="col">View Status History</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
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
                    </tr>
                </tbody>
            </table>
        </div>

    </body>
</html>
