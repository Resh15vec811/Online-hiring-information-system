<html>
<head>
</head>
<body>
<?php include 'db.php';?>
<?php

 $canname=$_POST['canname'];
 $email=$_POST['email'];

 $pswd=$_POST['pswd'];
 $mobno=$_POST['mobno'];
$univ=$_POST['univ'];
$colname=$_POST['colname'];
$poy=$_POST['poy'];
$yoe=$_POST['yoe'];
$refname=$_POST['refname'];
$refno=$_POST['refno'];
$course=$_POST['course'];
$spl=$_POST['spl'];
$skills=$_POST['skills'];
$strongin=$_POST['strongin'];
$cgpa=$_POST['cgpa'];
$projno=$_POST['projno'];
$file = rand(1000,100000)."-".$_FILES['resume']['name'];
    $file_loc = $_FILES['resume']['tmp_name'];
 $file_size = $_FILES['resume']['size'];
 $file_type = $_FILES['resume']['type'];
 $folder="uploads/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);

$skl="";
foreach($skills as $entry){
$skl .=$entry.",";
}
if(move_uploaded_file($file_loc,$folder.$final_file))
 {
 $in_ch=mysqli_query($connect,"INSERT INTO candidate(canname,email,pswd,mobno,univ,colname,poy,yoe,refname,refno,course,spl,skills,strongin,cgpa,projno,file,type,size)VALUES('$canname','$email','$pswd','$mobno','$univ','$colname','$poy','$yoe','$refname','$refno','$course','$spl','$skl','$strongin','$cgpa','$projno','$final_file','$file_type','$new_size')");
?>
 <script>
  alert('Successfully Uploaded');
        window.location.href='candindex.php?success';
        </script>
  
  <?php
 }
 else
 {
  ?>
  <script>
  alert('Error while uploading file');
        window.location.href='candidatereg.php?fail';
        </script>
<?php
 }
 if(mysqli_affected_rows($connect)>0)
 {
   echo "<p>Form added</p>";
   
 }
 else 
 {
  echo "Form not added <br />";
  echo mysqli_error($connect);
 }

?>
</body>
</html>
