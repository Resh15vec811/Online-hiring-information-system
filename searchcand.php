<?php
include 'db.php';
session_start();
$selection=$_POST['strongin'];
$_SESSION['strong']=$selection;
$selection1=$_POST['cgpa'];
$_SESSION['cgpa']=$selection1;
$selection2=$_POST['projno'];
$_SESSION['projno']=$selection2;
$selection3=$_POST['score'];
$_SESSION['score']=$selection3;
$selection4=$_POST['yoe'];
$_SESSION['yoe']=$selection4;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Filtered Candidates</title>
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
  <h2>Filtered Candidates</h2>                                                                                     
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>NAME</th>
        <th>UNIVERSITY</th>
        <th>COLLEGE NAME</th>
        <th>COURSE</th>
        <th>DEPARTMENT</th>
        <th>CGPA</th>
        <th>PASSED OUT YEAR</th>
        <th>YEARS OF EXPERIENCE</th>
        <th>SKILLS</th>
        <th>STRONG IN</th>
        <th>NO.OF PROJECTS DONE</th>
        <th>ONLINE TEST SCORE</th>
        <th>REFERENCE PERSON'S NAME</th>
        <th>REFERENCE PERSON'S NUMBER</th>
        <th>EMAIL ID</th>
        <th>MOBILE NO</th>
        <th>RESUME</th>
      </tr>
    </thead>
    <?php
 $sql="SELECT * FROM candidate where strongin='".$selection."' AND cgpa>=".$selection1." AND projno>=".$selection2." AND score>=".$selection3." AND yoe=".$selection4;
 $result_set=mysqli_query($connect,$sql);
 if (!$result_set) { // add this check.
    die('Invalid query: ' . mysql_error());
}
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
    <tbody>
      <tr>
        <td><?php echo $row['canname'] ?></td>
        <td><?php echo $row['univ'] ?></td>
        <td><?php echo $row['colname'] ?></td>
        <td><?php echo $row['course'] ?></td>
        <td><?php echo $row['spl'] ?></td>
        <td><?php echo $row['cgpa'] ?></td>
        <td><?php echo $row['poy'] ?></td>
        <td><?php $yoe=$row['yoe']; echo $row['yoe'] ?></td>
        <td><?php echo $row['skills'] ?></td>
        <td><?php $strongin=$row['strongin']; echo $row['strongin'] ?></td>
        <td><?php echo $row['projno'] ?></td>
        <?php
           if($strongin=='JAVA' && $yoe==0){?>
             <td>Java Beginner<?php echo $row['score'] ?><?php } ?></td>
        <?php if($strongin=='JAVA' && (($yoe==1) || ($yoe==2))){?>
             <td>Java Intermediate<?php echo $row['score'] ?><?php } ?></td>
        <?php if($strongin=='JAVA' && $yoe>2) {?>
             <td>Java Advanced<?php echo $row['score'] ?><?php } ?></td>
        <?php if($strongin=='PHP' && $yoe==0) {?>
             <td>PHP Beginner<?php echo $row['score'] ?><?php } ?></td>
        <?php if($strongin=='PHP' && (($yoe==1) || ($yoe==2))) {?>
             <td>PHP Intermediate<?php echo $row['score'] ?><?php } ?></td>
        <?php if($strongin=='PHP' && $yoe>2) {?>
             <td>PHP Advanced<?php echo $row['score'] ?><?php } ?></td>
        <?php if($strongin=='PYTHON' && $yoe==0) {?>
             <td>Python Beginner<?php echo $row['score'] ?><?php } ?></td>
        <?php if($strongin=='PYTHON' && (($yoe==1) || ($yoe==2))) { ?>
             <td>Python Intermediate<?php echo $row['score'] ?><?php } ?></td>
        <?php if($strongin=='PYTHON' && $yoe>2) {?>
             <td>Python Advanced<?php echo $row['score'] ?><?php } ?></td>
        <td><?php echo $row['refname'] ?></td>
        <td><?php echo $row['refno'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['mobno'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">View Resume</a></td>
      </tr>
    </tbody>
<?php
 }
 ?>
  </table><br><br>
   <center><a href="mailcontent.php">SEND MAIL</a></center>
  </div>
</div>
</body>
</html>
