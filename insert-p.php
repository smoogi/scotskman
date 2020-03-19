<?php
include("config.php");
include("session.php");

// Check credentials
$name = mysqli_real_escape_string($conn, $_POST['name']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$hour = mysqli_real_escape_string($conn, $_POST['hour']);
$student   = mysqli_real_escape_string($conn, $_SESSION['id']);
$admin = $_POST['admin'];

echo $admin;

$str = "INSERT INTO tasks (task_name, task_date, task_hour, student_id, admin_id)
VALUES('$name','$date', $hour, '$student',$admin)";
$obj = mysqli_query($conn, $str)or die(mysqli_error($conn));

if($obj){
    echo "Insert successfully, task added: " . $name;
    echo "<meta http-equiv='refresh' content='1;URL=dashboard.php'>";
}else{
    echo "Error occured while inserting";
    echo "<meta http-equiv='refresh' content='1;URL=dashboard.php'>";
}

?>
