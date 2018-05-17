<?php session_start();
$em=$_SESSION['login_user'];
include 'db.php';
 ?>
 <?php
 /*$query="SELECT strongin,yoe FROM candidate where email='$em'";

    $results=mysqli_query($connect,$query) or die(mysqli_error($connect));
   $total=$results->num_rows;*/
$query = mysqli_query($connect,"select strongin,yoe from candidate where email='$em'" );

$rows = $query->num_rows;

if ($rows == 1) 
{

$row = mysqli_fetch_assoc($query);
$yoe =$row['yoe'];
$strongin =$row['strongin'];
$strongin=strtolower($strongin);

 if($strongin=='java' && $yoe==0)
header("location: javabeginnerindex.php"); // Redirecting To Other Page
 if($strongin=='java' && (($yoe==1)||($yoe==2)))
header("location: javainterindex.php");
 if($strongin=='java' && $yoe>2)
header("location: javaadvanceindex.php");


 if($strongin=='php' && $yoe==0)
header("location: phpbeginnerindex.php");
 if($strongin=='php' && (($yoe==1)||($yoe==2)))
header("location: phpinterindex.php");
 if($strongin=='php' && $yoe>2)
header("location: phpadvanceindex.php");


 if($strongin=='python' && $yoe==0)
header("location: pythonbeginnerindex.php");
 if($strongin=='python' && (($yoe==1)||($yoe==2)))
header("location: pythoninterindex.php");
 if($strongin=='python' && $yoe>2)
header("location: pythonadvanceindex.php");
} ?>
