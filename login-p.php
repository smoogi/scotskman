<?php
include("config.php");

// Check credentials
$user = mysqli_real_escape_string($conn, $_POST['user']);
$pass = $_POST['pass'];

$str = "select * from students where username ='$user'";
$obj = mysqli_query($conn, $str) or die(mysqli_error());
$result = mysqli_fetch_assoc($obj);
$db_pass = $result['password'];

$is_pass_correct = password_verify($pass, $db_pass);

// Pass if user is exists
if ($is_pass_correct == true) {
	echo "Welcome " . $user;
	$_SESSION['username'] = $user;
	$_SESSION['id'] = $result['id'];
    echo "<meta http-equiv='refresh' content='1;URL=dashboard.php'>";
} else {
	echo "Incorrect Username/Password";
    echo "<meta http-equiv='refresh' content='1;URL=login.php'>";
}
?>
