<?php

// Establishing Connection with Server by passing server_name, user_id and password as a parameter

$connection = mysql_connect("localhost", "root", "");

// Selecting Database

$connect = mysql_select_db("sngdb", $connection);

session_start();// Starting Session

// Storing Session

$user_check=$_SESSION['login_user'];

$user_check1=$_SESSION['login_user1'];

$user_check2=$_SESSION['login_user2'];

$user_check3=$_SESSION['login_user3'];

$user_check4=$_SESSION['login_user4'];

$user_check5=$_SESSION['login_user5'];

$user_check6=$_SESSION['login_user6'];

$user_check7=$_SESSION['login_user7'];

$user_check8=$_SESSION['login_user8'];
$user_check9=$_SESSION['login_user9'];
$user_check10=$_SESSION['login_user10'];
$user_check11=$_SESSION['login_user11'];
$user_check12=$_SESSION['login_user12'];
$user_check13=$_SESSION['login_user13'];
$user_check14=$_SESSION['login_user14'];
// SQL Query To Fetch Complete Information Of User

$ses_sql=mysql_query("select email,canname,mobno,univ,colname,poy,course,spl,skills,strongin,cgpa,projno,yoe,refname,refno from candidate where email='$user_check'", $connection);

$row = mysql_fetch_assoc($ses_sql);

$login_session =$row['email'];

$login_session1 =$row['canname'];

$login_session2 =$row['mobno'];

$login_session3 =$row['univ'];

$login_session4 =$row['colname'];

$login_session5 =$row['poy'];

$login_session6 =$row['course'];

$login_session7 =$row['spl'];

$login_session8 =$row['skills'];
$login_session9 =$row['yoe'];
$login_session10 =$row['refname'];
$login_session11 =$row['refno'];
$login_session12 =$row['strongin'];
$login_session13 =$row['cgpa'];
$login_session14 =$row['projno'];
if(!isset($login_session) && (!isset($login_session1)) && (!isset($login_session2)) && (!isset($login_session3)) && (!isset($login_session4)) && 

(!isset($login_session5)) && (!isset($login_session6)) && (!isset($login_session7)) && (!isset($login_session8)) && (!isset($login_session9)) && (!isset($login_session10)) && (!isset($login_session11)) && (!isset($login_session12)) && (!isset($login_session13)) && (!isset($login_session14))){

mysql_close($connection); // Closing Connection

header('Location: candindex.php'); // Redirecting To Home Page

}

?>
