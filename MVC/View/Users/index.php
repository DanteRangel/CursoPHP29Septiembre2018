<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="table-responvie">
			<table class="table">
				<thead>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Usuario</th>
					<th>Acciones</th>
				</thead>
				<tbody>
					<?php foreach ($users as $key => $user): ?>
						<tr>
							<td><?php echo $user->name;?></td>
							<td><?php echo $user->email;?></td>
							<td><?php echo $user->type;?></td>
							<td>
								<button class="btn btn-info" onclick="editUser(<?php echo $user->id_usuario;?>);"> Editar</button>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	function editUser(id) {
		window.location = './?controller=User&method=edit&id=' + id;
	}
</script>