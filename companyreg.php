<!DOCTYPE html>
<html lang="en">
<head>
  <title>Company Registration</title>
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
      <p class="imageclass"><img style="float:left;" src="sng.jpg" class="img-rounded"  height="55" width="55" alt="Cinque Terre"></p>
      <p style="float:left;width:300px;height:50px;" class="navbar-brand">Light the light in you</p>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">Home</a></li>
        <li class="active"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
        <ul class="dropdown-menu">
            <li><a href="candidatereg.php">Candidate</a></li>
            <li><a href="companyreg.php">Company</a></li>
          </ul>
       </li>
        <li><a class="dropdown-toggle" data-toggle="dropdown"href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
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
  <h2>Company Registration</h2>
  <form class="form-horizontal" method="post" action="connectioncomp.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="emailc">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="emailc" placeholder="Enter email" name="emailc" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="compname">Company Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="compname" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Enter company name" name="compname" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contpers">Contact Person Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="contpers" onkeyup="javascript:this.value=this.value.charAt(0).toUpperCase()+ this.value.substr(1);"  placeholder="Enter name" name="contpers" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="mob">Mobile Number:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="mob" placeholder="Enter mobile number" name="mob" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="oaddr">Office Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="oaddr" onkeyup="javascript:this.value=this.value.charAt(0).toUpperCase()+ this.value.substr(1);" placeholder="Enter office address" name="oaddr" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="desg">Designation:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="desg" onkeyup="javascript:this.value=this.value.charAt(0).toUpperCase()+ this.value.substr(1);" placeholder="Enter designation" name="desg" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="country">Country:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="country" onkeyup="javascript:this.value=this.value.charAt(0).toUpperCase()+ this.value.substr(1);" placeholder="Enter country" name="country" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="choose">Type:</label>
      <div class="col-sm-10">          
        <div class="radio">
  <label><input type="radio" name="choose">Company</label>
</div>
       <div class="radio">
  <label><input type="radio" name="choose">Consultant</label>
</div>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>

