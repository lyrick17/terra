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

                    <h2 class="text-center">Edit User Record</h2>

					<?php 
						// check if get is passed and if it's numberr or not
						function getUserID($source) {
							return (isset($source['id']) && is_numeric($source['id'])) ? $source['id'] : FALSE;
						}
						
						// choose first non-null value, either GET value or POST value (for future value reasons)
						$id = getUserID($_GET) ?? getUserID($_POST);

						if ($id) {
							// check the id in database to make sure if user_id exists
							$idquery = "SELECT fname, lname, email FROM users WHERE user_id = $id";
							$getresult = @mysqli_query($dbcon, $idquery);
							$result = mysqli_num_rows($getresult); // get number of rows
						} else {
							$result = 0; // invalid / non-numeric id
						}

							// EXIT PAGE IMMEDIATELY THROUGH THIS IF CONDITION
							// admin accessed the user wrongly || admin access nonexisting userid 
							if ($result == 0) {
								// admin is dumb dumb, EXIT the page IMMEDIATELY
								include('templates/incorrect-edit-user-access.php');
								include('templates/footer-admin.php');
								exit();
							}
						
	// ----------------------- codes below this are when there are no invalid access to the webpage
						// if website is accessed correctly, 
						//	CONTINUE displaying the right content
						
						require("sql-connection/mysqli_edit_user.php");
					
						// get updated data from db
						$idquery = ($id) ? "SELECT fname, lname, email FROM users WHERE user_id = $id" : FALSE;
						$getresult = @mysqli_query($dbcon, $idquery);
							// already did 	//$query = "SELECT fname, lname, email FROM users WHERE user_id = $id";
							$row = mysqli_fetch_array($getresult, MYSQLI_NUM);
					?>


							<p class="text-danger text-center"> <?php echo $editError; ?></p>
							<p class="text-success text-center"> <?php echo $editSuccess; ?></p>
							<div class="card mx-5 p-3 p-sm-4 p-lg-5 registerForm collapse show" id="signup">
								<form action="admin-edit-user.php?id=<?php echo $id; ?>" method="post">

									<!-- FirstName and LastName -->
									<div class="row my-2">
										<div class="col-lg-6 form-outline  mb-2">
											<label class="form-label" for="fname">First Name:</label>
											
											<!-- span element for handling Firstname ERRORS -->
											<span id="registerFNameError" class="text-danger" style="font-size: 12px; font-style: italic;"></span>

											<input type="text" 
													id="fname" 
													name="fname"
													placeholder="First Name" 
													class="form-control"
													value="<?= $row[0]; ?>">
										</div>
										<div class="col-lg-6 form-outline  mb-2">
											<label class="form-label" for="lname">Last Name:</label>
											
											<!-- span element for handling FName ERRORS -->
											<span id="registerLNameError" class="text-danger" style="font-size: 12px; font-style: italic;"></span>
											<input type="text" 
													id="lname" 
													name="lname"
													placeholder="Last Name"
													class="form-control" 
													value="<?=  $row[1]; ?>">
										</div>
									</div>

									<!-- Email -->
									<div class="form-outline  mb-2">
										<label class="form-label" for="email">Email:</label>
										
										<!-- span element for handling EMAIL ERRORS -->
										<span id="registerEmailError" class="text-danger" style="font-size: 12px; font-style: italic;"></span>
										<input type="email" 
												id="email" 
												name="email"
												placeholder="Email"
												class="form-control" 
												value="<?= $row[2]; ?>">
									</div>
									
									<!-- Submit button -->
									<input type="submit" 
											id="editsubmit" 
											name="editsubmit" 
											class="btn btn-primary btn-block mb-3 px-5" 
											value="Submit"
											>
									
									<input type="hidden" name="id" value ="'.$id.'" />
								</form>
							</div>
					<?php mysqli_close($dbcon); ?>
                </div>

            </div>
        </div>
        
    </div>
    

    <?php require('templates/footer-admin.php'); ?> 

    <script src="javascript/bootstrap.bundle.js"></script>
    
    
</body>
</html>

