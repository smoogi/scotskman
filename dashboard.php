<?php
include("config.php");
include("session.php");
?>

<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"><a href='index.php'>ScotskMan</a></div>
            <div class="list-group list-group-flush">
                <a href="logout.php" class="list-group-item list-group-item-action bg-light">Logout</a>
                <a href="dashboard.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                <a href="a-dashboard.php" class="list-group-item list-group-item-action bg-light">Admin</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <button class="" id="menu-toggle">
        </button>

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div align=center class="col-md">
                        <h1>Dashboard</h1>
                        <h2>Hello, <?=$_SESSION['username'];?></h2>
                    </div>
                </div>

                <div class="row" style="margin: 10px 0px 10px 0px;">
                    <div class="col-md">

                        <?php
                $user_id = $_SESSION['id'];
                $str = "select * from tasks t join admins a on t.admin_id = a.id where student_id = $user_id";
	              if(isset($_POST['Search'])?$_POST['Search']:''){
		                $txt_search = $_POST['txt_search'];
                    $str .= " and (task_name like '%$txt_search%' or task_id like '%$txt_search%')";
	              }
                $str .= " ORDER BY task_status ASC, task_date ASC;";
	              $obj = mysqli_query($conn,$str)or die(mysqli_error($conn));
                ?>

                        <form name="form1" method="post" action="dashboard.php">
                            <div class="form-group">
                                <input placeholder="Seach data" class="form-control" type="text" name="txt_search" value="<?=isset($_POST['txt_search'])?$_POST['txt_search']:'';?>">
                            </div>
                            <input class="btn btn-success" type="submit" value="Search" name="Search">
                            <a class="btn btn-primary" href="insert.php">Insert</a>
                            <a class="btn btn-secondary" align='right' href="logout.php">Logout</a>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md">

                        <table align=center class="table table-stripe">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Date</th>
                                    <th>Task name</th>
                                    <th>Hours taken</th>
                                    <th>Order by</th>
                                    <th>Status</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <?php
	                      while($result = mysqli_fetch_array($obj))
	                      {
                            if($result['task_status'] == '1'){
                                $status = 'OK';
                            }else{
                                $status = 'WAITING';
                            }
                        ?>
                            <tbody>
                                <tr>
                                    <td> <?=$result['task_date']; ?> </td>
                                    <td> <?=$result['task_name']; ?> </td>
                                    <td> <?=$result['task_hour']; ?> </td>
                                    <td> <?=$result['firstname']; ?> <?=$result['lastname']; ?> </td>
                                    <td> <?=$status; ?> </td>
                                    <td>
                                        <a class="btn btn-warning" href="edit.php?edit=<?=$result['task_id']; ?>">edit</a>
                                        <a class="btn btn-danger" href="delete.php?id=<?=$result['task_id']; ?>">delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php
	                      }
                        ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>

</html>
