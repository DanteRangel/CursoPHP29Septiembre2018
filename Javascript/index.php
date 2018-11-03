<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>JavaScript</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
	</head>
	<body id="bodyID">

		<div class="container">
			<div class="row">
				<div class="col-12">					
					<div id="saludando">
						Hola estoy saludando
					</div>
				</div>
				<div class="col-12">
					<button id="btn-click" class="btn btn-info" onclick="clickeaFunction();">Clickea</button>
				</div>
			</div>
		</div>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
		<script>
			//alert("Hola mundo desde JavaScript");
			//window.location = "../Clase2/login.php";
			//window.location = "./redireccion.php";
			console.log({height: window.innerHeight});
			console.log({width: window.innerWidth});
			console.log({heightPantalla: screen.height});
			console.log({widthPantalla: screen.width});
			let body = document.getElementsByTagName('body');
			console.log(body);
			let bodyId = document.getElementById('bodyID');
			console.log(bodyId);
			var arreglo = [];
			var objJS = {
				elemento: 'valor',
				elemento2: 'valor2'
			};
			console.log(objJS.elemento2);
			var bandera = false;
			function clickeaFunction() {
				saludando = document.getElementById("saludando");
				if(bandera == false) {
				//alert("Estoy dando click");
					saludando.innerHTML = "Hola estoy saludando";
					$('#btn-click').html('Clickea');
					bandera = true;
				} else {
					saludando.innerHTML = "Cambie el texto con el dom de JavaScript";	
					$('#btn-click').html('Ya no Clickees');
					bandera = false;
				}
				
			}
		</script>	
	</body>
</html>
