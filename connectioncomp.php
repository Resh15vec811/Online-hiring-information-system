<html>
<head>
</head>
<body>
<?php include 'db.php';?>
<?php
 
 $emailc=$_POST['emailc'];
$compname=$_POST['compname'];
 $pwd=$_POST['pwd'];
 $mob=$_POST['mob'];
 $contpers=$_POST['contpers'];
$oaddr=$_POST['oaddr'];
$desg=$_POST['desg'];
$choose=$_POST['choose'];
$country=$_POST['country'];
 mysqli_query($connect,"INSERT INTO company(emailc,compname,pwd,mob,contpers,oaddr,desg,choose,country)VALUES('$emailc','$compname','$pwd','$mob','$contpers','$oaddr','$desg','$choose','$country')");
 if(mysqli_affected_rows($connect)>0)
 {
   echo "<p>Form added</p>";
  
?>
<script>
  alert('Successfully Uploaded');
        window.location.href='compindex.php?success';
        </script>
<?php
 }
 else 
 {
  echo "Form not added <br />";
  echo mysqli_error($connect);

  ?>
  <script>
  alert('Error while uploading file');
        window.location.href='companyreg.php?fail';
        </script>
<?php
 }
?>
</body>
</html>
