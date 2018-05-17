<html>
<head>
</head>
<body>
<?php include 'db.php';?>
<?php
session_start();
//$choose=$_POST['choose'];
$em=$_SESSION['login_user'];
$sql="SELECT score from candidate where email='".$em."'";
$query = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($query);
$score=$row['score'];
//$rows = mysql_num_rows($query);
 if($score>0)
 {
?>
        <script>
            window.location.href='candprofile.php?success';
            window.alert("Cannot take test");
        </script>
<?php
 }
 if($score==0)
 {
  ?>
  <script>
        window.location.href='quizindex.php';
        </script>
<?php
 }
?>
</body>
</html>
