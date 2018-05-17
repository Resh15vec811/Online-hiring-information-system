<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mail Content</title>
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
        <li><a href="compprofile.php">Your Profile</a></li>
        <li class="active"><a href="criteria.php">Search</a></li>
        <li><a href="complogout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container"><br><br><br>
  <h2>Mail Content</h2>
  <form class="form-horizontal" method="post" enctype="multipart/form-data" action="mailcand.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="cname">Company Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="cname" onkeyup="javascript:this.value=this.value.toUpperCase();"  placeholder="Enter company name" name="cname" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="addr">Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="addr" onkeyup="javascript:this.value=this.value.toUpperCase();"  placeholder="Enter company address" name="addr" required>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="venue">Google Maps Location:</label>
      <div class="col-sm-10">          
        <input type="url" class="form-control" id="venue" placeholder="Enter google maps url of company address" name="venue" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="time">Time:</label>
      <div class="col-sm-10">          
        <input type="time" class="form-control" id="time" name="time" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="time">Date:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="date" name="date" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="cno">Contact Number:</label>
      <div class="col-sm-10">          
        <input type="tel" class="form-control" id="cno" placeholder="Enter contact number" name="cno" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pname">Person Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pname" onkeyup="javascript:this.value=this.value.charAt(0).toUpperCase()+ this.value.substr(1);" placeholder="Enter person name" name="pname" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="body">Mail Body:</label>
      <div class="col-sm-10">  
         <textarea class="form-control" rows="5" onkeyup="javascript:this.value=this.value.charAt(0).toUpperCase()+ this.value.substr(1);" placeholder="Enter mail body" id="body" name="body" required></textarea>        
        
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

