<?php 
	
	//Operadores de Comparación
	//Operador Igual ==

	$numero1 = 10;
	$numero2 = 10;

	echo "hola soy el operador == <br>";
	var_dump($numero1 == $numero2);

	echo "<br>";
	//operador identico
	echo "hola soy el operador === <br>";
	var_dump($numero1 === $numero2);	

	echo "<br>";
	//operador diferente
	echo "hola soy el operador <> o != <br>";
	var_dump($numero1 != $numero2);	
	
	echo "<br>";
	//operador no identico (verifica valor y tipo de dato)
	echo "hola soy el operador !== <br>";
	var_dump($numero1 !== $numero2);

	//mayor que
	$a = 14;
	$b = 13;
	echo "<br>";
	//operador mayor que
	echo "hola soy el operador > <br>";
	var_dump($a > $b);

	//menor que
	$a = 14;
	$b = 13;
	echo "<br>";
	//operador menor que
	echo "hola soy el operador < <br>";
	var_dump($a < $b);

	//mayor o igual que
	$a = 14;
	$b = 13;
	echo "<br>";
	//operador menor que
	echo "hola soy el operador >= <br>";
	var_dump($a >= $b);

	//menor o igual que
	$a = 14;
	$b = 13;
	echo "<br>";
	//operador menor que
	echo "hola soy el operador <= <br>";
	var_dump($a <= $b);

	//Operador de nave espacial se usa en pearl y ruby
	echo "hola soy el operador <=> <br>";
	var_dump($a <=> $b); //1
	var_dump($b <=> $a); //-1
	var_dump($b <=> $b); //0

	//Operador de elvis si es TRUE devuelve valorde var, si es falso devuelve mensaje
	$var = false;
	echo "hola soy el operador Elvis <br>";
	var_dump($var?:'no hay datos');
	echo "<br>";

	//operador ternario
	$var = false;
	echo "hola soy el operador ternario <br>";
	var_dump($var?'soy verdadero':'soy falso');
	echo "<br>";

	//operador de fusion null
	$var = null;
	echo "hola soy el operador fusion null <br>";
	var_dump($var??'soy Null');




 ?>