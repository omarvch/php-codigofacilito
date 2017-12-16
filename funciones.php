<?php 
	function name(){
		echo "Omar Vasquez\n";
	}

	name();

	//condicion
	$age = 18;
	if($age <= 18){
		function party(){
			echo "Bienvenido a la fiesta";
		}
	}

	party();

	function foo(){
		function bar(){
			
		}
	}
	
 ?>

 <?php 

	function suma($num1, $num2){
		$suma = $num1+$num2;
		echo "La suma es ".$suma."<br>";
	}

	suma(10,15);

	function sumaArray($entrada){
		$num1 = $entrada[0];
		$num2 = $entrada[1];

		echo "El resultado es ".($num1 + $num2)."<br>";
	}

	$array = array(10,5);

	sumaArray($array);

	//funciones por referencia
	function resta(&$num){
		$num = 20 - $num;
	}

	$result = 13;

	resta($result);

	echo $result."<br>";

	//funcoines recursivas
	function recursiva($a){
		if($a <= 20){
			echo "$a<br>";
			recursiva($a+1);
		}
	}

	recursiva(1);

 ?>