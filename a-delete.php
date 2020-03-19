<?php
include("config.php");
include("a-session.php");
?>

<?php

$del = $_GET['id'];

$str = "DELETE FROM tasks WHERE task_id = $del";
$obj = mysqli_query($conn, $str) or die(mysqli_error());

if ($obj) {
	echo "Task aprroved";
	echo "<meta http-equiv='refresh' content='0;URL=a-dashboard.php'>";
} else {
	echo "Some error occured";
	echo "<meta http-equiv='refresh' content='0;URL=a-dashboard.php'>";
}
?>
