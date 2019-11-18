<?php
// Initialize the session
session_start();
$username = $_SESSION['username'];
$usertype = $_SESSION['usertype'];

  if($usertype =='admin'){
   header("location: mainpage.php");
 }

 echo "Hello <b>" . $username . "</b>. You are using this site as " . $usertype."<br>";

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


?>
 <!DOCTYPE html>
<html>
<head>
<title>Employee Home Page</title>
</head>
<body>
<a href="logout.php"> LOGOUT </a> <br>
<a href="reset_password.php"> RESET PASSWORD </a> <br>


</body>
</html> 



