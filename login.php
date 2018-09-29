<?php 

	$user = "usuario";
	$password = "Hola123.";

	if(isset($_GET['user']) && isset($_GET['password'])) {
		$error = '?';
		if ($password != $_GET['password']) {
			$error .= '&errorPassword=El password no coincide';
		}
		if ($user != $_GET['user']) {
			$error .= '&errorUser=El password no coincide';	
		}
		if ($error == '?') {
			header("Location: dashboard.php");
		} else {
			header("Location: index.php". $error);
		}


	} else {
		header('Location: ./index.php?error=true');
	}
	print_r($_GET);
	print_r($_POST);
 ?>