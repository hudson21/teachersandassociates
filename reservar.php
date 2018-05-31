<?php
session_start();

/*if (!$_SESSION['Usuario']) {
	header("Location: login.php");
}*/

?>


<html>
<title> INSERTAR EN TABLA ASESORIAS </title>
</head>
</head>
<body>

<?php	

require("config.php");

$conexion=mysqli_connect($Servidor,$User,$Psw,$bd);


$Materia=$_POST["materia"];
$Date=$_POST["date"];
$Profesor=$_POST["profesor"];
$Turno=$_POST["turno"];


$consulta="Insert into $tablaAsesorias values (' ','$Materia','$Date','$Profesor','$Turno')";

if(mysqli_query($conexion,$consulta)){

echo "<script>window.open('index.html','_self')</script>";

}

else 
{
echo "No Se insertaron registros en la tabla $tablaMaestros <br>".mysqli_error($conexion);
echo "<script>window.open('reservacion.html','_self')</script>";
}
echo "<BR><bR>";

?>

</body>
</html>
