<?php

session_start(); // Starting Session

$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

if (empty($_POST['emailc']) || empty($_POST['pwd'])) {

$error = "Username or Password is invalid";

}

else

{

// Define $username and $password

$emailc=$_POST['emailc'];

$pwd=$_POST['pwd'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter

$connection = mysql_connect("localhost", "root", "");

// To protect MySQL injection for Security purpose

$emailc = stripslashes($emailc);

$pwd = stripslashes($pwd);

$emailc= mysql_real_escape_string($emailc);

$pwd = mysql_real_escape_string($pwd);

// Selecting Database

$db = mysql_select_db("sngdb", $connection);

// SQL query to fetch information of registerd users and finds user match.

$query = mysql_query("select * from company where pwd='$pwd' AND emailc='$emailc'", $connection);

$rows = mysql_num_rows($query);
$row = mysql_fetch_assoc($query);
if ($rows == 1) {

$_SESSION['login_user']=$emailc;

$_SESSION['login_user1']=$compname;

$_SESSION['login_user2']=$mob;

$_SESSION['login_user3']=$contpers;

$_SESSION['login_user4']=$oaddr;

$_SESSION['login_user5']=$desg;

$_SESSION['login_user6']=$country;

$_SESSION['login_user7']=$choose;
// Initializing Session

header("location: compprofile.php"); // Redirecting To Other Page

} else {

$error = "Username or Password is invalid";

}

mysql_close($connection); // Closing Connection

}

}

?>
