<?php
Class Alumno {
	private $nombre;
	private $apellido;
	private $edad;
	private $curso;
	
	public function __construct(){
		$this->nombre = "Jose";
		$this->apellido = "Martinez";
		$this->edad = 33;
		$this->curso = "PHP Web Services";
	}
	
	public function getAlumno($n1,$n2){
		return $n1 + $n2;
	}
}

$server = new SoapServer();
$server->setClass("Alumno");

$server->handle();