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



// SQL Query To Fetch Complete Information Of User

$ses_sql=mysql_query("select emailc,compname,mob,contpers,oaddr,desg,country,choose from company where emailc='$user_check'", $connection);

$row = mysql_fetch_assoc($ses_sql);

$login_session =$row['emailc'];

$login_session1 =$row['compname'];

$login_session2 =$row['mob'];

$login_session3 =$row['contpers'];

$login_session4 =$row['oaddr'];

$login_session5 =$row['desg'];

$login_session6 =$row['country'];

$login_session7 =$row['choose'];



if(!isset($login_session) && (!isset($login_session1)) && (!isset($login_session2)) && (!isset($login_session3)) && (!isset($login_session4)) && 

(!isset($login_session5)) && (!isset($login_session6)) && (!isset($login_session7))){

mysql_close($connection); // Closing Connection

header('Location: compindex.php'); // Redirecting To Home Page

}

?>
