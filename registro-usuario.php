<?php
session_start();
if (@!$_SESSION['nombre_usuario']) {
	header("Location:index.php");
}elseif ($_SESSION['privilegio']==2) {
	header("Location:senalafiliadas.php");
}
?>

<?php
require 'cn.php';

?>


<?php include("header.php");?>

<body class="skin-red fixed">
	<div class="wrapper">

		<!-- Navigation -->
		<?php include("navegacion.php");?>

		<!-- Left side column. contains the logo and sidebar -->
		<?php include("menulateral-admin.php");?>

		<!-- Page Content -->
		<div class="content-wrapper">
			<section class="content">
				<div class="row">
					<div class="col-md-7 cols">
						<div class="formulario-titulo">
							<h1>Registrar usuario</h1>
						</div>
						<form action="regis-user.php" method="post" onsubmit="return validaruser()">
							<input type="text" name="nombre" id="nombre" placeholder="Nombre completo" class="input" size="32" value="">
							<input type="text" name="nombre_usuario" id="nombre_usuario" placeholder="Nombre de usuario" class="input" size="32" value="">
							<input type="email" name="email" id="email" placeholder="E-mail" class="input" value="" size="32">
							<input type="password" name="password" id="password" placeholder="Contraseña" class="input" value="" size="20">
							<select class="input styled-select slate" id="privilegio" name="privilegio">
								<option value="">Selecciona una opción</option>
								<?php
								$registros = "SELECT * FROM privilegio";
								$registro = $conexion ->query($registros);
								while($row = $registro -> fetch_array(MYSQLI_ASSOC))
								{
									echo "<option value=".$row['idprivilegio'].">".$row['priv_user']."</option>";
								}
								?>
							</select>
							<input type="submit" class="button" value="Registrar">
						</form>
					</div>
					<div class="col-md-5 cols">
						<div class="formulario-titulo">
							<h1>Lista de Usuarios</h1>
						</div>
						<div class="table-responsive">
							<?php
							$consulta = "SELECT usuarios.id_usuario, usuarios.nombre_usuario, usuarios.nombre, privilegio.priv_user FROM usuarios INNER JOIN privilegio ON usuarios.privilegio = privilegio.idprivilegio";
							$resultadousuarios = $conexion ->query($consulta);
							?>
							<table class="table table-hover table-striped display" id="example" style="background-color: #fff; margin-bottom: 0px;">
								<thead>
									<tr>
										<th>Nombre completo</th>
										<th>Tipo</th>
										<th>N. Usuario</th>
										<th colspan="2" class="acciones">Acciones</th>
									</tr>
								</thead>
								<tbody>
									<?php while($row = $resultadousuarios -> fetch_array(MYSQLI_ASSOC)){ ?>
									<tr>
										<td>
											<?php echo $row['nombre'];?>
										</td>
										<td>
											<?php echo $row['priv_user'];?>
										</td>
										<td>
											<?php echo $row['nombre_usuario'];?>
										</td>
										<td class="acciones">
											<a href="modificar-usuario.php?id=<?php echo $row['id_usuario'];?>"><i class="fa fa-pencil "></i></a>
											<!-- <a href="#" data-href="modificar-usuario.php?id=<?php echo $row['id_usuario'];?>" data-toggle="modal" data-target="#modificaruser"><i class="fa fa-pencil "></i></a> -->
										</td>
										<td class="acciones">
											<a href="#" data-href="eliminar.php?id=<?php echo $row['id_usuario']; ?>" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-times "></i></a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- /.container -->

		<!-- Footer -->
		<?php include("footer.php");?>
	</div>


	<?php include("modal.php"); ?>


	<!-- Modal eliminar -->
	<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>

				<div class="modal-body">
					¿Desea eliminar este registro?
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<a class="btn btn-danger btn-ok">Eliminar</a>
				</div>
			</div>
		</div>
	</div>

	<script>
		$('#confirm-delete').on('show.bs.modal', function(e) {
			$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

			$('.debug-url').html('Eliminar URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
		});
	</script>
	<!-- Modal eliminar Fin -->

	<script src="sweetalert2/sweetalert2.min.js"></script>
	<script src="validar-user.js"></script>
</body>

</html>