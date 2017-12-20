<?php 
	$saludo = function ($nombre){
		echo $nombre;
	};

	$suma = function($num1, $num2){
		return $num1+$num2;
	};

	$saludo("omar");

	echo $suma(4,5);

	//funciones variables

	function saludo($saludo){
		echo "soy la variable funcion $saludo";
	}

	$variable = 'saludo';

	echo $variable("hola");

	//funciones internas de php
	if(function_exists('hola_hola')){
		echo "la funcion existe";
	}else{
		echo "la funcion no existe";
	}

	//funciones en el modulo de XML
	print_r(get_extension_funcs("xml"));

 ?>