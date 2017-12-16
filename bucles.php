<?php 
	
	$a = 15;
	$b = 20;
	//Sentencia IF
	// if($a < $b){
	// 	echo "TRUE";
	// }else{
	// 	echo "FALSE";
	// }

/*	if (condition) {
		# code...
	}elseif (condition) {
		# code...
	}*/

	//Sentencia switch

	// $i = 5;
	// switch ($i) {
	// 	case 1:
	// 		echo "Dia 1";
	// 		break;
	// 	case 2:
	// 		echo "Dia 2";
	// 		break;
	// 	case 3:
	// 		echo "Dia 3";
	// 		break;
	// 	default:
	// 		echo "No existe";
	// 		break;
	// }

	//Sentecia WHILE y DO WHILE
	$contador = 1;
/*	while ($contador <= 10){
		echo "Valor while del contador {$contador} <br>";
		++$contador;
	}*/

/*	do{
		echo "Valor del contador {$contador} <br>";
		$contador++;
	}while($contador <=10)*/

	//bucle For
/*	for ($i=0; $i < 10; $i++){ 
		echo "contador $i <br>";
	}*/
	//foreach
	$arra = array('rojo','azul','verde','marron');
	foreach ($arra as $key => $value) {
		echo "Posicion ".$key . " Valor ".$value . "<br>";
	}







 ?>