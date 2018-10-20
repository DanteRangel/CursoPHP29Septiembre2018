<?php 

	class Persona {
		protected $nombre;
		protected $apellidos;
		protected $genero;
		protected $fNacimiento;
		protected $curp;

		public function __construct ($nombre = 'Normal') {
			$this->nombre = $nombre;
		}
		public function correr () {
			echo $this->nombre . ' estas correindo estupendo!!';
		}
		public function comer () {
			echo $this->nombre . ' estas comiendo muy sano, felcidades!!';
		}
		public function setApellidos ($apellidos) {		
			$this->apellidos = $apellidos;
		}
		public function setCurp ($curp) {
			$this->curp = $curp;
		}
	}


	class Estudiante extends Persona {
		public $matricula;
		public $grado;
		public $grupo;

		public function estudiar () {
			echo $this->nombre . " estudias mucho!";
		}

		public function comer () {
			echo $this->nombre . " no comes bien, trabaja !";
		}

	}
	class Godin  extends Persona {
		
		public function comer() {
			echo $this->nombre . " se mantiene de gorditas de doña pelos";
		}
	}
	$estudiante = new Estudiante();
	$estudiante->setApellidos("asdasd");
	#$estudiante->curp = "asdasdasdad";
	$estudiante->comer();
	#var_dump($estudiante);
	#$persona = new Persona("Dante");
	#$persona->setApellidos("Rangel");
	#$persona->setCurp("RARD920222HDFNBN00");
	#var_dump($persona);
	$arreglo = [new Godin(), new Estudiante(), new Persona()];
	foreach ($arreglo as $persona) {
		$persona->comer();
		echo '<br>';
	}
 ?>

