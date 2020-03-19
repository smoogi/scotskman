<?php
include("config.php");
include("session.php");
?>

<?php

$edit = $_POST['ID'];
$name = mysqli_real_escape_string($conn, $_POST['name']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$hour = mysqli_real_escape_string($conn, $_POST['hour']);
$admin = (int)$_POST['admin'];

$str = "UPDATE tasks
        SET
			task_name = '$name',
			task_date = '$date',
			task_hour = '$hour',
            admin_id = $admin
        WHERE
            task_id = $edit;
            ";

$obj = mysqli_query($conn, $str) or die(mysqli_error($conn));

if ($obj) {
	echo "Edit successful";
    echo "<meta http-equiv='refresh' content='1;URL=dashboard.php'>";
} else {
	echo "Error occured while editing";
    echo "<meta http-equiv='refresh' content='1;URL=dashboard.php'>";
}


?>
