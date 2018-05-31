<?php
session_start();

?>

<!doctype html>
<html lang="en">
<dead>
         <meta charset="UTF-8">
         <title>Dark Form</title>
         <link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type="text/css">

         <style type="text/css">
         *{
         	margin:0px;
         	padding:0px;

         }
         body{
         	background: url(9.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
         }

         form{
                background:#8B4513;
                width:360px;
                border:1px solid #4e4d4d;
                border-radius:3px;
                -moz-border-radius:3px;
                -webkit-border-radius:3px;
                box-shadow:inset 0 0 10px #000;
                margin: 100px auto;

         }

         a{
          text-decoration:none;
         }

         form h1{
                text-align:center;
                color:#fff;
                font-weight:normal;
                font-size:40pt;
                margin: 30px 0px;
                font-family: 'Pinyon Script', cursive;

                
            }

          form input{
                  width:280px;
                  height:35px;
                  padding:0px 10px;
                  margin:10px 30px;
                  color:#6d6d6d;
                  text-align:center;

          }

          form button{

          	       width:135px;
          	       margin:20px 0px 30px 30px;
          	       height:50px;

          	       background: #502500;

background: -moz-linear-gradient(top, #502500 0%, #6e2a00 50%, #642800 51%, #9a3800 100%);

background: -webkit-linear-gradient(top, #502500 0%,#6e2a00 50%,#642800 51%,#9a3800 100%);

background: linear-gradient(to bottom, #502500 0%,#6e2a00 50%,#642800 51%,#9a3800 100%);

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#502500', endColorstr='#9a3800',GradientType=0 );
            border:1px solid #232323;
            color:#fff;
            box-shadow:0px 2px 0px #000;
            -moz-box-shadow:0px 2px 0px #000;
            -webkit-box-shadow:0px 2px 0px #000;
            border-radius:3px;
            -moz-border-radius:3px;
            -webkit-border-radius:3px;
          }

          form button:hover{
             background: #3a1b00;

background: -moz-linear-gradient(top, #3a1b00 0%, #521f00 50%, #4a1e00 51%, #722a00 100%);

background: -webkit-linear-gradient(top, #3a1b00 0%,#521f00 50%,#4a1e00 51%,#722a00 100%);

background: linear-gradient(to bottom, #3a1b00 0%,#521f00 50%,#4a1e00 51%,#722a00 100%);

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3a1b00', endColorstr='#722a00',GradientType=0 );
         }
          form button:active{
          background: #120800;

background: -moz-linear-gradient(top, #120800 0%, #1a0a00 50%, #180a00 51%, #240d00 100%);

background: -webkit-linear-gradient(top, #120800 0%,#1a0a00 50%,#180a00 51%,#240d00 100%);

background: linear-gradient(to bottom, #120800 0%,#1a0a00 50%,#180a00 51%,#240d00 100%);

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#120800', endColorstr='#240d00',GradientType=0 );
          }

         </style>

</head>

<body>
         <form action="autenticacion.php" method="POST">
               <h1> Dark Form</h1>
   <input type="text" name="Usuario"  max-length="20" placeholder="ingrese un usuario" title="Se necesita un usuario" required />
   <input type="password" name="Password"  max-length="20" placeholder="ingrese un password" title="Se necesita una contraseña" required/>
   <button type="button" name="boton"  onClick=" window.location.href='registroUsuarios.php' "> Registrarse</button>

   <button type="submit" name="login">Iniciar Sesion</button>
         </form>

</body>
<footer>
<a href="index.html"><img style="position:absolute; bottom:0;" src="15.png"  width="80" alt="IR ATRAS"></a>
</footer>
</html>
