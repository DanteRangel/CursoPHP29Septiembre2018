<?php 
	session_start();
	$error = '?';
	#isset verifica que exista la variable
	#empty verifica que este vacia la variable

	if (
		isset($_REQUEST['user']) && 
		isset($_REQUEST['password']) &&
		!empty($_REQUEST['user']) &&
		!empty($_REQUEST['password']) 
	) {
		include './conexion.php';

		$sql = 'SELECT * FROM users where email="'. $_REQUEST['user'] .'" limit 1';
		$res = mysqli_query($conexion, $sql);
		if (mysqli_num_rows($res) > 0){
			$user = mysqli_fetch_array($res);
			if ($user['password'] != $_REQUEST['password']) {
				$error .= '&errorPassword=El password no coincide';	
			} 
		} else {
			$error .= '&errorUser=El usuario no coincide';	
		}

		if ($error == '?') {
			$_SESSION['user'] = [
				'user' => $user,
				'time' => date('Y-m-d H:i:s')
			];
			header("Location: ./dashboard.php");
		} else {
			$error .= '&user=' . $_REQUEST['user'];
			header("Location: index.php". $error);
		}
	} else {
		header('Location: ./index.php?error=true');
	}
 ?>