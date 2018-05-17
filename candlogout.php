<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: candindex.php"); // Redirecting To Home Page
}
?>
