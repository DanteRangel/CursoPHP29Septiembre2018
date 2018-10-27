
<?php 
	include './vendor/autoload.php';
	include ('.config/app.php');
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	
	$path = './Core/Controller/';
	if(isset($_REQUEST['controller'])  && isset($_REQUEST['method'])) {

		$controller =  "\MVC\Core\Controller\\".$_REQUEST['controller'] . 'Controller';

		if(method_exists($controller, $_REQUEST['method'])) {
			call_user_func($controller .'::'.$_REQUEST['method']);
		} else {		
			call_user_func($controller .'::show');
			echo "Error";
		}
	} else {
		echo "entro;";
	}
 ?>