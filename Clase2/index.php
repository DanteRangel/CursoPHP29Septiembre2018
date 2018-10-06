<?php 
	session_start();
	if (isset($_SESSION['user'] )) {
		header('Location: ./dashboard.php');
	}
	include './header.php';
 ?>

	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<form action="login.php?LOQUESEA=ASDA" method="post">
					<div class="form-group <?php echo isset($_GET['errorUser'])?' has-danger has-error ':'';?>">
						<label for="">Usuario</label>
						<input type="text" name="user" class="form-control <?php echo isset($_GET['errorUser'])?' form-control-danger ':'';?>" placeholder="Introduce tu usuario" value="<?php echo isset($_GET['user'])?$_GET['user']:'';?>">
						<?php if (isset($_GET['errorUser'])) { ?>
							<span class="text-danger">
								<?php echo $_GET['errorUser']; ?>
							</span>
						<?php } ?>
					</div>
					<div class="form-group <?php echo isset($_GET['errorPassword'])?' has-danger has-error ':'';?>">
						<label for="">Contraseña</label>
						<input type="password" name="password" class="form-control <?php echo isset($_GET['errorPassword'])?' form-control-danger ':'';?>" placeholder="Introduce la contraseña">
						<?php if (isset($_GET['errorPassword'])) { ?>
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
<?php 
include './footer.php'; ?>