<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','root','eventer');
    if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
    }else{
    $stmt = $conn->prepare("INSERT INTO user(first_name, last_name, user_name, email, password)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss",$first_name, $last_name, $user_name, $email, $password);
    $done = $stmt->execute();
    if ($done) {
      session_start();
      $_SESSION['current_page'] = "/index.php";
      header("location:../index.php");
    }else{
      echo "ERROR";
    }
    $stmt->close();
    $conn->close();
    }
?>
