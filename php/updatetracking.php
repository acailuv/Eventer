<?php
session_start();

// Form Listener
if (isset($_POST['new_status'])) {
    $conn = new mysqli('localhost', 'root', 'root', 'eventer');

    if ($conn->connect_error) {
        die('Connection Failed : ' . $conn->connect_error);
    } else {
        // Insert into status tracking table
        $stmt = $conn->prepare("INSERT INTO status_history(hire_id, date, status)
            values(?, NOW(), ?)");
        $stmt->bind_param("ss", $_GET['hire_id'], $_POST['new_status']);
        $done = $stmt->execute();
        if (!$done) {
            echo "ERROR";
        }

        // Update hire table status accordingly
        $stmt = $conn->prepare("UPDATE hire SET current_status = ? WHERE hire_id = '$_GET[hire_id]'");
        $stmt->bind_param("s", $_POST['new_status']);
        $done = $stmt->execute();
        if ($done) {
            header("location:/php/vendorprofile.php");
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

        <div class="d-flex justify-content-center main-container animated fadeInDown delay-05s">
            <form class="border rounded border-warning p-5 bg-light" action="/php/updatetracking.php?hire_id=<?php echo $_GET['hire_id']; ?>" method="post">
                <p class="h4 mb-4">Update Tracking for #<?php echo $_GET['hire_id']; ?></p>
                <label for="new_status">New Status Update</label>
                <input type="username" id="new_status" class="form-control mb-4" placeholder="e.g. Buying Party Supplies" name="new_status" required>
                <br>
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Update Tracking Status</button>
                <a class="btn btn-success btn-block my-4" href="/php/completejob.php?hire_id=<?php echo $_GET['hire_id']; ?>">Mark Job as Complete</a>
                <a class="btn btn-danger btn-block my-4" href="/php/vendorprofile.php">Cancel</a>
                <i>*If you marked this job as complete, you will not be able to change the status anymore.</i>
            </form>
        </div>
    </body>
</html>
