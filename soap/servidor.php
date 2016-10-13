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
		//return $n1 . " " . $n2;
		return "Alumno: " . $this->nombre . " Apellido " . $this->apellido . " Edad: " . $this->edad;
	}
	
	public function saludar($nombre,$edad){
		return "Hola estimado " . $nombre .", tu edad es " . $edad;
	}
}

$server = new SoapServer("service.wsdl");
$server->setClass("Alumno");

$server->handle();