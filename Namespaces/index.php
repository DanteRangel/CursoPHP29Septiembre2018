<?php 

	include './vendor/autoload.php';
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	use App\Core\Model\{Mascota, Persona};
	use App\Persona as Pi;
	use App\Core\Controller\Persona as PC;
	Pi::saludar();
	Persona::saludar();
	Mascota::saludar();
	PC::saludar();
 ?>