<?php 
require("mysqli_connect.php");

$inputError = array("username"=> "", "email"=> "",  "password"=> "");

$registerError = "";
$loginError = "";


// When user registers a new account, validation needed before entering the new details in the database 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['formType']) == 'register') {
    // variable that will handle the errors and hold error messages
    $errors = 0;

    // validate FIRST NAME, LAST NAME, EMAIL
    $fn = (!empty($_POST['registerFName'])) ? mysqli_real_escape_string($dbcon, trim($_POST['registerFName'])) : $errors++;
    $ln = (!empty($_POST['registerLName'])) ? mysqli_real_escape_string($dbcon, trim($_POST['registerLName'])) : $errors++;
    $e = (!empty($_POST['registerEmail'])) ? mysqli_real_escape_string($dbcon, trim($_POST['registerEmail'])) : $errors++;
    
    // validate PASSWORD and CONFIRM PASSWORD, if not empty and if password matched
    if (!empty($_POST['registerPassword']) && $_POST['registerPassword'] == $_POST['registerConfirmPassword']) {
        $p = mysqli_real_escape_string($dbcon, trim($_POST['registerPassword']));
    } else {
        $errors++;
    }

    if ($errors == 0) {
        
        // Query
        $q = mysqli_prepare($dbcon, "INSERT INTO users(fname, lname, email, psword, registration_date) 
        VALUES (?, ?, ?, ?, NOW())");
        mysqli_stmt_bind_param($q, "ssss", $fn, $ln, $e, md5($p));
        $result = mysqli_stmt_execute($q);
        
        // User has registered
        if ($result) {
            header("location: register-thanks.php");
            exit();
        } else {
            $registerError = "System Error. Please try again or contact the System Administrator. We apologize for the inconvenience";
        }
        mysqli_close($dbcon);
    } else {
        $registerError = "Invalid Input";
    }

}

// When user logins, server side validation is needed too
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['formType2']) == 'login') {

    // validate email and password
    // if not empty, then trim the input and assign to var, else, assign var to FALSE
    $email = (!empty($_POST['loginUser'])) ? mysqli_real_escape_string($dbcon, trim($_POST['loginUser'])) : FALSE;
    $pass = (!empty($_POST['loginPassword'])) ? mysqli_real_escape_string($dbcon, trim($_POST['loginPassword'])) : FALSE;
    
    if ($email && $pass) {
        $q = "SELECT user_id, fname, user_level FROM users WHERE (email = '". $email ."' AND psword = '". md5($pass) . "')";
        $result = @mysqli_query($dbcon, $q);

        // count the number of rows that has the same email and password
        switch (@mysqli_num_rows($result)) {
            case 1: // there is only one user
                session_start();

                // Get all the details of user and put it in a SESSION array
                // NOTE: everything from DB is string
                // Then, user level would determine what homepage will they go
                $_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $_SESSION['user_level'] = (int) $_SESSION['user_level']; // convert string to integer

                //$url = ($_SESSION['user-level'] === 1) ? "admin-home.php" : "user-home.php";
                $url = ($_SESSION['user_level'] === 1) ? "register-view-users.php" : "ecofriendly.php";

                header("location: " . $url);
                exit();

                mysqli_free_result($result);
                mysqli_close($dbcon);
                break;


            case 0: // user wrong input
                $loginError = "Invalid email or password";
                break;

            default: // two or more emails are in database, system error
                $loginError = "System Error: it seems like two or more emails have been registered. Please contact the administrator.";
                break;
        }
    } else {
        $loginError = "Invalid email or password";
    }

    mysqli_close($dbcon);
}
?>
