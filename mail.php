<!DOCTYPE html>
 <body>
<?php
if (isset($_POST['submitted'])) {
     $myfile = fopen("data.txt", "a+");
    $name = $_POST['name']. "\n";
    fwrite($myfile, $name);
    
      $message = $_POST['message']. "\n";
    fwrite($myfile, $message);
    
      $title = $_POST['title']. "\n";
    fwrite($myfile, $title);

    $email = $_POST['email']. "\n";
    fwrite($myfile, $email);
    fclose($myfile);

	if(mail($toEmail, $tel, $message, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
}
?>
</body>
</html>
