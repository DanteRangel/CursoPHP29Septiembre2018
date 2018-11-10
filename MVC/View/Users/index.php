<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="alert alert-success" style="display: none;">
		  <strong>Exitoso!</strong> <p class="alert-message"> Indicates a successful or positive action.</p>
		</div>
	</div>
</div>

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
						<tr id="tr-<?php echo $user->id_usuario;?>">
							<td><?php echo $user->name;?></td>
							<td><?php echo $user->email;?></td>
							<td>
								<?php foreach ($permisos as $key => $permiso): ?>
									<?php echo ($user->type == $permiso->id)?$permiso->name:'';?>
								<?php endforeach ?>
							</td>
							<td>
								<button class="btn btn-info" onclick="editUser(<?php echo $user->id_usuario;?>);"> Editar</button>
								<button class="btn btn-danger" onclick="deleteUser(<?php echo $user->id_usuario; ?>)"> Eliminar</button>

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
	function deleteUser(id) {
		
		$('.alert').show('slow');
		$.ajax({
			url: './?controller=User&method=delete',
			type: 'POST',
			data: {"id":id},
			success: function(response){
				console.log(response);
				if(response.status == 200) {
					$('.alert').removeClass('alert-danger');
					$('.alert').addClass('alert-success');
					$('.alert-message').text(response.meta.message);
					$('#tr-' + id).remove();
				} else if(response.status == 500) {
					$('.alert').removeClass('alert-success');
					$('.alert').addClass('alert-danger');
					$('.alert-message').text(response.meta.message);					
				}
			}
		})
		setTimeout(function(){
		//	$('.alert-message').html("Hola con html");
			$('.alert').hide('slow');
		},3000);
	}

</script>