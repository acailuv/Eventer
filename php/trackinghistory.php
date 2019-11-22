<!DOCTYPE html>
<html lang="en">

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/js/main.js"></script>
    </head>

    <body>
        <div data-include-php="navbar"></div>

        <div class="container main-container animated fadeInUp delay-05s">
            <div class="bg-light p-5 rounded">
                <h1>Tracking History: <?php echo "#".$_GET['hire_id'] ?></h1>
            </div>
            <br>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    session_start();

                    $current_hire_id = $_GET['hire_id'];
                    $conn = mysqli_connect("localhost", "root", "root", "eventer");
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM status_history WHERE hire_id = '$current_hire_id'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($rows = $result->fetch_assoc()) {
                            echo '
                            <tr>
                                <th scope="row">'.$rows['date'].'</th>
                                <td>'.$rows['status'].'</td>
                            </tr>
                            ';
                        }
                    }
                    $conn->close();

                    ?>
                    <!-- <tr>
                        <td>01/09/2021</td>
                        <td>Hired.</td>
                    </tr>
                    <tr>
                        <td>02/09/2021</td>
                        <td>Contacting Client.</td>
                    </tr>
                    <tr>
                        <td>03/09/2021</td>
                        <td>Looking for Supplies</td>
                    </tr> -->
                </tbody>
            </table>
        </div>

    </body>

</html>
