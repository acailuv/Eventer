<?php
if(isset($_POST['submit'])){

  $company_name = $_POST['company_name'];
  $office_address = $_POST['office_address'];
  $contact_person = $_POST['contact_person'];
  $tel_number = $_POST['tel_number'];
  $org_type = $_POST['org_type'];
  $email = $_POST['email'];
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  $birthday = 0;
  $baptism = 0;
  $wedding = 0;
  $babyshower = 0;
  $tradeshows = 0;
  $sports = 0;
  $productlaunch = 0;
  $boardmeetings = 0;
  $anniversary = 0;
  $general = 0;


  foreach($org_type as $check){
      switch ($check) {
    case 'birthday':
        $birthday = 1;
        break;
    case 'baptism':
        $baptism = 1;
        break;
    case 'wedding':
        $wedding = 1;
        break;
    case 'babyshower':
        $babyshower = 1;
        break;
    case 'tradeshows':
        $tradeshows = 1;
        break;
    case 'sports':
        $sports = 1;
        break;
    case 'productlaunch':
        $productlaunch = 1;
        break;
    case 'boardmeetings':
        $boardmeetings = 1;
        break;
    case 'anniversary':
        $anniversary = 1;
        break;
    case 'general':
        $general = 1;
        break;
    }
  }

  $conn = new mysqli('localhost','root','root','eventer');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("INSERT INTO vendor(company_name, office_address, contact_person,
      tel_number, birthday, baptism, wedding, babyshower, tradeshows, sports, productlaunch, boardmeetings, anniversary, general, email, user_name, password)
      values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("ssssiiiiiiiiiisss",$company_name, $office_address, $contact_person, $tel_number,
       $birthday, $baptism, $wedding, $babyshower, $tradeshows, $sports, $productlaunch, $boardmeetings, $anniversary, $general, $email, $user_name, $password);
      $done = $stmt->execute();

      if ($done){
        session_start();
        $_SESSION['current_page'] = "/index.php";
         header("location:/index.php");
      }else{
        echo "ERROR";
        print_r($stmt->error_list);
      }
      $stmt->close();
      $conn->close();
  }
}
?>
