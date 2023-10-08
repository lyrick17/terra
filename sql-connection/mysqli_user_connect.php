<?php 

// When user registers a new account, validation needed before entering the new details in the database 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['formType']) == 'register') {
    // variable that will handle the errors and hold error messages
    $errors = array();

    // validate FIRST NAME
    if (empty($_POST['registerFName'])) {
        $errors[] = "First Name";
    } else {
        $fn = trim($_POST['registerFName']);
    }

    // validate LAST NAME
    if (empty($_POST['registerLName'])) {
        $errors[] = "Last Name";
    } else {
        $ln = trim($_POST['registerLName']);
    }

    // validate EMAIL ADDRESS
    if (empty($_POST['registerEmail'])) {
        $errors[] = "Email Address";
    } else {
        $e = trim($_POST['registerEmail']);
    }

    // validate PASSWORD and CONFIRM PASSWORD
    if (!empty($_POST['registerPassword'])) {
        if ($_POST['registerPassword'] != $_POST['registerConfirmPassword']) {
            $errors[] = "Your passwords did not match";
        } else {
            $p = trim($_POST['registerPassword']);
        }
    } else {
        $errors[] = "Password";
    }

    if (empty($errors)) {
        
        require("mysqli_connect.php");
        
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