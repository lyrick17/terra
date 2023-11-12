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
					<h2 class="text-center">These are Terra's registered users.</h2>
				</div>
				
				<div class="container-fluid w-75">
					<p>
						<?php 
							
							$q = "SELECT CONCAT(lname, ', ', fname) AS name, email, user_id, DATE_FORMAT(registration_date, '%M %d, %Y') AS regdate FROM users ORDER BY registration_date ASC";
							$result = @mysqli_query($dbcon, $q);
							
							if ($result) { // if no error, display results please :))
								echo '<table class="table table-hover table-bordered table-striped"> 
										<tr class="table-dark"> 
											<td><b>Name</b></td> 
											<td><b>Email</b></td> 
											<td><b>Date Registered</b></td> 
											<td><b>Edit</b></td>
											<td><b>Delete</b></td>
										</tr>';
							
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
										echo '<tr class="table-secondary">' .
												'<td>' . $row['name'] .    '</td>' .
												'<td>' . $row['email'] .   '</td>' .
												'<td>' . $row['regdate'] . '</td>' .
												'<td> <a href="admin-edit-user.php?id='. $row['user_id'] .'" class="btn btn-primary">Edit</a></td> ' .
												'<td> <a href="admin-delete-user.php?id='. $row['user_id'] .'" class="btn btn-danger"> Delete </a> </td> ' .
											'</tr>';
								}
								
								echo '</table>';
								mysqli_free_result($result);
							} else { // error rawr
								echo "<p> The current users could not be retrived. We apologize for the inconvenience. </p>";
								echo "<p>" . mysqli_error($dbcon) . "</p>";
							}
							
							mysqli_close($dbcon);
							
						?>
					</p>
				</div>
            </div>
        </div>
        
    </div>

    <?php require('templates/footer-admin.php'); ?> 

    <script src="javascript/bootstrap.bundle.js"></script>
    
    
</body>
</html>