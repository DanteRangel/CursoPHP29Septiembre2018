<?php 

	echo "<h1>Hola Mundo!!!</h1>";
	$variable = "hola";
	echo $variable . '<br>';
	$variable = 1;
	echo $variable . '<br>';
	$variable = false;
	if ($variable) {
		echo 'es verdadero' . '<br>';
	} else {
		echo 'es falso' . '<br>';
	}
	$arreglo1 = [2, 3, 1, "ola k ase", 4, 1, 4, 5];
	$arreglo2 = array(2, 3, 1, 3, 4, 1, 4, 5);
	$arregloAsoc = [
		'nombre' => 'Dante',
		'apellido' => 'Rangel',
		'edad' => 24,
		'genero' => 'Masculino'
	];
	echo $arregloAsoc["nombre"] . $arregloAsoc['apellido'] . '<br>';
	for ($i = 0; $i < count($arreglo1); $i++ ) {
		echo $arreglo1[$i] . '<br>';
	}
	echo 'arreglo 2 <br>';
	foreach ($arreglo2 as $valor) {
		echo $valor . '<br>';
	}
	foreach ($arreglo2 as $key => $value) {
		echo 'arreglo1[' . $key . '] = '. $value . '<br>';
	}
	foreach ($arregloAsoc as $key => $value) {
		echo ucwords($key) . ':' . $value . '<br>'; 
	}
	echo "do while";
	$i = 0;
	do {
		echo $arreglo2[$i] . '<br>';
		$i++;
	} while ($i < count($arreglo2));
	$i = 0;
	echo "while";
	while($i < count($arreglo2)) {
		echo $arreglo2[$i] . '<br>';
		$i++;
	}
	$variable = "2";
	echo "switch <br>";
	switch ($variable) {
		case 1:
		case "value":
		case 'Value':
			echo "entro al primero";
			break;
		case "2":
		case 2:
			echo "entro al segundo";
			break;
		
		default:
			# code...
			break;
	}


	#comentario
	// comentario
	/*
asdasda
asdasd
asd
	*/
	#var_dump($arreglo1);
	#print_r($arreglo1);

	
	 /*
	 $a = 4;
	$a = $a + 4;
	$a += 4;
	 +
	 ++
	 --
	 -
	 /
	 +=
	 -=
	 *=
	 /=

	 */



?>

<br>
<br>
<br>
<br>
<br>
<h1>esto es htnl fuera de las etiquetas</h1>