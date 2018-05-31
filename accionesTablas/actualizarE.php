<?php
session_start();

/*if (!$_SESSION['Usuario']) {
	header("Location: login.php");
}*/

?>


<html>



<title> ACTUALIZAR EN TABLA ESTUDIANES </title>
</head>
</head>
<body>

<?php	

require("config.php");

$conexion=mysqli_connect($Servidor,$User,$Psw,$bd);


$Id=$_POST["id_estudiante"];
$Nombre=$_POST["nombre"];
$Apellido=$_POST["apellido"];
$Categoria=$_POST["categoria"];
$Semestre=$_POST["semestre"];
$Turno=$_POST["turno"];
 

$consulta="update $tablaEstudiantes set nombre1='$Nombre',apellido1='$Apellido',categoria='$Categoria',semestre='$Semestre', turno='$Turno' where id_estudiante='$Id'";

if(mysqli_query($conexion,$consulta)){

echo "<script>window.open('actualizarEstudiantes.php','_self')</script>";

}

else 
{
echo "No se actualizó el registro en la tabla $tablaEstudiantes <br>".mysqli_error($conexion);
//echo "<script>window.open('actualizarEstudiantes.php','_self')</script>";
}
echo "<BR><bR>";

?>

</body>
</html>
