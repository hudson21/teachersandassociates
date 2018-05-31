<!DOCTYPE html>
<html lang="es">
<head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
         <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet">  
         <link rel="stylesheet" type="text/css" href="css/estilosRegistro.css">

         <script src="js/validar.js"></script>
         <title>Registro Usuarios</title>

         <style>

        body{
              background: url(black.jpg) no-repeat center center fixed;
             -webkit-background-size: cover;
             -moz-background-size: cover;
             -o-background-size: cover;
             background-size: cover;
            }
         
        
        </style>	

</head>

<body >

     <h1>FORMULARIO DE REGISTRO</h1>
      <form action="registrar.php" method="post" class="form-register" 
      onsubmit="return validar();">
         <h2 class="form-titulo">CREA UNA CUENTA</h2>
           <div class="contenedor-inputs">
             <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="input-48" required>
             <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" class="input-48" required>
             <input type="email" id="correo" name="correo" placeholder="Correo" class="input-100" required>
             <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="input-48" required>
             <input type="password" id="clave" name="clave" placeholder="Contraseña" class="input-48" required>
             <input type="text" id="telefono" name="telefono" placeholder="Teléfono" class="input-100" required>
             <input type="submit" value="Registrarse" class="btn-enviar">

             <p class="form-link">¿Ya tienes una cuenta? <a href="login1.php">Ingresa Aquí</a></p>
            </div>
       </form>
       
    

</body>



</html>