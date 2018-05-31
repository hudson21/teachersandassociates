<?php
session_start();


/*if (!$_SESSION['Usuario']) {
	header("Location: login.php");
}*/

?>


<html>
<title> INSERTAR EN TABLA USUARIOS </title>
</head>
</head>
<body>

<?php	

require("config.php");

$conexion=mysqli_connect($Servidor,$User,$Psw,$bd);


$Nombre=$_POST["nombre"];
$Apellido=$_POST["apellidos"];
$Correo=$_POST["correo"];
$Usuario=$_POST["usuario"];
$Clave=$_POST["clave"];
$Telefono=$_POST["telefono"];
$Nivel=3;



$consulta="Insert into $tablaUsuarios values (' ','$Nombre','$Apellido','$Correo','$Usuario','$Clave','$Telefono','$Nivel')";

if(mysqli_query($conexion,$consulta)){

echo "<script>window.open('notificacionRegistro.php','_self')</script>";

}



else 
{
echo "No Se insertaron registros en la tabla $tablaUsuarios <br>".mysqli_error($conexion);
//echo "<script>window.open('insertarMaestros.php','_self')</script>";
}
echo "<BR><bR>";

?>

</body>
</html>
