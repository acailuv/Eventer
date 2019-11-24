<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', 'root', 'eventer');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {

    if(isset($_POST['submit'])){
        $query = ("SELECT * FROM user WHERE user_name='$user_name'");
        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);

        if($rows > 0){
            echo "<script>alert('Username already taken! Please try different one.'); window.location.href='/html/user.html'</script>";

        }else{
            $stmt = $conn->prepare("INSERT INTO user(first_name, last_name, user_name, email, password)
                values(?, ?, ?, ?, ENCODE(?, 'decryptthiscasuls'))");
            $stmt->bind_param("sssss", $first_name, $last_name, $user_name, $email, $password);
            $done = $stmt->execute();
            if ($done) {
                session_start();
                header("location:/index.php");
            } else {
                echo "ERROR";
            }

        }
    }

    $stmt->close();
    $conn->close();
}
?>

<?php
// $first_name = $_POST['first_name'];
// $last_name = $_POST['last_name'];
// $user_name = $_POST['user_name'];
// $email = $_POST['email'];
// $password = $_POST['password'];
//
// $conn = new mysqli('localhost', 'root', 'root', 'eventer');
// if ($conn->connect_error) {
//     die('Connection Failed : ' . $conn->connect_error);
// } else {
//     $stmt = $conn->prepare("INSERT INTO user(first_name, last_name, user_name, email, password)
//         values(?, ?, ?, ?, ENCODE(?, 'decryptthiscasuls'))");
//     $stmt->bind_param("sssss", $first_name, $last_name, $user_name, $email, $password);
//     $done = $stmt->execute();
//     if ($done) {
//         session_start();
//         header("location:/index.php");
//     } else {
//         echo "ERROR";
//     }
//     $stmt->close();
//     $conn->close();
// }
?>
