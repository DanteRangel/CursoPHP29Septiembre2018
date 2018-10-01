<?php 

	$user = "usuario";
	$password = "Hola123.";
	$error = '?';
	print_r($_REQUEST);
	print_r($_GET);
	print_r($_POST);
	return ;

	if(isset($_REQUEST['user']) && isset($_REQUEST['password'])) {
		if ($password != $_REQUEST['password']) {
			$error .= '&errorPassword=El password no coincide';
		}
		if ($user != $_REQUEST['user']) {
			$error .= '&errorUser=El usuario no coincide';	
		}
		if ($error == '?') {
			header("Location: dashboard.php");
		} else {
			$error .= '&user=' . $_REQUEST['user'];
			header("Location: index.php". $error);
		}



	} else {
		header('Location: ./index.php?error=true');
	}
	print_r($_REQUEST);
	print_r($_REQUEST);
 ?>