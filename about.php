<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('templates/head.php'); ?>
	<title>About Terra</title>
</head>
<body>
    <!-- Header -->
    <?php require('templates/header/header-scroll.php'); ?>
    
    <!-- Body -->
    <div  class="main-container">
        <!-- Main -->  
        <!-- About 1 -->
        <div class="container-fluid">
            <div class="row">
                <div class="container col-md-6 col-12 p-2 p-sm-5 about-container">
                    <div class="center-vertically">
                        <p class="h2">About Us</p>
                        <p class="front-page-font-xs">
                            Welcome to Terra, your passport to a world of adventure, discovery, and wanderlust. 
                            Founded in 2023 by Lyrick Jonson, Terra was born out of a deep passion for travel 
                            and a desire to create a global community of people with a desire to explore.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-12" style="padding: 0; display: block;">
                    <img src="img/about01.jpg" class="height-100vh" style="max-width: 100%;">
                </div>
            </div>
            
        </div>

        <!-- About 2 -->
        <div class="container-fluid bg-color-theme-1">
            <div class="row">
                <div class="col-md-6 col-12" style="padding: 0; display: block;">
                    <img src="img/about03.jpg" class="height-100vh" style="width: 100%;">
                </div>
                <div class="container col-md-6 col-12 p-2 p-sm-5 about-container">
                    <div class="center-vertically">
                        <p class="h2">Our Community</p>
                        <p class="front-page-font-xs">
                            Terra isn't just a travel blog; it's a thriving community where administrators 
                            and users alike come together to share their adventures. Our platform is designed 
                            for aspiring travelers, by travelers, ensuring that every story, photograph, 
                            and recommendation comes from genuine experiences.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About 3 -->
        <div class="container-fluid bg-color-theme-2">
            <div class="row">
                <div class="container col-md-6 col-12 p-2 p-sm-5 about-container">
                    <div class="center-vertically">
                        <p class="h2">Join Us in This Journey</p>
                        <p class="front-page-font-xs">
                            Whether you're an intrepid globetrotter, a passionate photographer, or someone planning their 
                            very first adventure, Terra welcomes you. Join us on this incredible journey as we explore the 
                            world, one story at a time. <br />
                            Let's embark on unforgettable adventures, discover hidden gems, and celebrate the beauty of our 
                            planet together. Together, we are Terra.  <br />
                            Thank you for being a part of our travel-loving community.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-12" style="padding: 0; display: block;">
                    <img src="img/about02.jpg" class="height-100vh" style="width: 100%; ">
                </div>
            </div>
        </div>
    </div>

    <?php require('templates/footer.php'); ?> 

    <script src="javascript/bootstrap.bundle.js"></script>
    <script src="javascript/design.js"></script>
    
</body>
</html>