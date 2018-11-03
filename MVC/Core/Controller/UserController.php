<?php 
	namespace App\Core\Controller;
	use App\Core\Model\User;
	use App\Core\Model\Permisos;
	class UserController {
		public static function show() {
			include('View/layouts/header.php');
			$users = User::all();
			$permisos = Permisos::all();
			include('View/Users/index.php');
			include('View/layouts/footer.php');
		}
		public static function edit() {
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$user = User::find($id);
				if($user) {
					$permisos = Permisos::all();
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
		public static function update(){
			$id = $_POST['id'];
			$user = User::find($id);
			if ($user) {
				$user->name = $_POST['name'];
				$user->type = $_POST['type'];
				$user->email = $_POST['email'];
				$user->save();
				header('Location: ./index.php?controller=User&method=show');
			}					
		}
	}
 ?>