<?php
require 'cn.php';

$id = $_GET['id'];

$registros = "DELETE FROM usuarios WHERE id_usuario = '$id'";
$resultado= $conexion -> query($registros);

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
					<div class="col-md-6">
						<!-- <div class="formulario-titulo">
							<?php if($resultado) { ?>
							<h1>REGISTRO ELIMINADO</h1>
							<?php } else { ?>
							<h1>ERROR AL ELIMINAR</h1>
							<?php } ?>
						</div>

						<a href="registro-usuario.php" class="button">Regresar</a> -->
						<?php
						if (!$resultado) {
							echo '<script>
							alert("Error al modificar usuario");
							window.history.go(-1);
							</script>';
						} else{
							echo '<script>
							alert("Usuario modificado exitosamente");
							window.history.go(-3);
							</script>';
						}
						?>

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
