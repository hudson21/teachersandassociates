<?php
session_start();

/*if (!$_SESSION['Usuario']) {
	header("Location: login.php");
}*/

?>


<html>
<title> ELIMINAR EN TABLA MAESTROS </title>
</head>
</head>
<body>

<?php	

require("config.php");

$conexion=mysqli_connect($Servidor,$User,$Psw,$bd);


$Id=$_POST["id"];



$consulta="delete from $tablaMaestros where id_maestro='$Id'"; 

if(mysqli_query($conexion,$consulta)){

echo "<script>window.open('eliminarMaestros.php','_self')</script>";

}

else 
{
echo "No Se eliminó el registro en la tabla $tablaMaestros <br>".mysqli_error($conexion);
echo "<script>window.open('eliminarMaestros.php','_self')</script>";
}
echo "<BR><bR>";

?>

</body>
</html>
