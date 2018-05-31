<?php
session_start();

/*if (!$_SESSION['Usuario']) {
	header("Location: login.php");
}*/

?>


<html>
<title> CONSULTAR TABLA ESTUDIANTES </title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/estiloTablas.css">

</head>
</head>
<body background="10.jpg">

<?php	

require("config.php");

$conexion=mysqli_connect($Servidor,$User,$Psw,$bd);


$Id=$_POST["id_estudiante"];

$consulta="select * from $tablaEstudiantes where id_estudiante='$Id'"; 

$result = mysqli_query($conexion,$consulta);

?>

<h1>TABLA ESTUDIANTES </h1>
<style>
body{
              background: url(10.jpg) no-repeat center center fixed;
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
   background-color: skyblue;
   text-align:center;
}
</style>

	<table >
	<tr>
	      <th> Id_estudiante </th>
		    <th> Nombre </th>
			  <th> Apellido </th>
				<th> Categoria </th>
				  <th> Semestre </th>
				    <th> Turno </th>
				     
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

</body>
<footer>
<a href="../menuTablas.php"><img style="position:absolute; bottom:0;" src="15.png"  width="80" alt="IR ATRAS"></a>
</footer>
</html>
