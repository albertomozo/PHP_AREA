<?php 
$to = 'albertomozodocente@gmail.com';
$subject = 'asunto correo';
$message = 'cuerpo correo';
$additional_headers = '';

mail($to,$subject,$message,$additional_headers);

