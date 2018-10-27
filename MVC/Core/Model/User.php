<?php 
	namespace MVC\Core\Model;
	use MVC\Config\Model;
	class User extends Model {
		protected static $table = 'users';
		protected static $connection = 'pocoyo';
	}


 ?>