<?php
session_start();

/*if (!$_SESSION['Usuario']) {
	header("Location: login.php");
}*/

?>


<html>



<title> ACTUALIZAR EN TABLA MAESTROS </title>
</head>
</head>
<body>

<?php	

require("config.php");

$conexion=mysqli_connect($Servidor,$User,$Psw,$bd);


$Id=$_POST["id_maestros"];
$Nombre=$_POST["nombre"];
$Apellido=$_POST["apellido"];
$Categoria=$_POST["categoria"];
$Dias=$_POST["dias"];
$Horas=$_POST["horas"];
$Asignatura=$_POST["asignatura"];

 

$consulta="update $tablaMaestros set nombre1='$Nombre',apellido1='$Apellido',categoria='$Categoria',dias='$Dias', horas='$Horas', asignatura='$Asignatura' where id_maestro='$Id'";

if(mysqli_query($conexion,$consulta)){

echo "<script>window.open('actualizarMaestros.php','_self')</script>";

}

else 
{
echo "No se actualizó el registro en la tabla $tablaMaestros <br>".mysqli_error($conexion);
//echo "<script>window.open('actualizarEstudiantes.php','_self')</script>";
}
echo "<BR><bR>";

?>

</body>
</html>
