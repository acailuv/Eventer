<?php
if(isset($_POST['submit'])){

  $company_name = $_POST['company_name'];
  $office_address = $_POST['office_address'];
  $contact_person = $_POST['contact_person'];
  $tel_number = $_POST['tel_number'];
  $org_type = $_POST['org_type'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $orgs="";
  foreach($org_type as $check){

    $orgs .= $check.",";
  }

  $conn = new mysqli('localhost','root','root','eventer');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("INSERT INTO vendor(company_name, office_address, contact_person,
      tel_number, org_type, email, password)
      values(?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sssisss",$company_name, $office_address, $contact_person, $tel_number,
       $orgs, $email, $password);
      $done = $stmt->execute();
      if ($done){
        session_start();
        $_SESSION['current_page'] = "/index.php";
        header("location:/index.php");
      }else{
        echo "ERROR";
      }
      $stmt->close();
      $conn->close();
  }
}
?>
