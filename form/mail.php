<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader ="From:" .$name."<".$email.">/r/n";

$recipient = "oduoralex3@gmail.com";

mail($recipient,$subject,$message,$mailheader)
or die("Error!");

echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Contact form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
        <h1>Thank you for contacting me .I will get back to you soon as possible!</h1>
        <p class="back">Go back to the <a href="index.html">home page.</a></p>
    </div>
  </body>
</html>
';
?>
