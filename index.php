<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="UTF-8">
	<title>PHP desde cero</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="offset-md-3 col-md-6">
				<form action="login.php?LOQUESEA=ASDA" method="post">
					<div class="form-group <?php echo isset($_GET['errorUser'])?' has-danger ':'';?>">
						<label for="">Usuario</label>
						<input type="text" name="user" class="form-control <?php echo isset($_GET['errorUser'])?' form-control-danger ':'';?>" placeholder="Introduce tu usuario" value="<?php echo isset($_GET['user'])?$_GET['user']:'';?>">
						<?php if (isset($_GET['errorUser'])) { ?>
							<span class="text-danger">
								<?php echo $_GET['errorUser']; ?>
							</span>
						<?php } ?>
					</div>
					<div class="form-group <?php echo isset($_GET['errorPassword'])?' has-danger ':'';?>">
						<label for="">Contraseña</label>
						<input type="password" name="password" class="form-control <?php echo isset($_GET['errorPassword'])?' form-control-danger ':'';?>" placeholder="Introduce la contraseña">
						<?php if (isset($_GET['errorPasswird'])) { ?>
							<span class="text-danger">
								<?php echo $_GET['errorPassword']; ?>
							</span>
						<?php } ?>
					</div>
					<div class="row">
						<input type="submit" class="btn btn-success" value="Enviar">
					</div>
				</form>
			</div>
		</div>

	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>