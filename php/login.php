<?php

  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  $conn = mysqli_connect('localhost','root','root','eventer');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
    $query = "SELECT * FROM user WHERE user_name = '$user_name' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $check = mysqli_num_rows($result);

      if($check > 0){
          session_start();
          $_SESSION['user_name'] = $user_name;
          $_SESSION['status'] = "login";
          $_SESSION['current_page'] = "/index.php";
          header("location:../index.php");
      }else{
        echo "WRONG USERNAME/PASSWORD";
      }
      $conn->close();
  }
 ?>
