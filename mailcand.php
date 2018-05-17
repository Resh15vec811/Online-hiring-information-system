<?php
require 'PHPMailer/PHPMailerAutoload.php';
//include 'searchfresher.php';
include 'db.php';
session_start();
$user_check=$_SESSION['strong'];
$user_check1=$_SESSION['cgpa'];
$user_check2=$_SESSION['projno'];
$score=$_SESSION['score'];
$yoe=$_SESSION['yoe'];
$cname=$_POST['cname'];
$time=$_POST['time'];
$date=$_POST['date'];
$venue=$_POST['venue'];
$cno=$_POST['cno'];
$pname=$_POST['pname'];
$body=$_POST['body'];
$addr=$_POST['addr'];
$mail = new PHPMailer;
if(isset($_FILES['resume']))
{
      $errors= array();
      $file_name = $_FILES['resume']['name'];
      //$file_size = $_FILES['resume']['size'];
      $file_tmp = $_FILES['resume']['tmp_name'];
      $file_type = $_FILES['resume']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['resume']['name'])));
      $expensions= "pdf";
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a PDF file.";
      }
      if(empty($errors)==true) {
         move_uploaded_file($_FILES["resume"]["tmp_name"],"./uploads/" . $_FILES["resume"]["name"]);
         echo "Success";
      }else{
         print_r($errors);
      }$filepath = "./uploads/";
$mail->addAttachment($filepath,$file_name);}
$sql="SELECT email FROM candidate where strongin='".$user_check."' and cgpa>='".$user_check1."' and projno>='".$user_check2."' and score>='".$score."' and yoe='".$yoe."'";
$check1=0;
$result_set=mysqli_query($connect,$sql);
 if (!$result_set) { // add this check.
    die('Invalid query: ' . mysql_error());
}
    while ($row=mysqli_fetch_array($result_set)) {

        // Then you will set your variables for the e-mail using the data 
        // from the array.

        $to = $row['email']; // The column where your e-mail was stored.
        //mail($to, $subject, $msg, $from);
    


$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'varsha2904@gmail.com';          // SMTP username
$mail->Password = '8BP4CR2RT'; // SMTP password

$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$mail->setFrom('varsha2904@gmail.com', 'SNG');
$mail->addReplyTo('varsha2904@gmail.com', 'SNG');
$mail->addAddress($to);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = 'Email from '.$cname;
$bodyContent .= '<br><br>'.$body;
$bodyContent .= '<br><br>Address: '.$addr.'<br>'.$venue.'<br>Time: '.$time.'<br>Date: '.$date.'<br>Contact Person: '.$pname.'<br>Contact No: '.$cno;
$mail->Subject = 'Email from SNG';
$mail->Body    = $bodyContent;
$check=$mail->send();
if(!$check) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
    $check1=0;}
else{ $check1=1;}}
if($check1==1){
?>
<script>
  alert('Mail Sent Successfully');
        window.location.href='criteria.php?success';
        </script> 
<?php }
else {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
?>
<script>
  alert('Mail Not Sent');
        window.location.href='searchcand.php?success';
       </script>
<?php 
}?>
