<?php 
	include('../../config/Model.php');
	class User extends Model {
		protected static $table = 'users';
		protected static $connection = 'pocoyo';
	}


 ?>