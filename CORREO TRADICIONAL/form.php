<?php

if(isset($_POST['Correo'])) 
{

$email_to = "ernest_almazan@outlook.com";
$email_subject = "Este mensaje proviene del sitio web";

$email_message = "Formulario:\n\n";
$email_message .= "Nombre:" . $_POST['Nombre'] . "\n";
$email_message .= "Apellido:" . $_POST['Apellidos'] . "\n";
$email_message .= "Correo:". $_POST['Correo'] . "\n";      
$email_message .= "Telefono:" . $_POST['Telefono'] . "\n";
$email_message .= "Mensaje: " . $_POST['Mensaje'] . "\n\n";


// Se envía el e-mail usando la función mail() de PHP
$headers = 'From: '. $_POST['Correo'] ."\r\n".
    'Reply-To: '. $_POST['Correo'] ."\r\n".
    'X-Mailer: PHP/' . phpversion();
mail ($email_to, $email_subject, $email_message, $headers);

echo ("<script>
                alert('Muchas gracias por contactarnos en breve nos pondremos en contacto ');
                window.location= 'http://ernestosite.online/'
    </script>");
}

else {
    echo ("<script>
                alert('Nos se envio mensaje');
    </script>");
}
?>

