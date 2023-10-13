<?php 
$to = 'albertomozodocente@gmail.com';
$subject = 'asunto correo';
$message = 'cuerpo correo';
$additional_headers = 'From: webmaster@example.com' . "\r\n" .
'Reply-To: webmaster@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to,$subject,$message,$additional_headers);


