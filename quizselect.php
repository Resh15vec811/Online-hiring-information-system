
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
      <p style="float:left;width:300px;height:50px;" class="navbar-brand">  Light the light in you</p>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="adminlogout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron tetx-justify">
<br><br>
<br><font face="Georgia" size="5px"><center><b><i>ADD QUESTIONS</b></i></font></center><br><br>
<center><font face="Georgia" size="4px"><i>Choose Domain</i></font></center>
<div class="buttonrightup">
<b id="logout"><?php echo "<br><font face=Georgia size=4px align=center></font>"?>
</div>
<form action="quizconnection.php" method="post" enctype= multipart/form-data>
  <center><br><table>
         <tr><td><font face="Georgia" size="4px"> <input type="radio" name="choose" value="javabeginner">Java Beginner</font></input></td></tr>
          <tr><td><font face="Georgia" size="4px"><input type="radio" name="choose" value="javaintermediate">Java Intermediate</font></input></td></tr>
         <tr><td><font face="Georgia" size="4px"><input type="radio" name="choose" value="javaadvanced">Java Advanced </font></input></td></tr>
         <tr><td> <font face="Georgia" size="4px"><input type="radio" name="choose" value="phpbeginner">PHP Beginner</font></input></td></tr>
         <tr><td> <font face="Georgia" size="4px"><input type="radio" name="choose" value="phpintermediate">PHP Intermediate</font></input></td></tr>
         <tr><td> <font face="Georgia" size="4px"><input type="radio" name="choose" value="phpadvanced">PHP Advanced</font></input></td></tr>
         <tr><td> <font face="Georgia" size="4px"><input type="radio" name="choose" value="pythonbeginner">Python Beginner</font></input></td></tr>
          <tr><td><font face="Georgia" size="4px"><input type="radio" name="choose" value="puthonintermediate">Python Intermediate</font></input></td></tr>
          <tr><td><font face="Georgia" size="4px"><input type="radio" name="choose" value="pythonadvanced">Python Advanced</font></input></td></tr>
   </table><br>
          <input type="submit" name="submit" value="Submit"></input></center>
</form>
     </div>

 
</body>
</html>
