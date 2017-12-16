<?php 
	
	///Conversion de numero a enteros

	//contexto
	$variable = "12 HolaMundo";
	$variable2 = 6.56;
	$variable3 = 1;

	/*$suma = 20+$variable;*/


	//forzado de tipo
	$int = (int)$variable2;


	//funcion
	$funcion = intval($variable2);

	//conversion a tipo float o double
	$numReal = (float)$variable2;
	$double = floatval($variable2);

	//CONVERSION TIPO boolean
	$bool = (bool)$variable3;
	$bool2 = boolval($variable3);

	//Converti a tipo ARRAY
	//funcion explode;
	$numeros = "1,2,3,4,5,6";
	$arrayNum = explode(",",$numeros,5);

	//tipo forzado
	$array = (array)$variable;

	$array2 = array('omar','juan','miguel');
	$varImplode = implode(" ",$array2);

	echo $bool2;
	echo gettype($bool2);
	echo (bool)"0";
	echo $arrayNum[2];
	echo $array[0];
	echo " ".$varImplode;

 ?>