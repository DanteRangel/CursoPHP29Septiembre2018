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
		public static function create()
		{
			$permisos = Permisos::all();
			include('View/layouts/header.php');
			include('View/Users/create.php');
			include('View/layouts/footer.php');
		}
		public static function store()
		{
			if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['type']) && isset($_POST['password']))
			{
				$user= User::create([
					'name' => $_POST['name'],
					'email' => $_POST['email'],
					'type' => $_POST['type'],
					'password' => $_POST['password']
				]);
				header('Location: ./?controller=User&method=show');
			}
			else
			{

			}
		}

		public static function delete() {
			if (isset($_POST['id'])) {
				$user = User::destroy($_POST['id']);
				header('Content-type: application/json');
				if($user) {
					echo json_encode(
						[
							'status' => 200,
							'meta' => [
								'status'=>200,
								'message' => 'El usuario ha sido borrado satisfactoriamente.',
								'data' => $user
							]
						]
					);
					return;
				} else{
					echo json_encode(
						[
							'status' => 500,
							'meta' => [
								'status'=> 500,
								'message' => 'Server Error ',
								'data' => $user
							]
						]
					);
					return;
				}

				
			}
		}
	}



 ?>