<?php
include("config.php");
include("session.php");
?>

<?php

$id = $_GET['id'];

$str = "DELETE FROM tasks WHERE task_id = '$id' ";
$obj = mysqli_query($conn, $str) or die(mysqli_error());

if ($obj) {
	echo "Task aprroved";
	echo "<meta http-equiv='refresh' content='0;URL=dashboard.php'>";
} else {
	echo "Some error occured";
	echo "<meta http-equiv='refresh' content='0;URL=dashboard.php'>";
}
?>
