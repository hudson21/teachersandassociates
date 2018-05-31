<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />

    

    <link rel="stylesheet" type="text/css" href="css/estiloReservar.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link rel="stylesheet" href="css/zerogrid.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/lightbox.css">
  
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  

  <link rel="stylesheet" href="css/menu.css">
  <script src="js/jquery1111.min.js" type="text/javascript"></script>
  <script src="js/script.js"></script>
  

	<title>MODIFICAR DATOS DE USUARIO</title>

	
	<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 


	<style>
           
            *{
	           margin:0;
	           padding:0;
             }

         body{
	           font-family: 'Arial', sans-serif;
	           margin:0;
	           padding:0;
	       	   background: url(black.jpg) no-repeat center center fixed;
               -webkit-background-size: cover;
               -moz-background-size: cover;
               -o-background-size: cover;
               background-size: cover;
	         }
           
           form{
           	margin: 0 auto;
           }

	     #contenedor{
	     	width:30%;
	     	margin:0 auto;
	     	background-color:#2c2c2c;
	     	padding: 30px;
	     	position:center;
	     }

	     #contenedor h1{
	     	font-size:20px;

	     }

	     #contenedor #form{
	     	margin-top:20px;

	     }

	     #form p{
	     	
	     	margin-top:8px;
	     	color:white;
	     }

	     .materia .profesor .turno{
	     	margin-top:2px;
	     	width:100%;
	     	padding-left:5px;
	     	padding-right:5px;
	     	height: 35px;
	     }

	     button[type="submit"]{
	     	width:75px;
	     	height:30px;
	     	color:#fff;
        margin-top:15px;
	     	background:#144c83;
	     	background: linear-gradient(#144c83, #23399A);
	     	border:0;
	     }

	     button[type="submit"]:hover{
	     	
	     	background: linear-gradient(#de4e1c,#f04104);
	     	color:#e7e7e7;
	     	}

        input{
             width:60%;
             height:50%;
             text-align:center;
             

        }
         /*media queries para el responsive*/
        }

       /*Pantallas tablets*/
         @media only screen and (min-width: 701px) and (max-width:980px){
         	#contenedor{
                   width: 60px;
                   margin: 0 auto;
         	}

         }

         /*Pantallas tablets*/
         @media only screen and (min-width: 480px) and (max-width:700px){
         	#contenedor{
                   width: 80px;
                   margin: 0 auto;
         	}

         }




	</style>

  <div class="header">
      <div id='cssmenu' >
        <ul>
           <li class="last"><a href="index.html"><span>INICIO</span></a></li>
           <li class="last"><a href="archive.html"><span>GALERÍA</span></a></li>
           <li class="last"><a href="single.html"><span>SOBRE NOSOTROS</span></a></li>
           <li class="active"><a href="login1.php"><span> MIEMBROS</span></a>
                <ul>
                      <li class="last"><a href="cerrarSesion.php"><span> CERRAR SESION</span></a></li>
                      <li class="active"><a href="perfil.php"><span> PERFIL</span></a></li>
                </ul>
           </li>
           <li class="last"><a href="app/reportes/reporte_pdf.php"><span> ASESORÍAS DISPONIBLES</span></a></li>
           <li class="last"><a href="reservacion.html"><span>RESERVACIÓN DE ASESORÍAS</span></a></li>
           <li class="last"><a href="contact.html"><span>CONTÁCTANOS</span></a></li>
           <li class="last"><a href="menuTablas.php"><span>REGISTROS</span></a></li>
        </ul>
      </div>
    </div>

</head>


<body>

<?php

session_start();

require("config.php");

$Nivel=$_SESSION['nivel'];
$Identificador=$_SESSION['Usuario'];
$id=$_SESSION['id'];


if(!$_SESSION['Usuario']){
  header("Location: login1.php");
}

$conexion=mysqli_connect($Servidor,$User,$Psw,$bd);

$sql = "Select * from $tablaUsuarios where numero='$id' ";

if($result = mysqli_query($conexion,$sql))
    {
       
         //$row = mysqli_fetch_array($result);  
         //  var_dump($row);

while($row = mysqli_fetch_array($result))
{
     //echo "La conexion se ha realizado correctamente";
      $var7=$row[1];
      //echo "$row[1]";


      echo "
<div id='contenedor'>
      <header>
            <h1 style='margin-top:8px; color:white;' >MODIFICAR DATOS DE USUARIO</h1>
      </header>


      <div id='form'>
      <center>

      <form action ='modificarUsuarios.php' method='post' class='form-register' onsubmit='return validar();'>
		         
	                 <p>Nombre </p>
	                 <input style='background-color:white;' type='text' name='nombre' value='$row[1]'  required>
                   <br>

                   <p>Apellido del Usuario</p>
                   <input style='background-color:white;' type='text' name='apellidos'  value='$row[2]' required>
                   <br>

                   <p>Correo</p>
                   <input style='background-color:white;' type='text' name='correo'  value='$row[3]' required>
                   <br>

                   <p>Nombre de usuario</p>
                   <input style='background-color:white;' type='text' name='usuario'  value='$row[4]' required>
                   <br>

                   <p>Contraseña</p>
                   <input style='background-color:white;' type='password' name='clave'  value='$row[5]' required>
                   <br>

                   <p>Teléfono</p>
                   <input style='background-color:white;' type='text' name='telefono'  value='$row[6]' required>
                   <br>

                     <button type='submit' name='enviar'>Modificar</button>
                         
              </form>
        </center>
     </div>  
</div>";
}

}

?>
</body>
</html>
