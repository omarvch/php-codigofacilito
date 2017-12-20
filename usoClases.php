<?php 
	//incluir un archivo
/*	include ./Persona.php;
	requiere 
	include_once*/
	require_once './Persona.php';
	require_once './Vendedor.php';

	$persona1 = new Persona();

	$persona1->obtenerEdad(1987);
	$persona1->setNombre('Omar');

	echo "<br>hola ".$persona1->getNombre();

	echo $persona1::$miStatic."<br>";


	echo "<br>";

	$vendedor = new Vendedor();

	$vendedor->setNombre("juan");
	echo "<br> hola ".$vendedor->getNombre();
	$vendedor->lluviaEstrellas();
 ?> 