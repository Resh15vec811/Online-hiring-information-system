<?php include 'db.php'; ?>
<?php
    if(isset($_POST['submit']))
{
     $query="SELECT * FROM pythonbeginnerquestions";

    $results=mysqli_query($connect,$query) or die(mysqli_error($connect));
   $total=$results->num_rows;
     $question_number=$total+1;
     $question_text=$_POST['question_text'];

   $correct_choice=$_POST['correct_choice'];
     
     $choices=array();
     $choices[1]=$_POST['choice1'];
     $choices[2]=$_POST['choice2']; 
     $choices[3]=$_POST['choice3'];  
     $choices[4]=$_POST['choice4']; 

    $query="INSERT INTO pythonbeginnerquestions(question_number,text) VALUES('$question_number','$question_text')";

    $insert_row=mysqli_query($connect,$query) or die(mysqli_error($connect));


    if($insert_row){
         foreach($choices as $choice => $value){
      if($value!=''){
       if($correct_choice==$choice){
             $is_correct=1;
           }         
          else{
             $is_correct=0;

}
$query="INSERT INTO pythonbeginnerchoices(question_number,is_correct,text)VALUES('$question_number','$is_correct','$value')";


      $insert_row=mysqli_query($connect,$query) or die(mysqli_error($connect));

      if($insert_row){
         continue;
     }
       else{
            die('ERROR | ('.mysqli_errno . ')'. mysqli_error($connect));
}
}
}
  $msg="Question has been added";
}
}
?>

<!doctype html>
<html>
<head>

<meta charset="utf-8"/>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.navbar {
    margin-bottom: 0;
    background-color: #000000;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
    color: #fff !important;
    background-color: #000000;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
    color: #000000 !important;
    background-color: #fff !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}
@media screen and (max-width: 750px) {
    .col-sm-4 {
        text-align: center;
        margin: 25px 0;
    }
}
.bg-grey{
 background-color:#000000;
}

.logo {
    color: #000000;
    font-size: 200px;
}
.jumbotron { 
    
    color: #000000;
    padding: 50px 0px;
}
.container-fluid {
    padding: 40px 50px;
}

.alignright {
	float: right;
}
.imageclass {
	 float:left;
	 width:200px;
	 height:20px;
}
</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      
      <p class="imageclass"><img src="sng.jpg" class="img-rounded"  height="60" width="60" alt="Cinque Terre"></p>
      <p style="float:left;width:300px;height:50px;"class="navbar-brand">  Light the light in you</p>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="quizselect.php">Back</a></li>
     
      </ul>
    </div>
  </div>
</nav>
  <header>
   
   <link rel="stylesheet" href="style.css" type="text/css" />
   </header>
<main>
   <div class="container-fluid">
<div class="jumbotron text-justify">
<h2>PYTHON BEGINNER</h2><br>
   <h2>Add a Question</h2>

   <?php
       if(isset($msg)){
   ?>
        <script>
          window.alert("Question added");
          window.location.href='add.php?success';
        </script>

<?php
 }
?>
<form action="add.php" method="post">
    

  <p>
      <label>Question Text:</label>
     <input type="text" name="question_text" required/>
</p>
<p>
      <label>Choice 1:</label> 
     <input type="text" name="choice1" required/>
</p>
<p>
      <label>Choice 2:</label> 
     <input type="text" name="choice2" required/>
</p>
<p>
      <label>Choice 3:</label> 
     <input type="text" name="choice3" required/>
</p>
<p>
      <label>Choice 4:</label> 
     <input type="text" name="choice4" required/>
</p>
<p>
      <label>Correct Choice Number:</label> 
     <input type="number" min="1" max="4" name="correct_choice" required/>
</p>
<p> <input type="submit" name="submit" value="Submit"/></p>
</form>
</div>
   </div>
</main>


</body>
</html>
