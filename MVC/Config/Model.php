<?php 
	namespace App\Config;
	use App\Config\Conexion;
	class Model extends Conexion {
		public function __construct($attributes) {
			foreach ($attributes as $key => $value) {
				$this->$key = $value;
			}
		}
		public static function all() {
			if(isset(static::$connection)) {
				$con = self::connection(static::$connection);
			} else {
				$con = self::connection();
			}
			
			$result = $con->query('SELECT * FROM '. static::$table);
			$arreglo = [];
			$class = static::getNameClass();
			
			while ($row = $result->fetch_assoc()) {
				$arreglo[] = new $class($row);
			}
			return $arreglo;
		}
		public static function find($id) {
			if(isset(static::$connection)) {
				$con = self::connection(static::$connection);
			} else {
				$con = self::connection();
			}
			$result = $con->query("SELECT * FROM " . static::$table . ' WHERE ' . (isset(static::$primaryKey) ? static::$primaryKey : 'id' ). '=' . $id . ' LIMIT 1');

			if($result->num_rows > 0) {
				$class = static::getNameClass();
				return new $class($result->fetch_assoc());
			} else {
				return [];
			}
			
		}
		public static function getNameClass() {
			return  get_called_class();
		}

		public function save(){
			if(isset(static::$connection)) {
				$con = self::connection(static::$connection);
			} else {
				$con = self::connection();
			}

			$sql = "UPDATE ". static::$table  ." SET ";
			$i = 0;
			foreach ($this as $attribute => $value) {
				$sql .= $attribute . '="' . $value . '"';
				if($i < count((array)$this) -1 ) {
					$sql.= ',';
				}
				$i++;
			}
			$sql .= ' WHERE '.(isset(static::$primaryKey)? static::$primaryKey : 'id') 
				. '=' .(isset(static::$primaryKey)? $this->{static::$primaryKey} : $this->id);
			return $con->query($sql);

			
		}

	}

	#print_r(Model::findAll());
 ?>