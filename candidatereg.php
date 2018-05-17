<!DOCTYPE html>
<html lang="en">
<head>
  <title>Candidate Registration</title>
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
      <p class="imageclass"><img src="sng.jpg" class="img-rounded"  height="60" width="60" alt="Cinque Terre"></p>
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
  <h2>Candidate Registration</h2>
  <form class="form-horizontal" method="post" enctype="multipart/form-data" action="connectioncand.php">
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
      <label class="control-label col-sm-2" for="canname">Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="canname" onkeyup="javascript:this.value=this.value.charAt(0).toUpperCase()+ this.value.substr(1);"  placeholder="Enter name" name="canname" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="mobno">Mobile Number:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="mobno" placeholder="Enter mobile number" name="mobno" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="univ">University:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="univ" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Enter university" name="univ" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="colname">College Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="colname" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Enter college name" name="colname" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="course">Course:</label>
      <div class="col-sm-10">
         <select class="form-control" id="course" name="course" required>
             <option>B.E</option>
             <option>B.Tech</option>
         </select>
      </div>
     </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="spl">Specialization:</label>
      <div class="col-sm-10">
         <select class="form-control" id="spl" name="spl" required>
             <option>CSE</option>
             <option>IT</option>
             <option>EEE</option>
             <option>ECE</option>
             <option>E&I</option>
             <option>CIVIL</option>
             <option>MECHANICAL</option>
             <option>AUTOMOBILE</option>
             <option>CHEMICAL</option>
         </select>
      </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="poy">Passed Out Year:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="poy" placeholder="Enter passed out year" name="poy" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="yoe">Years of Experience:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="yoe" placeholder="Enter years of experience" name="yoe" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="refname">Reference Person's Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="refname" onkeyup="javascript:this.value=this.value.charAt(0).toUpperCase()+ this.value.substr(1);" placeholder="Enter reference person's name" name="refname" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="refno">Reference Person's Number:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="refno" placeholder="Enter reference person's number" name="refno" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="strongin">Strong In:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="strongin" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Enter the field in which you are strong" name="strongin" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="cgpa">CGPA:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="cgpa" placeholder="Enter cgpa" name="cgpa" required>
      </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-2" for="projno">No.of Projects Done:</label>
        <div class="col-sm-10">          
           <input type="number" class="form-control" id="projno" placeholder="Enter the number of projects done" name="projno" required>
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="skills[]">Skills:</label>
        <div class="col-sm-10">
         <div class="checkbox">
             <label><input type="checkbox" name="skills[]" value="Javascript, Jquery">Javascript, Jquery</label>
         </div>
         <div class="checkbox">
             <label><input type="checkbox" name="skills[]" value="PHP and MVC framework">PHP and MVC framework</label>
         </div>
         <div class="checkbox">
             <label><input type="checkbox" name="skills[]" value="CSS3, HTML5, Bootstrap">CSS3, HTML5, Bootstrap</label>
         </div>
         <div class="checkbox">
             <label><input type="checkbox" name="skills[]" value="Cloud, SDN and Network Virtualization">Cloud, SDN and Network Virtualization</label>
         </div>
         <div class="checkbox">
             <label><input type="checkbox" name="skills[]" value="OpenDaylight and OpenStack">OpenDaylight and OpenStack</label>
         </div>
         <div class="checkbox">
             <label><input type="checkbox" name="skills[]" value="Verilog,System Verilog ,Perl and Python">Verilog,System Verilog ,Perl and Python</label>
         </div>
         <div class="checkbox">
             <label><input type="checkbox" name="skills[]" value="MongoDB">MongoDB</label>
         </div>
         <div class="checkbox">
             <label><input type="checkbox" name="skills[]" value="Azure and AWS">Azure and AWS</label>
         </div>
         <div class="checkbox">
             <label><input type="checkbox" name="skills[]" value="C# and .NET">C# and .NET</label>
         </div>
         <div class="checkbox">
             <label><input type="checkbox" name="skills[]" value="Pair Programming">Pair Programming</label>
         </div>
         <div class="checkbox">
             <label><input type="checkbox" name="skills[]" value="Big Data Analytics and Visualization Techniques">Big Data Analytics and Visualization Techniques</label>
         </div>
      </div>
     </div>
     <div class="form-group">
        <label class="control-label col-sm-2" for="resume">Upload Resume:</label>
        <div class="col-sm-10">
    <input type="file" class="form-control-file" id="resume" name="resume" aria-describedby="fileHelp" required>

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

