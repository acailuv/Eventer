<?php
  //Buat get value dari formnya
  $companyName = $_POST['companyName'];
  $officeAddress = $_POST['officeAddress'];
  $contactPerson = $_POST['contactPerson'];
  $telNumber = $_POST['telNumber'];
  $bln = $_POST['bln'];
  $personel = $_POST['personel'];
  $orgType = $_POST['orgType'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $conn = new mysqli('localhost','root','root','eventer');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("INSERT INTO vendor(companyName, officeAddress, contactPerson,
      telNumber, bln, personel, orgType, email, password)
      values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sssiiisss",$companyName, $officeAddress, $contactPerson, $telNumber, $bln,
      $personel, $orgType, $email, $password);
      $done = $stmt->execute();
      if ($done) header("Location:/html/index.html");
      $stmt->close();
      $conn->close();
  }
?>
