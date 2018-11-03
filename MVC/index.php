
<?php 
	include ('./config/app.php');
	include ('./vendor/autoload.php');
	error_reporting(E_ALL);
	ini_set('display_errors', '1');


	if ( isset($_REQUEST['controller']) && isset($_REQUEST['method'])) {
		$controller = '\App\Core\Controller\\' . $_REQUEST['controller'] . 'Controller';
		if (method_exists($controller, $_REQUEST['method'])) {
			call_user_func($controller . '::' . $_REQUEST['method']);
		} else {
			include('View/layouts/header.php');
			echo "Ruta no definida";	
			include('View/layouts/footer.php');
			
		}
	} else {		
			
			include('View/layouts/header.php');
			echo "Ruta no definida";	
			include('View/layouts/footer.php');
	}













	#$user = App\Core\Model\User::all();
	#var_dump($user);
	#$user[1]->name = "AMORCITO MIO";
	#var_dump($user[1]->save());
	//$user = App\Core\Model\User::find(1);
	#print_r(App\Core\Model\User::all());
	#print_r(App\Core\Model\Producto::all());

	/*

#print_r(App\Core\Model\User::find(1));
	#print_r(App\Core\Model\User::all());
	
	#var_dump($user);
	$user->name = "Dante";
	print_r($user);
	#print_r(App\Core\Model\Producto::all());
	*/
 ?>