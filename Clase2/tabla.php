<?php 
	$host = '127.0.0.1';
	$pass = '311332065';
	$user = 'root';
	$database = 'CursoPHP';

	$conexion = mysqli_connect($host, $user, $pass, $database) or die('Error en la conexion');

	#$sql = 'select * from users';
	#$resultado = mysqli_query($conexion, $sql);
	#var_dump(mysqli_fetch_array($resultado));#
	// Iterando rows
	/*<phpwhile ($row = mysqli_fetch_array($resultado)) {
		echo 'Bienvenido al curso ' . $row['name'] . ' o con numero ' . $row[1] .'<br>';
	}*/
	#$resultado = mysqli_query($conexion, $sql);
	#$elemento = mysqli_fetch_array($resultado);
	#var_dump($elemento);
	// Iterando columnas de un row
	/*foreach ($elemento as $key => $value ) {
		echo 'columna[' . $key . '] = ' . $value . '<br>';
	}*/
	/*$config = [
		'config' => [
			'name' => 'Nombre',
			'email' => 'Correo',
			'type' => 'Tipo',
			'id' => 'Acciones',
			'hola' => 'Hola'
		],
		'data' => $resultado
	];


<table>
 	<thead>
 		<?php 
 			foreach ($config['config'] as $key => $value) {
 				echo '<th>'.$value.'</th>';
 			}
 		 ?>
 	</thead> 
 	<tbody>
 		<?php foreach($config['data'] as $key => $row) { ?>
 			<tr>
 				<?php 
	 				foreach ($config['config'] as $a => $v) {
	 					$dato = 'No existe';
	 					if (array_key_exists($a, $row)) {
	 						$dato = $row[$a];
	 					}
	 					echo '<td>' . $dato . '</td>';
	 				}
 				 ?>
 			</tr>
 		<?php } ?>
 	</tbody>
 </table>
	*/

 ?>
 
 <?php 

/*
 <table>
 	<thead>
 		<th>Nombre</th>
 		<th>Email</th>
 		<th>Tipo</th>
 		<th>Acciones</th>
 	</thead>
 	<tbody>
 		<?php 
 			while ($row = mysqli_fetch_array($resultado)) {
 		 ?>
 		 <tr>
 		 	<td><?php echo $row['name'];?></td>
 		 	<td><?php echo $row['email'];?></td>
 		 	<td><?php echo $row['type'];?></td>
 		 	<td><?php echo $row['id'];?></td>
 		 </tr>
		<?php 
			}
		?>
 	</tbody>
 </table>
 */
  ?>