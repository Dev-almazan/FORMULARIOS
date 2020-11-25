<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
header('Content-Type: application/json');

$content="Para: $name \ Correo: $email \ Telefono: $subject\ Mensaje: $message";
$recipient = "ealmazan@gempresarialpm.mx";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
print json_encode(array('message' => 'El mensaje ha sido enviado, agradecemos su preferencia', 'code' => 1));
exit();
?>