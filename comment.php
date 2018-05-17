<?php
require 'PHPMailer/PHPMailerAutoload.php';
//include 'searchfresher.php';
$name=$_POST['name'];
$email=$_POST['email'];
$comments=$_POST['comments'];
$mail = new PHPMailer;

$check1=0;

    


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
$mail->addReplyTo($email, $name);
$mail->addAddress('varsha2904@gmail.com');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = 'Email from <b>'.$name.'</b>';
$bodyContent .= '<br><b>Email ID:</b> '.$email;
$bodyContent .= '<br><b>Comments:</b> '.$comments;
$mail->Subject = 'COMMENTS';
$mail->Body    = $bodyContent;
$check=$mail->send();
if(!$check) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
    $check1=0;}
else{ $check1=1;}
if($check1==1){
?>
<script>
  alert('Mail Sent Successfully');
        window.location.href='home.php?success';
        </script> 
<?php }
else {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
?>
<script>
  alert('Mail Not Sent');
        window.location.href='home.php?success';
       </script>
<?php 
}?>
