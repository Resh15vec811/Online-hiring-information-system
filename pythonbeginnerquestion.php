<?php include 'db.php'; 
session_start();
$em=$_SESSION['login_user'];?>
<!--<?php include 'quizsessionf.php' ?>-->


<?php
if(!isset($_SESSION['score'])){
         $_SESSION['score']=0;
   }
	$sql = "SELECT count(question_number) FROM pythonbeginnerquestions";
    $max = mysqli_query($connect, $sql);
$random = rand(1,10);
	
	$number= (int) $_GET['n']; 

$query="SELECT * FROM pythonbeginnerquestions";

    $results=mysqli_query($connect,$query) or die(mysqli_error($connect));
   $total=$results->num_rows;



$query="SELECT * FROM pythonbeginnerquestions 
                  WHERE question_number= $random";

$result=mysqli_query($connect,$query) or die(mysqli_error($connect));


$question=$result->fetch_assoc();


$query="SELECT * FROM pythonbeginnerchoices 
           WHERE question_number=$random";

$choices=mysqli_query($connect,$query) or die(mysqli_error($connect));


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



.title {
  color: black;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 12px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
.jumbotron { 
    
    color: #000000;
    padding: 50px 0px;
}
.imageclass {
	 float:left;
	 width:100px;
	 height:20px;
}
</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
     
      <p class="imageclass"><img src="sng.jpg" class="img-rounded"  height="60" width="60" alt="Cinque Terre"></p>
      <p style="float:left;width:300px;height:50px;" class="navbar-brand">Light the light in you</p>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="candprofile.php">Your Profile</a></li>
        <li class="active"><a href="#">Take Online test</a></li>
        <li><a href="candlogout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron text-justify">
	<title>Quizzer</title>
	<link rel="stylesheet" href="style.css" type="text/css" />

<script type="text/javascript">
function countDown(secs,elem){
     var element=document.getElementById(elem);
      element.innerHTML=" "+"Time Left"+" "+secs+" "+" seconds:";

  if(secs < 1){
       clearTimeout(timer);
         window.location="pythonbeginnerfinal.php";
        }

 secs--;

 
  
     var timer=setTimeout('countDown('+secs+',"'+elem+'")',1000);
}
</script>
</div>
<div id="status"></div>
<script type="text/javascript">countDown(10,"status");</script>


	</head>
	<body>
	<header>
	<div class="container">
	<h1>PYTHON BEGINNER QUIZ</h1>
	</div>
	</header>
	<main>
	<div class="container">
	<div class="current">Question <?php echo $number; ?> of <?php echo $total; ?></div>
	<p class="question">
	<?php echo $question['text']; ?>
		</p>
		<form method="post" action="pythonbeginnerprocess.php">
		<ul class="choices">
            
         <?php while($row=$choices->fetch_assoc()): ?>
               
		<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li>
                      
                <?php endwhile; ?>
				</ul>
				<button type="submit" class="btn btn-default">Submit</button>
                                <input type="hidden" name="number" value="<?php echo $number; ?>" />				</form>
				</main>

				</body>
				</html>
