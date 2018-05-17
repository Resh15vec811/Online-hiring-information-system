<?php

session_start(); // Starting Session

$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

if (empty($_POST['email']) || empty($_POST['pswd'])) {

$error = "Username or Password is invalid";

}

else

{

// Define $username and $password

$email=$_POST['email'];

$pswd=$_POST['pswd'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter

$connection = mysql_connect("localhost", "root", "");

// To protect MySQL injection for Security purpose

$email = stripslashes($email);

$pswd = stripslashes($pswd);

$email= mysql_real_escape_string($email);

$pswd = mysql_real_escape_string($pswd);

// Selecting Database

$db = mysql_select_db("sngdb", $connection);

// SQL query to fetch information of registerd users and finds user match.

$query = mysql_query("select * from candidate where pswd='$pswd' AND email='$email'", $connection);

$rows = mysql_num_rows($query);

if ($rows == 1) {

$_SESSION['login_user']=$email;

$_SESSION['login_user1']=$canname;

$_SESSION['login_user2']=$mobno;

$_SESSION['login_user3']=$univ;

$_SESSION['login_user4']=$colname;

$_SESSION['login_user5']=$poy;

$_SESSION['login_user6']=$course;

$_SESSION['login_user7']=$spl;

$_SESSION['login_user8']=$skills;
$_SESSION['login_user9']=$yoe;
$_SESSION['login_user10']=$refname;
$_SESSION['login_user11']=$refno;// Initializing Session
$_SESSION['login_user12']=$strongin;
$_SESSION['login_user13']=$cgpa;
$_SESSION['login_user14']=$projno;
header("location: candprofile.php"); // Redirecting To Other Page

} else {

$error = "Username or Password is invalid";

}

mysql_close($connection); // Closing Connection

}

}

?>
