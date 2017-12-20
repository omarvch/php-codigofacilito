<?php 
	function resta($num){
		return $num -10;
	}


	echo resta(40)."<br>";


	//argumentos por defecto
	function hacer_cafe($tipo = "capuchino"){
		return "el cade es de $tipo <br>";
	}

	echo hacer_cafe();
	echo hacer_cafe(null);
	echo hacer_cafe("moca");

	function person($nombre = "fulanito", $apellido = "fulanito", $edad = 30){
		return "Bienvenido $nombre $apellido de $edad años <br>";
	}

	echo person("omar","vasquez");

	function animal($animales = array("sin data","sin data"),$tipo = "sin tipo"){
		return "los animales son ". implode(",",$animales) . "y son de tipo ".$tipo . "<br>";
	}

	echo animal();

	$animals = array("gato","tigre");
	echo animal($animals,"felinos");

	function flores(){
		$flor = "clavel";
		$color = "morado";
		$cantidad = 10;

		return array($flor,$color,$cantidad);
	}

	list($fl,$co,$cant) = flores();

	echo "hola soy $fl mi flor es $co y somos $cant";
 ?>