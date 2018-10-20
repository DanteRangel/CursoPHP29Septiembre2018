<?php 
	include('../Model/User.php');
	class UserController {
		public static function show() {
			$users = User::findAll();
			print_r($users);
		}
	}
 ?>