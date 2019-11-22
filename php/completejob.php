<?php

session_start();

$conn = new mysqli('localhost', 'root', 'root', 'eventer');

if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    // Insert into status tracking table
    $stmt = $conn->prepare("INSERT INTO status_history(hire_id, date, status)
        values(?, NOW(), 'Completed! (Closed)')");
    $stmt->bind_param("s", $_GET['hire_id']);
    $done = $stmt->execute();
    if (!$done) {
        echo "ERROR";
    }

    // Update hire table status accordingly
    $stmt = $conn->prepare("UPDATE hire SET current_status = 'Completed! (Closed)' WHERE hire_id = '$_GET[hire_id]'");
    $done = $stmt->execute();
    if ($done) {
        header("location:/php/vendorprofile.php");
    } else {
        echo "ERROR";
    }

    $stmt->close();
    $conn->close();
}

?>
