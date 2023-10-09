<?php require('sql-connection/mysqli_user_connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php require('templates/head.php'); ?>
	<title>Terra</title>
</head>
<body>
    <!-- Header -->
    <?php require('templates/header/header-fixed.php'); ?>

    <?php // Erase Entries, Cancel ?>
    <!-- Body -->
    <div>
        <!-- Main -->  
        
        <!-- Login/SignUp -->
        <div class="container-fluid signup-section">
            <div class="container p-3 p-md-4">
                <div class="row">
                    <!-- Left Side, Introduction -->
                    <div class="col-md-6" style="padding: 30vh 0;">
                            <p class="front-page-font-sm">Share your Experience!</p>
                            <p class="front-page-font-sm">Travel with others!</p>
                    </div>
            
                    <!-- Right Side, Login/Register -->
                    <div class="col-md-6">
                        <?php require("templates/userform.php"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php require('templates/footer.php'); ?> 
    
    <script src="javascript/bootstrap.bundle.js"></script>
    <!-- <script src="design.js"></script> -->
    <script src="javascript/form-animation.js"></script>
    <script src="javascript/form-validation.js"></script>
</body>
</html>