<?php 
	$personas = array(
		array('amairani','lievano',22),
		array('omar','vasquez',30),
		array('juan','perez',32)
	);

	//obtener array
	$fila = 2;
	$columna = 1;

	//echo $personas[$fila][$columna];

	//recorrer array dimensional
	for ($i=0; $i < count($personas) ; $i++) { 
		for ($u=0; $u <count($personas[$i]) ; $u++) { 
			echo "valor $i=> ".$personas[$i][$u]."<br>";
		}
	}

	$juego = array(
		'A'=>array('nada','nada','Barco'),
		'B'=>array('nada','nada','nada'),
		'C'=>array('Barco','nada','nada'),
		'D'=>array('nada','nada','Barco'),
	);

	foreach ($juego as $key => $value) {
		echo "<br>";
		for ($i=0; $i < count($value) ; $i++) { 
			echo "coordenadas -> ".$key ." - ".$i." valor -> ".$value."<br>";
		}
	}

 ?>