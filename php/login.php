<?php
$user_name = $_POST['user_id'];
$password = $_POST['user_pwd'];

$conn = mysqli_connect('localhost', 'root', 'root', 'eventer');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $query = "SELECT * FROM user WHERE user_name = '$user_name' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $check = mysqli_num_rows($result);

    if ($check > 0) {
        session_start();
        $_SESSION['username'] = $user_name;
        $_SESSION['status'] = "user";
        header("location:/index.php");
    } else {
        echo "<script>alert('Wrong Username or Password.'); window.location.href='/html/login.html'</script>";
    }
    $conn->close();
}
