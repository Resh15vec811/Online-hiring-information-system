<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: adminindex.php"); // Redirecting To Home Page
}
?>
