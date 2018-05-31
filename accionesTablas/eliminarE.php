<?php
session_start();

/*if (!$_SESSION['Usuario']) {
	header("Location: login.php");
}*/

?>


<html>



<title> ELIMINAR EN TABLA ESTUDIANES </title>
</head>
</head>
<body>

<?php	

require("config.php");

$conexion=mysqli_connect($Servidor,$User,$Psw,$bd);


$Id=$_POST["id_estudiante"];



$consulta="delete from $tablaEstudiantes where id_estudiante='$Id'"; 

if(mysqli_query($conexion,$consulta)){

echo "<script>window.open('eliminarEstudiantes.php','_self')</script>";

}

else 
{
echo "No Se eliminó el registro en la tabla $tablaEstudiantes <br>".mysqli_error($conexion);
echo "<script>window.open('eliminarEstudiantes.php','_self')</script>";
}
echo "<BR><bR>";

?>

</body>
</html>
