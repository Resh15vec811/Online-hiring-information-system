<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: compindex.php"); // Redirecting To Home Page
}
?>
