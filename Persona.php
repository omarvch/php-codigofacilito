<?php

	class Persona{
		private $nombre;
		private $apellido;
		public static $miStatic = 2017;

		public function __construct(){
			$this -> nombre = "";
			$this -> apellido = "";
		}

/*		public function __set($propiedad,$valor){
			$this -> propiedad = $valor;
		}

		public function __get($propiedad){
			return $this -> propiedad;
		}*/





	
	    /**
	     * @return mixed
	     */
	    public function getNombre(): string
	    {
	        return $this->nombre;
	    }

	    /**
	     * @param mixed $nombre
	     *
	     * @return self
	     */
	    public function setNombre(string $nombre)
	    {
	        $this->nombre = $nombre;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getApellido(): string
	    {
	        return $this->apellido;
	    }

	    /**
	     * @param mixed $apellido
	     *
	     * @return self
	     */
	    public function setApellido(string $apellido)
	    {
	        $this->apellido = $apellido;

	        return $this;
	    }

	    public function obtenerEdad($f){
	    	echo "Tu edad es: ".$this -> fecha($f);
	    }

	    protected function fecha($f){
	    	return self::$miStatic - $f;
	    }


	    public function ___destruct(){
	    	echo "se murio";
	    }
	}

 ?>