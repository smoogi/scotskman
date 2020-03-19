<?php
include("config.php");
include("session.php");
?>

<?php

$edit = intval($_GET['edit']);

$str = "select * from tasks where task_id = $edit;";
$obj = mysqli_query($conn, $str) or die(mysqli_error($conn));

$result = mysqli_fetch_array($obj);

?>

<form action="edit-p.php" method="post" enctype="multipart/form-data">
    <table align=center>
        <tr>
            <td>Task name : </td>
            <td><input type="text" name="name" value="<?= $result['task_name']; ?>"></td>
        </tr>
        <tr>
            <td>Task date : </td>
            <td><input type="date" name="date" value="<?= $result['task_date']; ?>"></td>
        </tr>
        <tr>
            <td>Hours taken : </td>
            <td><input type="text" name="hour" value="<?= $result['task_hour']; ?>"></td>
        </tr>
        <tr>
            <td>Order by : </td>
            <td>

                <select id="admin" name="admin">
                    <?php

                    $qr = "select * from admins;";
                    $res = mysqli_query($conn, $qr) or die(mysqli_error($conn));

                    while ($r = mysqli_fetch_assoc($res)){
                        echo "<option value=" . $r['id'] . "";
                        if($result['admin_id'] == $r['id']){
                            echo " selected";
                        }
                        echo "> " . $r['firstname'] . "</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="hidden" name="ID" value="<?= $edit; ?>"></td>
            <td><input type="submit" value="Edit"></td>
        </tr>
    </table>
</form>
