<?php

include('logincand.php'); // Includes Login Script



if(isset($_SESSION['login_user'])){

header("location: candprofile.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Candidate Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.modal-header, h4, .close {
      background-color: #000000;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #000000;
  }

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
.imageclass {
	 float:left;
	 width:200px;
	 height:20px;
}

    
}
.container-fluid {
    padding: 60px 60px;
}
</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <p class="imageclass"><img style="float:left;" src="sng.jpg" class="img-rounded"  height="55" width="55" alt="Cinque Terre"></p>
      <p style="float:left;width:300px;height:50px;" class="navbar-brand">Light the light in you</p>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">Home</a></li>
        <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
        <ul class="dropdown-menu">
            <li><a href="candidatereg.php">Candidate</a></li>
            <li><a href="companyreg.php">Company</a></li>
          </ul>
       </li>
        <li class="active"><a class="dropdown-toggle" data-toggle="dropdown"href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
        <ul class="dropdown-menu">
            <li><a href="candindex.php">Candidate</a></li>
            <li><a href="compindex.php">Company</a></li>
            <li><a href="adminindex.php">Admin</a></li>
          </ul>
       </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container"><br><br><br>

  <h2>Candidate Login</h2>
  <form class="form-horizontal" method="post" action="logincand.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pswd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" id="pswd" placeholder="Enter password" name="pswd" required>
      </div>
    </div>
   <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>



