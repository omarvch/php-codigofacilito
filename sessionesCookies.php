<?php 
	//cookies
	
	if(isset($_SESSION['login'])){
		echo "Bienvenido session " . $_SESSION['login'];
	}else{
		echo "Sin Session";
	}

	if(isset($_COOKIE['userName'])){
		echo "bienvenido cookie ".$_COOKIE['userName'];
	}else{
		echo "Sin Cookie";
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="loginCookie.php" method="post" accept-charset="utf-8">
		Usuario: <input type="text" name="userName" value="" placeholder="">
		Contraseña: <input type="password" name="userKey" value="" placeholder="">
		<input type="submit" name="enviar" value="Enviar" placeholder="">
	</postm>
</body>
</html>