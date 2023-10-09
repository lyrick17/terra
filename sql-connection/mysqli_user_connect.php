<?php 
require("mysqli_connect.php");
// When user registers a new account, validation needed before entering the new details in the database 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['formType']) === 'register') {
    // variable that will handle the errors and hold error messages
    $errors = array();

    // validate FIRST NAME
    if (empty($_POST['registerFName'])) {
        $errors[] = "First Name";
    } else {
        $fn = mysqli_real_escape_string($dbcon, trim($_POST['registerFName']));
    }

    // validate LAST NAME
    if (empty($_POST['registerLName'])) {
        $errors[] = "Last Name";
    } else {
        $ln = mysqli_real_escape_string($dbcon, trim($_POST['registerLName']));
    }

    // validate EMAIL ADDRESS
    if (empty($_POST['registerEmail'])) {
        $errors[] = "Email Address";
    } else {
        $e = mysqli_real_escape_string($dbcon, trim($_POST['registerEmail']));
    }

    // validate PASSWORD and CONFIRM PASSWORD
    if (!empty($_POST['registerPassword'])) {
        if ($_POST['registerPassword'] != $_POST['registerConfirmPassword']) {
            $errors[] = "Your passwords did not match";
        } else {
            $p = mysqli_real_escape_string($dbcon, trim($_POST['registerPassword']));
        }
    } else {
        $errors[] = "Password";
    }

    if (empty($errors)) {
        
        $q = mysqli_prepare($dbcon, "INSERT INTO users(fname, lname, email, psword, registration_date) 
        VALUES (?, ?, ?, ?, NOW())");

        mysqli_stmt_bind_param($q, "ssss", $fn, $ln, $e, md5($p));
        
        $result = mysqli_stmt_execute($q);
        #$result = @mysqli_query($dbcon, $q);
        
        if ($result) {
            header("location: register-thanks.php");
            exit();
        } else {
            echo "<script>alert('System Error. \\nPlease try again or contact the System Administrator. We apologize for the inconvenience');</script>";
        }
        mysqli_close($dbcon);
        

    } else {
        echo "<script>alert('You forgot to enter your: \\n";
        foreach ($errors as $msg) {
            echo " - $msg\\n";
        }
        echo "Please try again'); </script>";
    }
}

// When user registers a new account, validation needed before entering the new details in the database
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['formType2']) == 'login') {
    // variable that will handle the errors and hold error messages
    //$errors = array();

    // validate EMAIL ADDRESS
    if (!empty($_POST['loginUser'])) {
        $e = mysqli_real_escape_string($dbcon, trim($_POST['loginUser']));
    } else {
        $e = FALSE;
        echo "<script>alert('enter email');</script>";
        //$errors[] = "Email Address";
    }

    if (!empty($_POST['loginPassword'])) {
        $p = mysqli_real_escape_string($dbcon, trim($_POST['loginPassword']));
    } else {
        $p = FALSE;
        echo "<script>alert('enter password');</script>";
        //$errors[] = "Password";
    }

    if ($e && $p) {
        $q = "SELECT user_id, fname, user_level FROM users WHERE (email = '". $e ."' AND psword = '". md5($p) . "')";
        $result = @mysqli_query($dbcon, $q);

        // count the number of rows that has the same email and password
        if (@mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);
            // check user level
            $_SESSION['user_level'] = (int) $_SESSION['user_level']; // convert string to integer
            // everything u get in database is a string

            // ternary operators
            //$url = ($_SESSION['user-level'] === 1) ? "admin-home.php" : "user-home.php";
            $url = ($_SESSION['user-level'] === 1) ? "register-view-users.php" : "ecofriendly.php";

            header("location: " . $url);
            exit();
            mysqli_free_result($result);
            mysqli_close($dbcon);
        } else {
            echo "Error.";
        }
    } else {
        echo "Please try again.";
    }

    mysqli_close($dbcon);
}
?>
