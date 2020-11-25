<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>form</title> 

</head>

<body>
<?php

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];    
$Correo = $_POST['Correo'];
$Mensaje = $_POST['opcion'];
$Telefono = $_POST['Telefono'];




    require("includes/class.phpmailer.php");
    $mail = new PHPMailer(); 
    $mail->From     = "webmaster@midominio.com";
      // Correo Electronico para SMTP del dominio de tu empresa
    $mail->FromName = $Nombre; 
    $mail->AddAddress("contacto@midominio.com");
  // Dirección a la que llegaran los mensajes

// Aquí van los datos que apareceran en el correo que reciba

    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Este mensaje proviene del sitio web";
    $mail->Body     =  "Formulario Cliente :\n<br />".
    "Nombre: $Nombre \n<br />".
    "Apellido:$Apellido\n<br />".
    "Email: $Correo \n<br />".
    "Telefono: $Telefono \n<br />".
    "Mensaje: $Mensaje \n<br />".
        
// Datos del servidor SMTP

    $mail->IsSMTP(); 
    $mail->Host = "localhost";  // mail. o solo dominio - Servidor de Salida. (recomiendo sin mail.)
    $mail->SMTPAuth = true; 
    $mail->Username = "webmaster@midominio.com";  // Correo Electrónico para SMTP correo@dominio.tld
    $mail->Password = "*WEB2020*WEB2020"; // Contraseña para SMTP
    $mail->CharSet = 'UTF-8';
    if ($mail->Send())// validamos si el servidor envio el mail
    {
    echo "<script>
                alert('Mensaje enviado');
                window.location= 'https://midominio.com/';
    </script>";
   

}
    else
    {
        
    echo "<script>
                alert('Mensaje no enviado');
               
    </script>";
   

}

?>
</body>
</html>
