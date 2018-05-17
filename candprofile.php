<?php

include('sessioncand.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Candidate Profile</title>
  <meta charset="utf-8">
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
      <p style="float:left;width:300px;height:50px;" class="navbar-brand">Light the light in you</p>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="candprofile.php">Your Profile</a></li>
        <li><a href="quizcorrect.php">Take Online test</a></li>
        <li><a href="candlogout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>




<div class="container"><br><br><br>
  <h2 style="text-align:left">User Profile</h2>
  <img src="user.png" alt="User" style="width:25%">
   <?php echo "<h1>".$login_session1."</h1>";?>
 <p class="title"><span class="glyphicon glyphicon-education"></span> <?php echo $login_session6." ".$login_session7." at ".$login_session4.",".$login_session3."</p><p><b>CGPA:</b> ".$login_session13."</p><p><b>STRONG IN:</b> ".$login_session12."</p><p><b>SKILLS:</b> ".$login_session8."</p><p><b>NO.OF PROJECTS DONE:</b> ".$login_session14."</p><p><b>PASSED OUT YEAR:</b> ".$login_session5."</p><p><b>YEARS OF EXPERIENCE:</b> ".$login_session9."</p><p><b>REFERENCE PERSON'S NAME:</b> ".$login_session10."</p><p><b>REFERENCE PERSON'S NUMBER:</b> ".$login_session11;?>
<br><p><span class="glyphicon glyphicon-phone-alt"></span> <?php echo $login_session2;?></p><p><span class="glyphicon glyphicon-envelope"></span> <?php echo $login_session;?></p>
  

</div>

</body>
</html>

