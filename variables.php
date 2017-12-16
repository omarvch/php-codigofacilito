<?php 


echo "<p>Hola Mundo</p>";
//variables locales y globales


$integer = 1;
$float = 1.5;
$isTrue = true;
$arrayColors = array('azul','morado','negro');
$string = "Hola Omar";

echo $string;
echo $integer;
echo $float;
if($isTrue ==true){
	echo $arrayColors[0];
	echo $integer;
	echo "Es verdadero";
}


//variables locales y globales
function variablesGlobales(){
	$localVar = "variable local";
	$GLOBALS['global2'] = "var glo 2";

	echo $GLOBALS["global"];	
	echo $localVar;
	echo $GLOBALS["global2"];
}

$global ="soy una variable global";

variablesGlobales();

//variables super globales
/*$GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV*/

//constantes







?>