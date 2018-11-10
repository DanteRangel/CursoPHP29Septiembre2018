<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<form action="./?controller=User&method=store" method="POST">
			<input type="hidden"  name="id">
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" 
 name="name">
			</div>
			<div class="form-group">
				<label for="">Correo</label>
				<input type="text" class="form-control" 
 name="email">
			</div>
			<div class="form-group">
				<label for="">Tipo Usuario</label>
				<select name="type" class="form-control">
					<?php foreach ($permisos as $key => $permiso): ?>
						<option value="<?php echo $permiso->id; ?>" >
							<?php echo $permiso->name; ?>
						</option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" 
 name="password">
			</div>
			<div class="row text-right">
				<input type="submit" class="btn btn-success" value="Enviar">
			</div>
		</form>
	</div>
</div>