<?php require('sql-connection/mysqli_connect.php'); ?>

<?php 
	if (!isset($_SESSION['user_id']) or ($_SESSION['user_level'] != 1)) {
		header("location: register.php?login=true");
		exit();
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('templates/head.php'); ?>
	<title>Mga Nagregister sa Terra</title>
</head>
<body>
    <!-- Header -->
    <?php require('templates/header/header-admin.php'); ?>

    <!-- Body -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- Left Sidebar-->
            <?php require("templates/admin-leftsidebar.php");?>

            <!-- Right Content-->
            <div class="col-auto col-md-10" style="margin: 0;">
                <div class="container-fluid my-5">

                    <h2 class="text-center">Admin Dashboard</h2>

                    <div class="row p-2 p-lg-5">

                        <div class="col-auto col-lg-4 my-2">
                            <div class="card h-100" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-4">
                                    <img src="img/users.jpg" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <?php 
                                                    $result = mysqli_fetch_array(@mysqli_query($dbcon, "SELECT COUNT(*) as total FROM users"));
                                                    echo $result[0];
                                                ?>
                                            </h3>
                                            <p class="card-text fs-5">Total number of users</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-body-secondary text-center">
                                    <a href="admin-view-users.php" class="btn btn-primary">View All Registered Users</a>
                                </div>
                            </div>  

                        </div>
                        <div class="col-auto col-lg-8 my-2">
                            <div class="card text-center h-100">
                                <div class="card-body">
                                    <h3 class="card-title">IT'S OVER 9000</h3>
                                    <p class="card-text fs-5">Total number of Website Visits</p>
                                </div>
                                <div class="card-footer text-body-secondary">
                                    <a href="admin-2.php" class="btn btn-primary">View Logs</a>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>

            </div>
        </div>
        
    </div>
    

    <?php require('templates/footer-admin.php'); ?> 

    <script src="javascript/bootstrap.bundle.js"></script>
    
    
</body>
</html>

