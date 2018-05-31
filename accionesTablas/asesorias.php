<?php
/*session_start();

if (!$_SESSION['Usuario']) {
	header("Location: login.php");
}*/
?>

<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/estiloTablas.css">

<title> TABLA ASESORIAS </title>
</head>
</head>
<body background="16.jpg"> 
<?php	
require("config.php");

$conexion=mysqli_connect($Servidor,$User,$Psw,$bd);



$sql = "Select*from $tablaAsesorias";
$result = mysqli_query($conexion,$sql);

//border = "10" width= "50%"
?>

<h1>ASESORIAS RESERVADAS </h1>
<style>
body{
              background: url(16.jpg) no-repeat center center fixed;
             -webkit-background-size: cover;
             -moz-background-size: cover;
             -o-background-size: cover;
             background-size: cover;
             margin:0;
             font-family: sans-serif;

            }



table {
   width: 70%;
   border: 1px solid #222;
   margin: 0 auto;
}
th, td {
   width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #222;
   border-collapse: collapse;
   padding: 0.5em;
   caption-side: bottom;
}
h1 {
   padding: 0.3em;
   color: #fff;
    background: #000;
    text-align: center;
}
th {
   background-color: #17b871;
   text-align:center;
}
</style>

	<table >
	<tr>
	      <th> Id Materia </th>
		    <th> Nombre de la Materia </th>
			  <th> Dia </th>
				<th> Profesor </th>
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
</table>

</body>

<footer>
<a href="../menuTablas.php"><img style="position:absolute; bottom:0;" src="15.png"  width="80" alt="IR ATRAS"></a>
</footer>
</html>
