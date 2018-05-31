<?php
session_start();

/*if (!$_SESSION['Usuario']) {
	header("Location: login.php");
}*/

?>


<html>



<title> MODIFICAR EN TABLA USUARIOS </title>
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
$Nivel=$_SESSION['nivel'];
$Identificador=$_SESSION['Usuario'];

 
$consulta="update $tablaUsuarios set nombre='$Nombre',apellidos='$Apellido',correo='$Correo',usuario='$Usuario', password='$Clave', telefono='$Telefono', nivel='$Nivel' where usuario='$Identificador'";



if(mysqli_query($conexion,$consulta)){

echo "<script>window.open('perfil.php','_self')</script>";

}

else 
{
echo "No se actualizó el registro en la tabla $tablaUsuarios <br>".mysqli_error($conexion);
//echo "<script>window.open('actualizarEstudiantes.php','_self')</script>";
}

?>

</body>
</html>
