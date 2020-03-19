<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"><a href='index.php'>ScotskMan</a></div>
            <div class="list-group list-group-flush">
                <a href="login.php" class="list-group-item list-group-item-action bg-light">Login</a>
                <a href="register.php" class="list-group-item list-group-item-action bg-light">Register</a>
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
                <h1 class="mt-4">ScotskMan</h1>
                <p>ScotskMan (Scolarship tasks manager) is, as its name implies, a task manager built for scholarship students in mind.</p>
                <p>ScotskMan helps record and manage tasks done by scholarship students and report information about the tasks in a simple dashboard</p>

                <h2 class="mt-4">The problem</h2>
                <p>At Thai-Nichi Institute of Technology, scholarship students are required to complete many tasks for lecturers, staffs, and TNI in general.</p>
                <p>Each term, scholarship students must complete at least 30-hours worth of tasks. These tasks are varied, ranging from assisting in lecture, grading homework, to other activities</p>
                <p>The activities are recorded in a small paper notebook. Then, at the end of the term, scholarship students must submit these notebooks to Student Affairs.</p>
                <p>Failing to do so can result in not being able to graduate from TNI.</p>
                <p>The problem is the paper notebook which should be important for scholarship students, are fragile and prone to be lost.</p>

                <h2 class="mt-4">The solution</h2>
                <p>A web-based application ensures that information about completed tasks are not lost and can be access easier.</p>
                <h2 class="mt-4">For students</h2>
                <p>Students can add, edit, and manage task easily.</p>
                <p>Go to <a href="dashboard.php">Dashboard</a> to manage your tasks</p>
                <h2 class="mt-4">For admins</h2>
                <p>Admins (Lecturers, staffs, or task givers) can approve, unapprove, or delete task if needed.</p>
                <p>Go to <a href="a-dashboard.php">Admin Dashboard</a> to manage tasks that students mark as ordered by you</p>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

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
