<html>

<head>
    <title>Admin Login</title>
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
                <a href="a-register.php" class="list-group-item list-group-item-action bg-light">Admin Register</a>
                <a href="a-dashboard.php" class="list-group-item list-group-item-action bg-light">Admin Dashboard</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <button class="" id="menu-toggle">
        </button>

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">

                        <div align=center>
                            <h1>Admin Login</h1>
                        </div>

                        <form action="a-login-p.php" method="post" id="form1">
                            <div class="form-group">
                                <label for="user">Username</label>
                                <input type="text" name="user" class="form-control" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" name="pass" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" name="submit" class="btn btn-primary" />
                                <a href="register.php" class="btn btn-secondary">Register</a>
                            </div>
                        </form>
                    </div>
                </div class="row">
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function alertinfo() {
            var frm_app = document.getElementById("form1");
            if (frm_app.user.value == "") {
                alert("Please input your username!")
                frm_app.user.focus();
                return false;
            }
            if (frm_app.pass.value == "") {
                alert("Please input your password!")
                frm_app.pass.focus();
                return false;
            }

            frm_app.submit();
        }
    </script>
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
