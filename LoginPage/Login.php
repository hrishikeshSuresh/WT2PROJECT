<?php
session_start();
 ?>
<html>
<head>
  <title>Login Form/Registration Form</title>
  <style>
  /*CSS for Login Form*/
  form#Login_Page {
    border: 3px solid black;
    width:48%;
    height: 100%;
    border-bottom: 3px;
    float: left;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    background-color: #dbd7d7;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.login{
  width:200;
  margin-left: 250;
}

.cancelbtn {
    width: 200;

    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

/*CSS for Registration Form*/
/* Full-width input fields */
form#Registration_Page {
  border: 3px solid black;
  width:48%;
 height: 100%;
  float:right;

}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}


/* Float cancel and signup buttons and add an equal width */
.signupbtn {
    margin-left: 180;
    width: 50%;
}

/* Add padding to container elements */
.container2 {
    padding: 16px;
    padding-top: 150px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
        width: 100%;
    }
}
.success{
  font-size: 30px;
  color: green;
}
.error{
  font-size: 15px;
  color: red;
}
  </style>
</head>
<body style="background-color:#989396">
  <!--Login Form-->
  <form action="LoginCheck.php" id="Login_Page" method="POST">
  <div class="imgcontainer">
    <img src="avatar.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <div class="error">
      <?php
           if(isset($_SESSION["login_username_error"])){
             echo $_SESSION["login_username_error"];
             $_SESSION["login_username_error"]="";
           }?>
    </div>
    <input type="text" placeholder="Enter Username" name="username" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" required>

    <label><b>Password</b></label>
    <div class="error">
      <?php
           if(isset($_SESSION["login_password_error"])){
             echo $_SESSION["login_password_error"];
             $_SESSION["login_password_error"]="";
           }?>
    </div>
    <input type="password" placeholder="Enter Password" name="password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" required>

    <button type="submit" class="login">Login</button>
    <input type="checkbox" name="remember" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#989396;padding-bottom:70;">
    <button type="button" class="cancelbtn" >Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<!--Registration Form-->

<form action="Registration.php" id="Registration_Page" method="POST">
  <h1 style="text-align:center;font-family:Ariel">Register on our Website</h1>
  <div class="success">
    <?php
         if(isset($_SESSION["success"])){
           echo $_SESSION["success"];
           $_SESSION["success"]="";
         }?>
  </div>
 <div class="container2">
   <label><b>Email</b></label>
   <div class="error">
     <?php
          if(isset($_SESSION["email_err"])){
            echo $_SESSION["email_err"];
            $_SESSION["email_err"]="";
          }?>
   </div>
   <input type="text" placeholder="Enter Email" name="email" required>

   <label><b>Password</b></label>
   <div class="error">
     <?php
          if(isset($_SESSION["password_err"])){
            echo $_SESSION["password_err"];
            $_SESSION["password_err"]="";
          }?>
   </div>
   <input type="password" placeholder="Enter Password" name="psw" required>

   <label><b>Repeat Password</b></label>
   <div class="error">
     <?php
          if(isset($_SESSION["confirm_password_err"])){
            echo $_SESSION["confirm_password_err"];
            $_SESSION["confirm_password_err"]="";
          }?>
   </div>
   <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
   <input type="checkbox" checked="checked"> Remember me
   <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

   <div class="clearfix">
     <button type="submit" class="signupbtn">Sign Up</button>
   </div>
 </div>
</form>

</body>
</html>
