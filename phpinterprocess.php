<?php include 'db.php'; ?>
<?php 
session_start();
$em=$_SESSION['login_user'];?>
<?php
      if(!isset($_SESSION['score'])){
         $_SESSION['score']=0;
   }

   if($_POST){
      $number=$_POST['number'];
      $selected_choice=$_POST['choice'];
$next=$number+1;


   $query="SELECT * FROM phpinterquestions";

    $results=mysqli_query($connect,$query) or die(mysqli_error($connect));
   $total=$results->num_rows;

   $query="SELECT * FROM phpinterchoices WHERE question_number=$number AND is_correct=1";
  $result=mysqli_query($connect,$query) or die(mysqli_error($connect));
    $row=$result->fetch_assoc();
$correct_choice=$row['id'];
  if($correct_choice==$selected_choice){

$_SESSION['score']++;
}

   if($number==$total){
       header("Location:phpinterfinal.php");    
      exit();
}

else{
   header("Location:phpinterquestion.php?n=".$next);
}
}


