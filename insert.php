<?php
include("config.php");
include("session.php")
?>

<head>
    <title>Insert new data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">

                <div align=center>
                    <h1>Insert new data</h1>
                </div>

                <form action="insert-p.php" method="post" id="form">
                    <div class="form-group">
                        <label for="name">Task name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter task name">
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" name="date" class="form-control" placeholder="Enter the date">
                    </div>
                    <div class="form-group">
                        <label for="hour">Hours taken</label>
                        <input type="text" name="hour" class="form-control" placeholder="Enter hours taken">
                    </div>
                    <div class="form-group">
                        <label for="admin">Order by</label>
                        <select id="admin" name="admin">
                            <?php

                                $qr = "select * from admins;";
                                $res = mysqli_query($conn, $qr) or die(mysqli_error($conn));

                                while ($r = mysqli_fetch_assoc($res)){
                                    echo "<option value=" . $r['id'] . "";
                                    echo "> " . $r['firstname'] . "</option>";
                                }
                                ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Insert" name="submit" class="btn btn-primary" />
                        <a href="dashboard.php" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div class="row">
    </div>
    <script type="text/javascript">
        function alertinfo() {
            var frm_app = document.getElementById("form");
            if (frm_app.name.value == "") {
                alert("Please fill the form properly")
                frm_app.user.focus();
                return false;
            }
            if (frm_app.date.value == "") {
                alert("Please fill the form properly")
                frm_app.pass.focus();
                return false;
            }
            if (frm_app.hour.value == "") {
                alert("Please fill the form properly")
                frm_app.fname.focus();
                return false;
            }
            if (frm_app.admin.value == "") {
                alert("Please fill the form properly")
                frm_app.lname.focus();
                return false;
            }

            frm_app.submit();
        }
    </script>

</body>

</html>
