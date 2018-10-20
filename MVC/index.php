
<?php 
	include ('.config/app.php');
	$path = './Core/Controller/';
	if(isset($_REQUEST['controller'])  && isset($_REQUEST['method']) && file_exists($path . $_REQUEST['controller'] . 'Controller.php')) {
		include ($path . $_REQUEST['controller'] . 'Controller.php' );
		$controller =  $_REQUEST['controller'] . 'Controller' ;

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