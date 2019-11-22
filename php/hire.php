<?php

session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['status'])) {
    header('location:/html/login.html');
}

$current_vendor_username= $_GET['vendor'];
$current_client_username = $_SESSION['username'];

$conn = mysqli_connect('localhost', 'root', 'root', 'eventer');

// Finding next Id
$query = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'eventer' AND TABLE_NAME = 'hire'";
$res = mysqli_query($conn, $query);
$next_id = mysqli_fetch_assoc($res);
$next_id = $next_id['AUTO_INCREMENT'];

// Insert Hire
$query = "INSERT INTO hire(vendor_username, client_username, current_status) VALUES ('$current_vendor_username', '$current_client_username', 'Hired!')";
mysqli_query($conn, $query);

// Insert Status Tracking
$query = "INSERT INTO status_history(hire_id, date, status) VALUES ('$next_id', NOW(), 'Hired!')";
mysqli_query($conn, $query);

header('location:/php/userprofile.php');

?>
