
<?php

session_start();

require("config.php");


if(!$_SESSION['Usuario']){
  header("Location: login1.php");
}

 
?>
<!DOCTYPE>
<html lang="en">
<head>
        <title>MENU</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  
        <link rel="stylesheet" type="text/css" href="css/estilosMenuTabla.css">


  <style>

        body{
              background: url(2.jpg) no-repeat center center fixed;
             -webkit-background-size: cover;
             -moz-background-size: cover;
             -o-background-size: cover;
             background-size: cover;
            }
  </style>

</head>


<body background="2.jpg">


   <nav>
       	<ul>
   	       <li><a href="#">Tabla Maestros</a>
               <ul>
                  <?php
                        if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){
                               echo "<li><a href='accionesTablas/insertarMaestros.php'>Insertar</a></li>";
                                     }
                    if($_SESSION['nivel']==1 || $_SESSION['nivel']==2 || $_SESSION['nivel']==3 ){         
                               echo "<li><a href='accionesTablas/consultarMaestros.php'>Consultar</a></li>";
                            }
                    if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){  
                               echo "<li><a href='accionesTablas/eliminarMaestros.php'>Eliminar</a></li>";
                            }
                    if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){ 
                     echo "<li><a href='accionesTablas/actualizarMaestros.php'>Actualizar</a></li>";
                   }

                     ?>
               </ul>

           </li>
   	       <li><a href="#">Tabla Estudiantes</a>
                <ul>

                <?php

                        if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){
                                echo "<li><a href='accionesTablas/insertarEstudiantes.php'>Insertar</a></li>";
                              }
                        if($_SESSION['nivel']==1 || $_SESSION['nivel']==2 || $_SESSION['nivel']==3 ){         
                                echo "<li><a href='accionesTablas/consultarEstudiantes.php'>Consultar</a></li>";
                              }
                        if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){       
                                echo "<li><a href='accionesTablas/eliminarEstudiantes.php'>Eliminar</a></li>";
                              }
                        if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){ 
                                echo "<li><a href='accionesTablas/actualizarEstudiantes.php'>Actualizar</a></li>";
                              }
                 ?>    
               </ul>
           </li>

           <li><a href="#">Asesorías</a>
                 <ul>
                      <li><a href="accionesTablas/asesorias.php">Visualizar</a></li>
                 </ul>
           </li>
   	       

           <li><a href="#">Bitácora</a>
                 <ul>
                      <li><a href="accionesTablas/bitacoras.php">Visualizar</a></li>
                 </ul>
           </li>

           
           <li><a href="#">Menu Principal</a>
                <ul>
                      <li><a href="index.html">Ir</a></li>
                 </ul>
           </li>-->
        </ul>
    </nav>

</body>


<center><img style="position:center; margin-top:100px;" src="uniGif.gif"  width="450" alt="UNIVERSIDAD"></center>
</html>