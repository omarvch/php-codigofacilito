<?php 
	
//Constantes, se escriben en mayusculas
//const
const CONST1 = "Soy una constante";
const NUMERO = 1;
const COLORES = array('azul','verde','rojo');
echo CONST1;
echo NUMERO;
echo COLORES[2];

//define
define('CONST2','Hola Mundo');
define('NOMBRES',array('omar','juan','pedro'));

echo "<br>";
echo CONST2;
echo " ".NOMBRES[2];

//Constantes predefinidas
echo PHP_INT_MIN;
echo "<br>";

echo __LINE__;


?>