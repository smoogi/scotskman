<?php
include("config.php");

// Check Capchas
// if(isset($_POST['verified'])){
//     if($_POST['verified'] == $_SESSION['verified']){
//         // pass
//     }else{
//         echo "Wrong Capchas!\n";
//         echo "<meta http-equiv='refresh' content='1;URL=register.php'>";
//         return false;
//     }
// }else{
//     echo "Please insert Capchas!\n";
//     echo "<meta http-equiv='refresh' content='1;URL=register.php'>";
//     return false;
// }

// Get parameters from POST
$user = mysqli_real_escape_string($conn, $_POST['user']);
$pass = $_POST['pass'];
$name = mysqli_real_escape_string($conn, $_POST['name']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);

// Check credentials
$str = "select * from students where username ='$user'";
$obj = mysqli_query($conn, $str) or die(mysqli_error());
$result = mysqli_fetch_assoc($obj);

// Pass if user does not exists
if ($obj && mysqli_num_rows($obj) != 1) {

    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

	$str = "INSERT INTO students (username, password, firstname, lastname)
	VALUES('$user','$hashed_pass','$name','$lname')";
	$obj = mysqli_query($conn, $str)or die(mysqli_error($conn));

    // If registratin successful
	if($obj){
        echo "Registration successful, Welcome " . $user;
        $_SESSION['username'] = $user;
        $_SESSION['id'] = $result['id'];
        echo "<meta http-equiv='refresh' content='1;URL=dashboard.php'>";
	}else{
		echo "Error occured while registering your account";
        echo "<meta http-equiv='refresh' content='1;URL=register.php'>";
	}


} else {
	echo "This username is already exist";
    echo "<meta http-equiv='refresh' content='1;URL=register.php'>";
}
?>
