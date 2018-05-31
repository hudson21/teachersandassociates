<?php
session_start();

/*if (!$_SESSION['Usuario']) {
	header("Location: login.php");
}*/

?>


<html>
<title> INSERTAR EN TABLA MAESTROS </title>
</head>
</head>
<body>

<?php	

require("config.php");

$conexion=mysqli_connect($Servidor,$User,$Psw,$bd);


$Nombre=$_POST["nombre"];
$Apellido=$_POST["apellido"];
$Categoria=$_POST["categoria"];
$Semestre=$_POST["semestre"];
$Turno=$_POST["turno"];


$consulta="Insert into $tablaEstudiantes values (' ','$Nombre','$Apellido','$Categoria','$Semestre','$Turno')";

if(mysqli_query($conexion,$consulta)){

echo "Se insertaron registros en la $tablaEstudiantes<br>";

echo "<script>window.open('insertarEstudiantes.php','_self')</script>";

}

else 
{
echo "No Se insertaron registros en la tabla $tablaMaestros <br>".mysqli_error($conexion);
echo "<script>window.open('insertarEstudiantes.php','_self')</script>";
}
echo "<BR><bR>";

?>

</body>
</html>
