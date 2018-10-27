<?php 
	namespace App\Core\Model;
	use App\Config\Model;
	class User extends Model {
		protected static $table = 'users';
		protected static $primaryKey = 'ID';
		protected static $connection = 'pocoyo';
	}


 ?>