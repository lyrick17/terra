<?php 
// We do not need to require the mysqli_connect since this php file
//  has been declared after mysqli_connect has been called in the webpage

$editError = "";
$editSuccess = "";

// contains when admin edit user information
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // variable that will handle the errors and hold error messages
    $errors = 0;

    // validate FIRST NAME, LAST NAME, EMAIL
    $fn = (!empty($_POST['fname'])) ? mysqli_real_escape_string($dbcon, trim($_POST['fname'])) : $errors++;
    $ln = (!empty($_POST['lname'])) ? mysqli_real_escape_string($dbcon, trim($_POST['lname'])) : $errors++;
    $e = (!empty($_POST['email'])) ? mysqli_real_escape_string($dbcon, trim($_POST['email'])) : $errors++;

    // check email if similar to other users
    $checkEmail = "SELECT user_id FROM users WHERE email='$e' AND user_id != '$id'";
    $checkEmailresult = @mysqli_query($dbcon, $checkEmail);

    
    if (!mysqli_num_rows($checkEmailresult) == 0) {     // error handling, there is email error 
        // email already registered
        $editError = "Email already registered.";
    } elseif (!$errors == 0) {                          // there are invalid input errors
        // there is error
        $editError = "Invalid Input";
    } else {                                            // UPDATE THE INFORMATION
        

        // no similar email and no other errors
        $q = "UPDATE users SET fname='$fn', lname='$ln', email='$e' WHERE user_id =$id LIMIT 1";
        $result = @mysqli_query($dbcon, $q);
        
        // check if there's one record changed
        if (mysqli_affected_rows($dbcon) == 1) {
            $editSuccess = "User information successfully edited";
        } else {
            $editError = "System Error: User Information not edited. Please try again.";
        }
    }
}
?>