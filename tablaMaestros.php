<?php
/*session_start();

if (!$_SESSION['Usuario']) {
	header("Location: login.php");
}*/
?>

<html>
<title> TABLA MAESTROS </title>
</head>
</head>
<body background="11.jpg"> 
<?php	
require("config.php");

$conexion=mysqli_connect($Servidor,$User,$Psw,$bd);



$sql = "Select*from $tablaMaestros";
$result = mysqli_query($conexion,$sql);

//border = "10" width= "50%"
?>

<h1>TABLA MAESTROS </h1>
<style>
body{
              background: url(11.jpg) no-repeat center center fixed;
             -webkit-background-size: cover;
             -moz-background-size: cover;
             -o-background-size: cover;
             background-size: cover;
             margin:0;
             font-family: sans-serif;

            }



table {
   width: 60%;
   border: 1px solid #222;
   margin: 0 auto;
}
th, td {
   width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #222;
   border-collapse: collapse;
   padding: 0.3em;
   caption-side: bottom;
}
h1 {
   padding: 0.3em;
   color: #fff;
    background: #000;
    text-align: center;
}
th {
   background-color: orange;
   text-align:center;
}
</style>

	<table >
	<tr>
	      <th> Id_maestro </th>
		    <th> Nombre </th>
			  <th> Apellido </th>
				<th> Categoria </th>
			  <th> Dias </th>
				<th> Horas </th>
        <th> Asignatura </th>
				     
     </tr>
<?php
if(!$result){
	
	echo "No hay tablas\n";
	echo "Mysql error :".mysqli_error($conexion);
	exit;
	
}
   
	while ($row = mysqli_fetch_row($result)){
echo "<tr>";
 for ($i=0 ; $i<count($row); $i++)
	 echo "<td>{$row[$i]}<br>";
 echo "</tr>";
	
	
	}


?>
</table>

<form action="insertar.php" method="POST" class="form-insertar">

    <h2 class="form-titulo">INSERTAR</h2>           
  <div class="contenedor-inputs">
  <input type="text" name="id_maestros" placeholder="id_maestros" class="input-48" required>
  <input type="text" name="nombre" placeholder="nombre" class="input-48" required><br>
  <input type="text" name="apellido" placeholder="apellido" class="input-48" required>
  <input type="text" name="categoria" placeholder="categoria" class="input-48" required><br>
  <input type="text" name="dias" placeholder="dias" class="input-48" required>
  <input type="text" name="horas" placeholder="horas" class="input-48" required><br>
  <input type="text" name="asignatura" placeholder="asignatura" class="input-100" required><br>
  <input type="submit" value="insertar"  >  <p></p>

  </div>       
  </form>


</body>
</html>
