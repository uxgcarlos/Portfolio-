<?php

if (isset($_POST[ 'btn'])) {
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "nitasosweeta@yahoo.com";
$headers = "From: ".$mailFrom;
$txt = " You have recieved an e-mail from ".$mailForm.".\n\n".$message;

mail($mailTo, $subject, $txt); 
header ("Location: contact.html?mailsend");


}