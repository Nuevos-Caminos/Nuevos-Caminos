<?php include('db_connect.php'); ?>

<div class="container-fluid">
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
				<form action="" id="manage-category">
					<div class="card">
						<div class="card-header">
							Formulario de categoría
						</div>
						<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Nombre</label>
								<input type="text" class="form-control" name="name">
							</div>
							<div class="form-group">
								<label class="control-label">Descripción</label>
								<textarea class="form-control" name="description" cols="30" rows="4"></textarea>
							</div>
						</div>
						<div class="card-footer">
							<div class="row">
								<div class="col-md-12 d-flex justify-content-between">
									<button class="btn btn-sm btn-primary col-sm-5">Guardar</button>
									<button class="btn btn-sm btn-default col-sm-5" type="button" onclick="$('#manage-category').get(0).reset()">Cancelar</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<b>Lista de categorías</b>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
							<colgroup>
								<col width="5%">
								<col width="75%">
								<col width="20%">
							</colgroup>
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th class="text-center">Información</th>
									<th class="text-center">Acciones</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								$category = $conn->query("SELECT * FROM categories ORDER BY name ASC");
								while ($row = $category->fetch_assoc()):
								?>
									<tr>
										<td class="text-center"><?php echo $i++ ?></td>
										<td>
											<p>Nombre: <b><?php echo $row['name'] ?></b></p>
											<p>Descripción:</p>
											<p class="truncate"><?php echo $row['description'] ?></p>
										</td>
										<td class="text-center">
											<div class="d-flex justify-content-center align-items-center">
												<button class="btn btn-sm btn-primary edit_category me-2" type="button" data-id="<?php echo $row['id'] ?>" data-name="<?php echo $row['name'] ?>" data-description="<?php echo $row['description'] ?>">Editar</button>
												<button class="btn btn-sm btn-danger delete_category" type="button" data-id="<?php echo $row['id'] ?>">Borrar</button>
											</div>
										</td>
									</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>
</div>

<!-- CSS adicional para responsividade -->
<style>
	td {
		vertical-align: middle !important;
	}
	.truncate {
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		max-width: 150px;
	}
</style>

<!-- Scripts para DataTables responsivo e funções do formulário -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

<script>
	$(document).ready(function() {
		$('table').DataTable({
			responsive: true
		});

		$('#manage-category').submit(function(e) {
			e.preventDefault();
			start_load();
			$.ajax({
				url: 'ajax.php?action=save_category',
				data: new FormData($(this)[0]),
				cache: false,
				contentType: false,
				processData: false,
				method: 'POST',
				type: 'POST',
				success: function(resp) {
					if (resp == 1) {
						alert_toast("Datos agregados con éxito", 'success');
						setTimeout(function() {
							location.reload();
						}, 1500);
					} else if (resp == 2) {
						alert_toast("Datos actualizados con éxito", 'success');
						setTimeout(function() {
							location.reload();
						}, 1500);
					}
				}
			});
		});

		$('.edit_category').click(function() {
			start_load();
			var cat = $('#manage-category');
			cat.get(0).reset();
			cat.find("[name='id']").val($(this).attr('data-id'));
			cat.find("[name='name']").val($(this).attr('data-name'));
			cat.find("[name='description']").val($(this).attr('data-description'));
			end_load();
		});

		$('.delete_category').click(function() {
			_conf("¿Estás seguro de eliminar esta categoría?", "delete_category", [$(this).attr('data-id')]);
		});
	});

	function delete_category($id) {
		start_load();
		$.ajax({
			url: 'ajax.php?action=delete_category',
			method: 'POST',
			data: {
				id: $id
			},
			success: function(resp) {
				if (resp == 1) {
					alert_toast("Los datos se han eliminado con éxito", 'success');
					setTimeout(function() {
						location.reload();
					}, 1500);
				}
			}
		});
	}
</script>
