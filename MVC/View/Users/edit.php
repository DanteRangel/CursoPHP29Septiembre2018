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
			<div class="form-group">
				<label for="">Tipo Usuario</label>
				<select name="type" class="form-control">
					<?php foreach ($permisos as $key => $permiso): ?>
						<option value="<?php echo $permiso->id; ?>" 
							<?php echo ($permiso->id ==  $user->type)?' selected':'';?> 
						>
							
							<?php echo $permiso->name; ?>
						</option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="row text-right">
				<input type="submit" class="btn btn-success" value="Enviar">
			</div>
		</form>
	</div>
</div>