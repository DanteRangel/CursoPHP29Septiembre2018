<?php 
	namespace App\Core\Controller;
	use App\Core\Model\User;
	class UserController {
		public static function show() {
			$users = User::findAll();
			print_r($users);
		}
	}
 ?>