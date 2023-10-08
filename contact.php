<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('templates/head.php'); ?>
	<title>Contact Us - Terra</title>
</head>
<body>
    <!-- Header -->
    <?php require('templates/header/header-fixed.php'); ?>

    <!-- Body -->
    <div>
        <!-- Main -->  
        

        <!-- Contact Us -->
        <div class="container-fluid contact-section">
            <div class="container p-3 p-md-4">
                <div class="row">
                    <!-- Left Side, Text -->
                    <div class="container col-md-6 col-12 p-2 p-sm-5">
                        <div class="center-vertically">
                            <p class="front-page-font-sm fw-bold">Contact Us!</p>
                            <p class="text-white text-center">We're happy to hear from your feedbacks and will reach out to your
                                concern as soon as possible.
                            </p>
                        </div>
                    </div>
                    <!-- Right Side, Contact Form -->
                    <div class="col-md-6">
                        <div class="card p-3 p-sm-4 p-lg-5">
                            <form>
                                <!-- Username -->
                                <div class="form-outline mb-2">
                                    <label class="form-label" for="contactUsername">Username:</label>
                                    <input type="text" id="contactUsername" class="form-control" placeholder="Username">
                                </div>
                                <!-- Email -->
                                <div class="form-outline mb-2">
                                    <label class="form-label" for="contactEmail">Email:</label>
                                    <input type="email" id="contactEmail" class="form-control" placeholder="Email">
                                </div>
                                <!-- Feedback -->
                                <div class="form-outline mb-2">
                                    <label class="form-label" for="contactConcern">Feedback:</label><br />
                                    <textarea class="form-control" placeholder="Write your feedback here" id="contactConcern" style="height: 35vh;"></textarea>
                                    
                                </div>
        
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-3 px-5">Submit</button>
                                
                            </form>
                        </div>
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