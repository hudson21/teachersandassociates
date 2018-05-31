<html>
<title> CERRAR SESIÓN </title>
</head>
</head>
<body>
<?php	
session_start();
session_destroy();
header("Location: index.html")

?>

</body>
</html>
