<?php 
	session_start();
	#header('Content-type: application/json');
	#echo json_encode($_SESSION);
	session_destroy();
	header('Location: ./index.php');
	#session_unset
 ?>