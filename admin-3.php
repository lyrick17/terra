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
                    <h2 class="text-center">Terra Space</h2>
                    <div class="row p-2 p-md-5">
                        <div class="col-md-6">
                            <div class="card h-100 text-center" style="max-width: 540px;">
                                <div class="row g-0">
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                Another page for 
												<?php if (isset($_SESSION['user_id'])) { 
													echo "{$_SESSION['fname']} {$_SESSION['lname']}!"; 
												}?> 
												to add content. 
                                            </h3>
                                            <p class="card-text fs-5">WAKU WAKU</p>
                                        </div>
                                </div>
                                <div class="card-footer text-body-secondary text-center">
                                    <a href="admin-dashboard.php" class="btn btn-primary">View Dashboard</a>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 text-center" style="max-width: 540px;">
                                <div class="row g-0">
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                TATAKAE 
                                            </h3>
                                            <p class="card-text fs-5">Further Content Will be added as the system grow</p>
                                        </div>
                                </div>
                                <div class="card-footer text-body-secondary text-center">
                                    <a href="admin-view-users.php" class="btn btn-primary">View All Registered Users</a>
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

