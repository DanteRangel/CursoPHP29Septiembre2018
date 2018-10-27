<?php 
	namespace MVC\Config;
	use MVC\Config\Conexion;
	class Model extends Conexion {
		
		public static function findAll() {
			if(isset(static::$connection)) {
				$con = self::connection(static::$connection);
			} else {
				$con = self::connection();
			}
			
			$result = $con->query('SELECT * FROM '. static::$table);
			$arreglo = [];
			while ($row = $result->fetch_array()) {
				$arreglo[] = $row;
				//array_push($arreglo, $row);
			}
			return $arreglo;
		}

	}

	#print_r(Model::findAll());
 ?>