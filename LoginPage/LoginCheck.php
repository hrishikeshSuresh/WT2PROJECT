<?php
// Include config file
session_start();
include 'Config.php';

// Define variables and initialize with empty values
$username = $password = "";
$login_username_err = $login_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $login_username_err = 'Please enter username.';
        $_SESSION["login_username_error"] = $login_username_err;
        header("location: Login.php");
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $login_password_err = 'Please enter your password.';
        $_SESSION["login_password_error"] = $login_password_err;
        header("location: Login.php");
    } else{
        $password = trim($_POST['password']);
    }

    // Validate credentials
    if(empty($login_username_err) && empty($login_password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                          if(!empty($_POST["remember"])) {
        				                      setcookie ("member_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
        				                      setcookie ("member_password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
        			                                                     } else {
        				                                                                 if(isset($_COOKIE["member_login"])) {
        					                                                                         setcookie ("member_login","");
        				                                                                        }
        				                                                                 if(isset($_COOKIE["member_password"])) {
        					                                                                        setcookie ("member_password","");
        				                                                                        }
        			                                                  }
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            $arr = explode('@',$username);
                            $_SESSION['username'] = $arr[0];
                            header("location: ../HomePage/Home_Page.php");
                        } else{
                            // Display an error message if password is not valid
                            $login_password_err = 'The password you entered was not valid.';
                            $_SESSION["login_password_error"] = $login_password_err;
                            header("location: Login.php");
                        }
                    }
                } else{

                    // Display an error message if username doesn't exist
                    $login_username_err = 'No account found with that username.';
                    $_SESSION["login_username_error"] = $login_username_err;
                    header("location: Login.php");
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($conn);
}
?>
