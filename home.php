<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
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
@media screen and (max-width: 750px) {
    .col-sm-4 {
        text-align: center;
        margin: 25px 0;
    }
}


.logo {
    color: #000000;
    font-size: 200px;
}
.jumbotron { 
    
    color: #000000;
    padding: 50px 0px;
    background-image: url("3.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment:fixed;
   
    
}
.container-fluid {
    padding: 60px 0px;
}

.alignright {
	float: right;
}
.bgimg{
    
    background-color:#ebedef;
}


.imageclass {
	 float:left;
	 width:200px;
	 height:20px;
}


</style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
       
    <div class="navbar-header">
      <p class="imageclass"><img src="sng.jpg" class="img-rounded"  height="60" width="60" alt="Cinque Terre"></p>
      <p style="float:left;width:300px;height:50px;" class="navbar-brand">Light the light in you</p>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
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

<div class="container-fluid">
<div class="jumbotron text-justify">

 <div class="row">
 <div class="col-sm-7">
</div>
    <div class="col-sm-4">
    
      <h2>ABOUT US</h2>
      <h4>seeknget.com</h4> 
      <p>Welcome to SEEKNGET.com. Our site provides facility to search for various jobs as per your qualification. You can register yourself on the web portal and create your profile along with your educational information.Be the first to apply to your dream job in your desired location.</p>
     
    </div>
    
</div>

<br><br><br><br><br>
    <div class="container-fluid">
  
 <div class="row">
<div class="col-sm-12">
      
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="tcs.jpg" alt="TCS" style="width:100%;">
        <div class="carousel-caption">
          <h3>TCS</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="infosys.jpg" alt="INFOSYS" style="width:100%;">
        <div class="carousel-caption">
          <h3>INFOSYS</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="hcl.jpg" alt="HCL" style="width:100%;">
        <div class="carousel-caption">
          <h3>HCL</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
        
        <div class="item">
        <img src="cts.jpg" alt="CTS" style="width:100%;">
        <div class="carousel-caption">
          <h3>CTS</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
     
           <div class="item">
        <img src="zoho.jpg" alt="zOHO" style="width:100%;">
        <div class="carousel-caption">
          <h3>ZOHO</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
     
          <div class="item">
        <img src="paypal.jpg" alt="PAYPAL" style="width:100%;">
        <div class="carousel-caption">
          <h3>PAYPAL</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

</div>
  <br><br><br><br><br>
 <div class="container-fluid">
  <div class="row bgimg">
    <h2 class="text-center">CONTACT</h2>
    <div class="col-sm-5">
        
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chennai, India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 1234567890</p>
      <p><span class="glyphicon glyphicon-envelope"></span> sng@gmail.com</p> 
    </div>
  <form class="form" method="post" action="comment.php">
    <div class="col-sm-7">
      <div class="row">
        
        <div class="col-sm-6 form-group">
          <input class="form-control" onkeyup="javascript:this.value=this.value.charAt(0).toUpperCase()+ this.value.substr(1);"id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" onkeyup="javascript:this.value=this.value.charAt(0).toUpperCase()+ this.value.substr(1);" placeholder="Comment" rows="5" required></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
</form>

  </div>
</div>
</div>


</body>
</html>
