
  <?php 

    
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="gemp";
    //conectamos la base de datos
	$conexion=mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
     //ingresamos las variables a enviar
    $nombre= $_POST["nombre"];
    $apellido= $_POST["apellido"]; 
    $correo= $_POST["correo"];
    $telefono= $_POST["telefono"];
     $mensaje= $_POST["mensaje"];
    
        //ejecutamos la funcion para que envie  la info de la bd
$consulta="insert into contacto values ('0','$nombre','$apellido','$correo','$telefono','$mensaje')";
	//realizamos la consulta para saber si se envio la info
	$resultado=mysqli_query($conexion,$consulta);    
      if($resultado){
        
    echo "<script>
   alert('Mensaje Guardado');
    </script>";
        
   
}
    else
        {
        
echo "<script>
       alert('No se guardo Mensaje');
    </script>";
            }       
?>
        
        
   