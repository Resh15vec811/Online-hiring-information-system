<?php session_start();
$em=$_SESSION['login_user'];?>
<?php include 'db.php' ?>
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
        <li class="active"><a href="candprofile.php">Your Profile</a></li>
        <li class="active"><a href="#">Take Online test</a></li>
        <li><a href="candlogout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<title>Quizzer</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<center>
  <header>
   <div class="container">
    <h1>PYTHON INTERMEDIATE QUIZ</h1>
    </div>
   </header>
<main>
   <div class="container">
   <h2> You are done!</h2>
   <p> Congrats!! You have completed the test</p>
    <p>Final score: <?php $score=$_SESSION['score'];echo $_SESSION['score']; $query="UPDATE candidate SET score='".$score."' WHERE email='".$em."'";

    $result=mysqli_query($connect,$query) or die(mysqli_error($connect));
$_SESSION['score']=0; ?></p>
  

</div>
</main>

</center>
</body>
</html>
