<?php 
$to = 'albertomozodocente@gmail.com';
$subject = 'asunto correo';
$message = 'cuerpo correo';
$additional_headers = 'From: webmaster@example.com' . "\r\n" .
'Reply-To: webmaster@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

if (mail($to,$subject,$message,$additional_headers))
{
    echo "<p>Mensaje Ok a $to";
} else {
    echo "<P>Error</p>";
}


