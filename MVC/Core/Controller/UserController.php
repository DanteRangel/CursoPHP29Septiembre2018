<?php 
	namespace App\Core\Controller;
	use App\Core\Model\User;
	class UserController {
		public static function show() {
			include('View/layouts/header.php');
			$users = User::all();
			include('View/Users/index.php');
			include('View/layouts/footer.php');
		}
		public static function edit() {
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$user = User::find($id);
				if($user) {
					include('View/layouts/header.php');
					include('View/Users/edit.php');
					include('View/layouts/footer.php');					
				} else {
					include('View/layouts/header.php');
					echo 'User not exist';
					include('View/layouts/footer.php');
				}
			} else {
				include('View/layouts/header.php');
				echo "User not defined";
				include('View/layouts/footer.php');	
			}
		}
	}
 ?>