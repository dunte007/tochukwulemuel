<!DOCTYPE html>
 <body>

<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$tel = $_POST["tel"];
	$message = $_POST["message"];

	$toEmail = "dunte007@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $tel, $message, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
 
?>
</body>
</html>
