<?php 
	namespace MVC\Config;
	class Conexion {
		public static $con;
		public static function connection($database = false) {
			$credentials = include('database.php');
			if($database) {				
				if(array_key_exists($database, $credentials)) {
					$credentials = $credentials[$database];
				} else {
					$credentials = array_values($credentials)[0];
				}
			} else {				
				$credentials = array_values($credentials)[0];
			}
			$con = false;
			switch ($credentials['driver']) {
				case 'mysql':
					$con =  new \mysqli($credentials['host'], $credentials['user'], $credentials['pass'], $credentials['database']) or die ('muere');					
					break;
				case 'postgresql':
					# code...
					break;
				case 'SQLServer':
					# code...
					break;
				case 'MongoDB':
					# code...
					break;

				default:
					$con =  new \mysqli($credentials['host'], $credentials['user'], $credentials['pass'], $credentials['database']) or die ('muere');					
					break;
			}
			
			return $con;
			
		}
	}	

 ?>




