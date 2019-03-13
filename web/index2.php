<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include("PHPMailermaster/src/PHPMailer.php");
include("PHPMailermaster/src/SMTP.php");
include("PHPMailermaster/src/Exception.php");

$mail = new PHPMailer(true); // create a new object
try {
//$mail->SMTPDebug = 1;
$mail->isSMTP();
$mail->Host = 'mail02.valuelabs.com';  // Specify main and backup SMTP servers
$mail->SMTPSecure = 'https';
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $_POST['user'];                 // SMTP username
$mail->Password = $_POST['pass'];
$mail->Port =  587;     
$mail->setFrom($_POST['user'],$_POST['user']);
$mail->addAddress($_POST['to']);     // Add a recipient 
 //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Testcase Document ';
    $mail->Body    = 'Hi,<br/><br/>Above attached file comprises of the TESTCASES for the respective month<br/>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->AddAttachment('sample/'.$_POST['file'].'.xlsx');
	$mail->AddCC($_POST['cc']);
    $mail->send();
	 echo "<script type='text/javascript'>alert(\"Message has been sent\");
window.location='index.php';
</script>";
   }
	//echo "<script type='text/javascript'>alert(\"Message has been sent\");</script>";

 catch (Exception $e) {
	 $message=$mail->ErrorInfo;
   	echo "<script type='text/javascript'>alert('$message');window.location='index1.php';</script>";
	//header("location:index.php");

}
//	header("location:index.php");
?>