
<?php 
	include './vendor/autoload.php';
	include ('.config/app.php');
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	
	$path = './Core/Controller/';
	if(isset($_REQUEST['controller'])  && isset($_REQUEST['method']) && file_exists($path . $_REQUEST['controller'] . 'Controller.php')) {
		$controller =  $_REQUEST['controller'] . 'Controller';
		call_user_func($controller .'::'.$_REQUEST['method']); 
		return;
		if(method_exists($controller, $_REQUEST['method'])) {
			echo "entra";
			$controller::$_REQUEST['method']();
		} else {		
			echo "no entra";
			$controller::show();
		}
	} else {
		echo "entro;";
	}
 ?>