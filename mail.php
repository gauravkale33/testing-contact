<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$to="gkale94@gmail.com ";
$subject= "mail from your site";
$txt ="Name=".$name."\r\n Email=".$email."Message=".$message;
$headers="From: noreply@gkitsolution.com"."CC: gauravkale33@gmail.com";
if(mail!=NULL){
    mail($to,$subject,$txt,$headers);
}   
header(alert("Thank You"));
?>