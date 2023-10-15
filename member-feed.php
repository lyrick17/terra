<?php require('sql-connection/mysqli_connect.php'); ?>

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
            <div class="col-12 col-md-3 p-2 border">
                <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                    <div class="card p-4 w-100">
                        <div class="image d-flex flex-column justify-content-center align-items-center">
                            <button class="btn">
                                <img src="img/users.jpg" height="100" width="100" />
                            </button>
                            <span class="mt-3">
                                <?php
                                    if (isset($_SESSION['user_id'])) {
                                        echo $_SESSION['fname'] . " " . $_SESSION['lname'] ;
                                    }

                                ?>
                            </span>
                            <span class="mb-3">
                                <?php
                                    if (isset($_SESSION['user_id'])) {
                                        echo $_SESSION['email'];
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
            <div class="col-12 col-md-6 p-5 border" style="margin: 0;">
                <div class="container-fluid px-5">
                    
                    <!-- POST -->
                    <div class="card post-card">
                        <button class="w-100 btn btn-success py-3 fs-5">Create New Post</button>
                    </div>
                    
                    <!-- POST -->
                    <div class="card post-card">
                        <img src="img-posts/eco-post.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Eco-Campaign</h4>
                            <p class="card-text">Terra's action to create a better environment. Eco-Campaign. Photo by Eyoel Kahssay</p>
                            <small class="card-text">by Terra Admins, September 30, 2023</small>
                            <!--<a href="#" class="btn btn-success">Go somewhere</a>-->
                        </div>
                    </div>


                    <!-- POST -->
                    <div class="card post-card">
                        <img src="img-posts/default-no-post.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="card-title">It's been quiet in your feed.</h2>
                            <p class="card-text fs-4">Share us your stories now!</p>
                            <small class="card-text">by Terra Admins</small>
                            <!--<a href="#" class="btn btn-success">Go somewhere</a>-->
                        </div>
                    </div>
                
                
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="col-12 col-md-3 p-5 border" style="margin: 0;">
                <div class="container-fluid">
                    
                    <div class="card text-center w-100">
                        <div class="card-header" style="background-color: #F7BE6D;">
                            Trending Topics 
                        </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <a href="#">London</a>
                                </p>
                                <p class="card-text">
                                    <a href="#">Philippines</a>
                                </p>
                                <p class="card-text">
                                    <a href="#">Mt. Fuji</a>
                                </p>
                                <p class="card-text">
                                    <a href="#">California</a>
                                </p>
                                <p class="card-text">
                                    <a href="#">Bahay Ko</a>
                                </p>
                            </div>
                        <div class="card-footer text-body-secondary" style="background-color: #F7BE6D;">
                            @terra
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        
    </div>
    

    <?php require('templates/footer.php'); ?> 

    <script src="javascript/bootstrap.bundle.js"></script>
    
</body>
</html>

