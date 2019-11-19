<?php

  $userName = $_POST['userName'];
  $password = $_POST['password'];

  $conn = mysqli_connect('localhost','root','root','eventer');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
    $query = "SELECT * FROM user WHERE userName = '$userName' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $check = mysqli_num_rows($result);

      if($check > 0){
          session_start();
          $_SESSION['userName'] = $userName;
          $_SESSION['status'] = "login";
          header("location:/html/index.html");
      }else{
        echo "WRONG USERNAME/PASSWORD";
      }
      $conn->close();
  }
 ?>
