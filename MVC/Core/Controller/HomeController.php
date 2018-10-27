<?php 
	namespace MVC\Core\Controller;
	use MVC\Core\Model\Producto;
	class HomeController {
		public static function show() {
			$users = Producto::findAll();
			print_r($users);
		}
	}
 ?>