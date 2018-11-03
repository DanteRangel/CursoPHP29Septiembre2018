<?php 
	namespace App\Core\Model;
	use App\Config\Model;
	class User extends Model {
		protected static $table = 'users';
		protected static $connection = 'pocoyo';
		// definir primary key diferente a la convencion
		public static $primaryKey = 'id_usuario';
	}


 ?>