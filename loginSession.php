<?php 
	$user = "marines";
	$pass = "1234";

	session_start();

	if($_POST['userName'] == $user && $_POST['userKey']==$pass){
		$_SESSION['login']='administrador';
		echo "Sesión creada";
	}else{
		echo "usuario o contraseña erradas";
	}

 ?>