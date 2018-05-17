<?php

session_start(); 

$error=''; 

if (isset($_POST['submit'])) {

if (empty($_POST['email']) || empty($_POST['pswd'])) {

$error = "Username or Password is invalid";

}

else

{

$email=$_POST['email'];

$pswd=$_POST['pswd'];

$connection = mysql_connect("localhost", "root", "");

$email = stripslashes($email);

$pswd = stripslashes($pswd);

$email= mysql_real_escape_string($email);

$pswd = mysql_real_escape_string($pswd);

$db = mysql_select_db("sngdb", $connection);

$query = mysql_query("select * from admin where pswd='$pswd' AND email='$email'", $connection);

$rows = mysql_num_rows($query);
if ($rows == 1) {

$_SESSION['login_user']=$email;
header("location: quizselect.php"); // Redirecting To Other Page

} else {

$error = "Username or Password is invalid";
echo $error;

}

mysql_close($connection); // Closing Connection

}

}

?>
