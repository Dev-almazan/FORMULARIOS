<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Formulario</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
</head>

<body>
    <div class="container">




    

            <!--Section heading-->
            <h2 class="section-heading h1 pt-4">FORMULARIO DE CONTACTO</h2>

           

   <form class="form" method="post" action="mail.php"  style="display:grid;" id="contact-form" name="contact-form" onsubmit="envio()">
  
   
<label for="last_name">Nombre</label>
<input name="nombre" type="text"  id="nombre" onclick="apellido()" required title="Por favor ingrese nombre sin acentos-Máximo 20 caracteres." pattern="[a-z-A-Z- ]{3,20}"  class="form-control">

<label for="last_name">Apellidos</label>
 <input name="apellidos" type="text"  id="apellidos" pattern="[a-z-A-Z- ]{3,30}" onclick="apellido()" title="Por favor ingrese apellidos sin acentos-Máximo 30 caracteres." required class="form-control">
      
<label for="email">Correo eléctronico</label>
 <input name="correo" id="correo"  type="email" required title="Por favor ingrese direccion de correo electronico" class="form-control">
      
<label for="telephone">Télefono</label>
 <input name="telefono" id="telefono" type="text"  / required title="Por favor ingrese número de teléfono a 10 dígitos." pattern="[0-9]{1,10}" class="form-control">
      
<label for="importe">Mensaje</label>
 <input name="mensaje"  id="mensaje" type="text"   required  title="Favor de ingresar mesaje" class="form-control"  pattern="[a-z-A-Z- ]{3,60}" onclick="apellido()">
      
<button type="submit" class="btn btn-primary"  align="center">ENVIAR</button>
</form>


                    
            <div class="status alert alert-warning alert-dismissible fade show" role="alert" id="status">
            </div>
    </div>
    
       <script>

function envio() {

    document.getElementById('status').innerHTML = "Enviando Mensaje...";
    formData = {
        'nombre'     : $('input[name=nombre]').val(),
        'apellidos'    : $('input[name=apellidos]').val(),
        'correo'  : $('input[name=correo]').val(),
        'telefono'  : $('textarea[name=telefono]').val(),
        'mensaje'  : $('textarea[name=mensaje]').val()
    };


   $.ajax({
    url : "mail.php",
    type: "POST",
    data : formData,
    success: function(data, textStatus, jqXHR)
    {

        $('#status').text(data.message);
        if (data.code) //If mail was sent successfully, reset the form.
        $('#contact-form').closest('form').find("input[type=text], textarea").val("");
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        $('#status').text(jqXHR);
    }
});



}
    </script>
</body>

</html>