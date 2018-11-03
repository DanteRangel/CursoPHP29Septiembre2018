<?php 
	namespace App\Core\Model;
	use App\Config\Model;
	class User extends Model {
		protected static $table = 'users';
		protected static $connection = 'pocoyo';
	}


 ?>