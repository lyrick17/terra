<?php require('sql-connection/mysqli_connect.php'); ?>

<?php 
	if (!isset($_SESSION['user_id']) or ($_SESSION['user_level'] != 0)) {
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
    <?php require('templates/header/header-member.php'); ?>

    <!-- Body -->
    <div class="container-fluid">
        <div class="row flex-wrap">
            <!-- Left Sidebar-->
            <div class="col-12 col-md-4 p-2 border">
                <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                    <div class="card p-4 w-100">
                        <div class="image d-flex flex-column justify-content-center align-items-center">
                            <button class="btn">
                                <img src="img/users.jpg" height="100" width="100" />
                            </button>
                            <span class="mt-3">
                                <?php
                                    if (isset($_SESSION['user_id'])) {
										echo "{$_SESSION['fname']} {$_SESSION['lname']}";
                                    }
                                ?>
                            </span>
                            <span class="mb-3">
                                <?php
                                    if (isset($_SESSION['user_id'])) {
										echo "{$_SESSION['email']}";
                                    }
                                ?>
                            </span>
                            <!--<div class="d-flex flex-row justify-content-center align-items-center mt-3">
                                <span class="number">1069 <span class="follow">Followers</span></span>
                            </div> -->
                            <div class="d-flex mt-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="member-feed.php" class="btn btn-success w-100">Home</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="member-profile.php" class="btn btn-success w-100">Account Details</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="member-3.php" class="btn btn-success w-100">Settings</a>
                                    </li>
									<li class="list-group-item">
                                        <a href="member-4.php" class="btn btn-success w-100">Another Page</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="px-2 text-center mt-4">
                                <span>Joined In </span> <br />
                                <span class="join">
                                    <?php if (isset($_SESSION['user_id'])) {
                                        echo $_SESSION['registration_date'];
                                    }?>
                                </span>
                            </div>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>
            
            <!-- Middle Content-->
            <div class="col-12 col-md-8 p-5 border" style="margin: 0;">
                <h1>Anothern Ezztra Spacezah</h1>
                <h1>Free Space</h1>
            </div>

            
        </div>
        
    </div>
    

    <?php require('templates/footer.php'); ?> 

    <script src="javascript/bootstrap.bundle.js"></script>
    
</body>
</html>

