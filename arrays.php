<?php 
	$color = "morado";
	$arrayIdenxado = array(1,2,"hola",$color);

	///Obtener el valor del array
	echo $arrayIdenxado[2];

	for ($i=0; $i < count($arrayIdenxado) ; $i++) { 
		echo $arrayIdenxado[$i]."<br>";
	}

	//array asociativo
	$arrayAsociativo = array('nombre'=>'omar','apellido'=>'vasquez');
	echo $arrayAsociativo['nombre'];
	//recorrer array asociativo
	foreach ($arrayAsociativo as $key => $value) {
		echo $key." ".$value."<br>";
	}
 ?>