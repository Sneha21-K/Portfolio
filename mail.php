<?php
//get data from form  
$Name = $_POST['Name'];
$Email= $_POST['Email'];
$Message= $_POST['Message'];
$to = "snehakamthekar2227@gmail.com";
$subject = "Mail From Portfolio";
$txt ="Name = ". $Name . "\r\n  Email = " . $Email . "\r\n Message =" . $Message;
$headers = "From: noreply@https://sneha21-k.github.io/Portfolio/" . "\r\n" .
"CC: somebodyelse@example.com";
if($Email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank.html");
?>