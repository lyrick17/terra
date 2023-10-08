<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('templates/head.php'); ?>
	<title>Terra</title>
</head>
<body>
    <!-- Header -->
    <?php require('templates/header/header-fixed.php'); ?>

    <!-- Body -->
    <div>
        <!-- Main -->  
        
        <!--  -->
        <div class="container-fluid welcome-section" style="height: 80vh;">
            <div class="container p-3 p-md-4 w-75">
                <div>
                    <!-- Details -->
                    <div class="card p-3 p-sm-4 p-lg-5 registerForm" id="login">
                            <p class="text-center h1">Welcome to Terra!</p>
                            <p class="text-center">Thank you for your registration.</p>

                            <p class="front-page-font-sm" style="color:black;">We hope <br />you enjoy at Terra.</p>
                            <p class="text-center">Wala pang log-in eh, wait lang kayo mga userz.</p>
                            <button type="button" class="btn btn-primary btn-block mx-auto">
                                <a href="index.php" class="text-white link-underline link-underline-opacity-0">Back To Home</a>
                            </button>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php require('templates/footer.php'); ?> 
    
    <script src="javascript/bootstrap.bundle.js"></script>
    <!-- <script src="design.js"></script> -->
    
</body>
</html>