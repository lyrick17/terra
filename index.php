<?php require('sql-connection/mysqli_user_connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('templates/head.php'); ?>
	<title>Terra</title>
</head>
<body>
    <!-- Header -->
    <?php require('templates/header/header-scroll.php'); ?>

    <!-- Body -->
    <div>
        <!-- Main -->  
        
        <!-- Background Picture Carousel & Front Page Text -->
        <div id="carouselBG" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselBG" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselBG" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselBG" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselBG" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselBG" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselBG" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselBG" data-bs-slide-to="6" aria-label="Slide 7"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image bg-1 active height-100vh">
                    <!-- Front Page Text -->
                    <div class="container text-center front-page-text-container">
                        <p class="front-page-font fw-bold">
                            Tour the World  <br /> at Your Fingertips
                        </p>
                    </div>
                </div>

                <div class="carousel-item carousel-image bg-2 height-100vh">
                    <!-- Front Page Text -->
                    <div class="container text-center front-page-text-container">
                        <p class="front-page-font fw-bold">
                            Tour the World  <br /> at Your Fingertips
                        </p>
                    </div>
                </div>

                <div class="carousel-item carousel-image bg-3 height-100vh">
                    <!-- Front Page Text -->
                    <div class="container text-center front-page-text-container">
                        <p class="front-page-font fw-bold">
                            Tour the World  <br /> at Your Fingertips
                        </p>
                    </div>
                </div>

                <div class="carousel-item carousel-image bg-4 height-100vh">
                    <!-- Front Page Text -->
                    <div class="container text-center front-page-text-container">
                        <p class="front-page-font fw-bold">
                            Tour the World  <br /> at Your Fingertips
                        </p>
                    </div>
                </div>

                <div class="carousel-item carousel-image bg-5 height-100vh">
                    <!-- Front Page Text -->
                    <div class="container text-center front-page-text-container">
                        <p class="front-page-font fw-bold">
                            Tour the World  <br /> at Your Fingertips
                        </p>
                    </div>
                </div>

                <div class="carousel-item carousel-image bg-6 height-100vh">
                    <!-- Front Page Text -->
                    <div class="container text-center front-page-text-container">
                        <p class="front-page-font fw-bold">
                            Tour the World  <br /> at Your Fingertips
                        </p>
                    </div>
                </div>

                <div class="carousel-item carousel-image bg-7 height-100vh">
                    <!-- Front Page Text -->
                    <div class="container text-center front-page-text-container">
                        <p class="front-page-font fw-bold">
                            Tour the World  <br /> at Your Fingertips
                        </p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselBG" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselBG" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- More Information -->
        <div class="container-fluid bg-color-theme-1">
            <div class="row">
                <div class="col-md-6" style="padding: 0;">
                    <img src="img/more-info.jpg" class="height-100vh" style="max-width: 100%;" />
                </div>
                <div class="container col-md-6 p-2 p-sm-5 about-container">
                    <div class="center-vertically">
                        <p class="front-page-font-xs">
                            We take the opportuniy to enjoy admiring 
                            the sceneries all over the world. Come 
                            hang out with us here at Terra and appreciate 
                            the place we live in.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up -->
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
                        <?php require("templates/userform.php") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php require('templates/footer.php'); ?> 

    <script src="javascript/bootstrap.bundle.js"></script>
    <script src="javascript/design.js"></script>
    <script src="javascript/form-animation.js"></script>
    <script src="javascript/form-validation.js"></script>
    
</body>
</html>