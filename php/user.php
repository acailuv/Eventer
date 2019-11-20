<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','root','eventer');
    if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
    }else{
    $stmt = $conn->prepare("INSERT INTO user(firstName, lastName, userName, email, password)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss",$firstName, $lastName, $userName, $email, $password);
    $done = $stmt->execute();
    if ($done) header("Location:/html/index.html");
    $stmt->close();
    $conn->close();
    }
?>
