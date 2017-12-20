<?php 
	$user = "marines";
	$pass = "1234";

	if($_POST['userName'] == $user && $_POST['userKey']==$pass){
		setcookie('userName',$_POST['userName'],time()+60*60*24*365);
		setcookie('userKey',$_POST['userKey'],time()+60*60*24*365);
		echo "Cookie creada";
	}else{
		echo "usuario o contraseña erradas";
	}

 ?>