<?php
session_start();
if (@!$_SESSION['nombre_usuario']) {
	header("Location:index.php");
}elseif ($_SESSION['privilegio']==1) {
	header("Location:registro-usuario.php");
}
?>

<?php include("header.php");?>

<body class="skin-red fixed">
	<div class="wrapper">

		<!-- Navigation -->
		<?php include("navegacion.php");?>

		<!-- Left side column. contains the logo and sidebar -->
		<?php include("menulateral-usuario.php");?>

		<!-- Page Content -->
		<div class="content-wrapper">
			<section class="content">
				<div class="row">
					<div class="col-md-12">
						<div class="formulario-titulo">
							<h1>Notas de redactores</h1>
						</div>
						<div class="formulario">
							<div class="table-responsive">
								<?php
								require 'cn.php';
								$registros = "SELECT * FROM usuarios U JOIN registros_notas R ON U.id_usuario = R.id_usuario";
								$registro = $conexion ->query($registros);
								?>
								<table class="table table-hover table-striped display" id="example" style="background-color: #fff; margin-bottom: 0px;">
									<thead>
										<tr>
											<th class="centro">ID</th>
											<th>Imagen</th>
											<th>Nombre de la nota</th>
											<th>Link de la nota</th>
											<th>Usuario</th>
										</tr>
									</thead>
									<tbody>
										<?php while($row = $registro -> fetch_array(MYSQLI_ASSOC)){ ?>
										<tr>
											<td style="text-align: center;">
												<?php echo $row['id_nota'];?>
											</td>
											<td>
												<?php echo '<img height="80" width="150" src="data:image;base64,'.$row.' ">';?>
											</td>
											<td style="text-transform: capitalize;">
												<?php echo $row['nombre_nota'];?>
											</td>
											<td>
												<?php echo $row['link_nota'];?>
											</td>
											<td style="text-transform: uppercase;">
												<?php echo $row['nombre_usuario'];?>
											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- /.container -->


		<!-- Footer -->
		<?php include("footer.php");?>
	</div>


</body>

</html>
