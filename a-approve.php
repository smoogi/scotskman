<?php
include("config.php");
include("a-session.php");
?>

<?php

$id = $_GET['id'];

$str = "UPDATE tasks SET task_status = 1 WHERE task_id = '$id'";
$obj = mysqli_query($conn, $str) or die(mysqli_error());

if ($obj) {
	echo "Task id ". $id ."aprroved";
	echo "<meta http-equiv='refresh' content='0;URL=a-dashboard.php'>";
} else {
	echo "Some error occured";
	echo "<meta http-equiv='refresh' content='0;URL=a-dashboard.php'>";
}
?>
