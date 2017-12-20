<?php 
/*	function suma(int $a, int $b){
		return $a + $b;
	}*/

	//modo estricto
	declare(strict_types=1);
	function resta(int $a, int $b){
		return $a - $b;
	}

	function multi($a, $b): int{
		return $a * $b;
	}

	var_dump(multi(13.4,5));

 ?>