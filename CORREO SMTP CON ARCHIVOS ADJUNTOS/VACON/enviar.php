<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Formulario</title> <!-- Aquí va el título de la página -->

</head>

<body>
<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];    
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];    
$direccion = $_POST['direccion'];
$ocupacion = $_POST['ocupacion'];
$salario = $_POST['salario'];
$importe = $_POST['importe'];    
$opcion = $_POST['opcion'];     
$ine = $_FILES['ine'];
$ingresos = $_FILES['ingresos'];
$compdo = $_FILES['compdo'];    



    require("includes/class.phpmailer.php");
    $mail = new PHPMailer(); 
    $mail->From     = "prueba@vaconsultor.com.mx";
      // Correo Electronico para SMTP 
    $mail->FromName = $Nombre; 
    $mail->AddAddress("ealmazan@gempresarialpm.mx");
  // Dirección a la que llegaran los mensajes

// Aquí van los datos que apareceran en el correo que reciba

    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Solicitud de Credito-Micrositio Web";
    $mail->Body     =  "Formulario Cliente-Vaconsultores:\n<br />".
    "Nombre: $nombre \n<br />".
    "Apellido:$apellido \n<br />".
    "Email: $correo \n<br />".
    "Telefono: $telefono \n<br />".
     "Cliente de liberate: $mensaje \n<br />".    
     "Direccion: $direccion \n<br />".    
     "Puesto: $ocupacion \n<br />".     
     "Ingreso Mensual: $salario \n<br />".
     "Importe de credito a solicitar: $importe \n<br />".  
        $mail->AddAttachment($ine['tmp_name'], $ine['name']);  
      $mail->AddAttachment($ingresos['tmp_name'], $ingresos['name']);  
      $mail->AddAttachment($compdo['tmp_name'], $compdo['name']);  
      
        
// Datos del servidor SMTP

    $mail->IsSMTP(); 
    $mail->Host = "localhost";  // mail. o solo dominio - Servidor de Salida. (recomiendo sin mail.)
    $mail->SMTPAuth = true; 
    $mail->Username = "prueba@vaconsultor.com.mx";  // Correo Electrónico para SMTP correo@dominio.tld
    $mail->Password = "*WEB2020*WEB2020"; // Contraseña para SMTP
    $mail->CharSet = 'UTF-8';    
    if ($mail->Send()){
    echo "<script>
                window.location= 'https://www.vaconsultor.com.mx/';
    </script>";
   

}

?>
</body>
</html>
