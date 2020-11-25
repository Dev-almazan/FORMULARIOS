<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

    header('Content-Type: application/json');
    require("includes/class.phpmailer.php");
    $mail = new PHPMailer(); 
    $mail->From     = "ealmazan@gempresarialpm.mx";
      // Correo Electronico para SMTP 
    $mail->FromName = $nombre; 
    $mail->AddAddress("ealmazan@gempresarialpm.mx");
  // Dirección a la que llegaran los mensajes

// Aquí van los datos que apareceran en el correo que reciba

    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Nuevo Mensaje";
    $mail->Body     =  "Este mensaje proviene del sitio Web\n<br />".
    "Nombre: $nombre \n<br />".    
    "Apellidos: $apellidos \n<br />".   
    "Email: $correo \n<br />".
    "Telefono: $telefono \n<br />".
    "Mensaje: $mensaje \n<br />";

// Datos del servidor SMTP

    $mail->IsSMTP(); 
    $mail->Host = "localhost";  // mail. o solo dominio - Servidor de Salida. (recomiendo sin mail.)
    $mail->SMTPAuth = true; 
    $mail->Username = "ealmazan@gempresarialpm.mx";  // Correo Electrónico para SMTP correo@dominio.tld
    $mail->Password = "*WEB2020*WEB2020"; // Contraseña para SMTP

    if ($mail->Send()){
            print json_encode(array('message' => 'El mensaje ha sido enviado, agradecemos su preferencia', 'code' => 1));
            exit();
   
    }



?>