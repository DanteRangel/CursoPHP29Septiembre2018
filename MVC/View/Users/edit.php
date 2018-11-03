<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<form action="./?controller=User&method=update" method="POST">
			<input type="hidden" value="<?php echo $user->id_usuario;?>" name="id">
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" value="<?php echo $user->name; ?>" name="name">
			</div>
			<div class="form-group">
				<label for="">Correo</label>
				<input type="text" class="form-control" value="<?php echo $user->email; ?>" name="email">
			</div>

			<div class="row text-right">
				<input type="submit" class="btn btn-success" value="Enviar">
			</div>
		</form>
	</div>
</div>