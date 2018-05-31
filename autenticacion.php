<html>
<title> Verificacion </title>
</head>
</head>
<body>
</html>
<?php
session_start();

?>

<?php

require("config.php");

$conexion=mysqli_connect($Servidor,$User,$Psw,$bd);


if(isset($_POST['login'])){
	$us_ario = $_POST['Usuario'];
	$Pass_word = $_POST['Password'];

if($us_ario!='' && $Pass_word!=''){
	$sql="select*From usuarios where usuario='$us_ario'";
    $query=mysqli_query($conexion,$sql);
	
	$row=mysqli_fetch_array($query);
	$id=$row[0];
	$numero = mysqli_num_rows($query);
	
	if ($numero>0){
		if ($row['password']==$Pass_word){
	  		if($row['nivel']==1){
			
            $_SESSION['Usuario']=$us_ario;
            $_SESSION['nivel']=1;
            $_SESSION['id']=$id;

				
				
				echo "<script>window.open('index.html','_self')</script>";
				mysqli_free_result($query);
			} 

	    else if($row['nivel']==2){
				
				$_SESSION['Usuario']=$us_ario;
				$_SESSION['nivel']=2;
				$_SESSION['id']=$id;
				
				mysqli_free_result($query);
				echo "<script>window.open('index.html','_self')</script>";
				
			}

	    else if($row['nivel']==3){
				$_SESSION['Usuario']=$us_ario;
				$_SESSION['nivel']=3;
				$_SESSION['id']=$id;
				
				mysqli_free_result($query);
				echo "<script>window.open('index.html','_self')</script>";
				
			}
		}else {
			echo "Password Incorrecto";
		}
	}else { echo "Usuario no existe";
	}
	
	}else {
		echo "Complete todos los campos";
	}
	
	}

?>