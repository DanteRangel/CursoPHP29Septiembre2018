<?php 
	namespace MVC\Core\Controller;
	use MVC\Model\User;
	class UserController {
		public static function show() {
			$users = User::findAll();
			print_r($users);
		}
	}
 ?>