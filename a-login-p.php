<?php
include("config.php");

// Check Capchas
// if(isset($_POST['verified'])){
//     if($_POST['verified'] == $_SESSION['verified']){
//         // pass
//     }else{
//         echo "Wrong Capchas!\n";
//         echo "<meta http-equiv='refresh' content='1;URL=login.php'>";
//         return false;
//     }
// }else{
//     echo "Please insert Capchas!\n";
//     echo "<meta http-equiv='refresh' content='1;URL=login.php'>";
//     return false;
// }

// Check credentials
$user = mysqli_real_escape_string($conn, $_POST['user']);
$pass = $_POST['pass'];

$str = "select * from admins where username ='$user'";
$result = mysqli_query($conn, $str) or die(mysqli_error());
$row = mysqli_fetch_assoc($result);
$db_pass = $row['password'];
$id = $row['id'];

$is_pass_correct = password_verify($pass, $db_pass);

// Pass if user is exists
if ($is_pass_correct == true) {
	echo "Welcome Admin " . $user;
	$_SESSION['a-username'] = $user;
	$_SESSION['id'] = $id;
    echo "<meta http-equiv='refresh' content='1;URL=a-dashboard.php'>";
} else {
	echo "Incorrect Username/Password";
    echo "<meta http-equiv='refresh' content='1;URL=a-login.php'>";
}
?>
