<?php
require 'cn.php';

$id = $_POST ['id'];
$nombre = $_POST ['nombre'];
$nombre_usuario = $_POST ['nombre_usuario'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$privilegio = $_POST ['privilegio'];


$registros = "UPDATE usuarios SET nombre='$nombre', nombre_usuario='$nombre_usuario', email='$email', password='$password', privilegio='$privilegio' WHERE id_usuario = '$id'";
$resultado= $conexion ->query($registros);

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
							<h1>REGISTRO MODIFICADO</h1>
							<?php } else { ?>
							<h1>ERROR AL MODIFICAR</h1>
							<?php } ?>
						</div> -->

						<?php
						if (!$resultado) {
							echo '<script>
							alert("Error al modificar usuario");
							window.history.go(-1);
							</script>';
						} else{
							echo '<script>
							alert("Usuario modificado exitosamente");
							window.history.go(-2);
							</script>';
						}
						?>

						<!-- <a href="registro-usuario.php" class="button">Regresar</a> -->

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
