<?php
// Include config file
session_start();
include 'Config.php';

// Define variables and initialize with empty values
$username = $email = $password = $age = $phno = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        //$email_err = "Please enter a email-id.";
        //$_SESSION["email_err"] = $email_err;
        header("location: Login_Page.php");
    } else{
        // Prepare a select statement
        $sql = "SELECT username FROM usertable WHERE username = ?";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    //$email_err = "This email-id is already registered.";
                    //$_SESSION["email_err"] = $email_err;
                    header("location: Login_Page.php");
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
                header("location: Login_Page.php");
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        //$password_err = "Please enter a password.";
        //$_SESSION["password_err"] = $password_err;
        header("location: Login_Page.php");
    } elseif(strlen(trim($_POST['password'])) < 6){
        //$password_err = "Password must have atleast 6 characters.";
        //$_SESSION["password_err"] = $password_err;
        header("location: Login_Page.php");
    } else{
        $password = trim($_POST['password']);
    }

	$email = trim($_POST['email']);
	$age = trim($_POST['age']);
	$phno = trim($_POST['phno']);
    
    // Check input errors before inserting in database
    //if(empty($email_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO usertable (username, email, password, age, tour_id) VALUES (?, ?, ?, ?, ?)";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_email, $param_password, $param_age, $param_tourid);

            // Set parameters
            $param_username = $username;
            $param_password = $password; 
			$param_email = $email; 
			$param_age = $age; 
			$param_tourid = "TR103"; 

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                $_SESSION["success"] = "You have successfully registered on our website and are now our member!";
                header("location: Login_Page.php");
            } else{
              $_SESSION["success"] = "Sorry could not register you to our website...";
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    //}

    // Close connection
    mysqli_close($conn);
}
?>
