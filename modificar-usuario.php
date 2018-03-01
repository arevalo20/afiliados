<?php
session_start();
if (@!$_SESSION['nombre_usuario']) {
	header("Location:index.php");
}
elseif ($_SESSION['privilegio']==2) {
	header("Location:senalafiliadas.php");
}
?>

<?php
require 'cn.php';

$id = $_GET['id'];

$registros = "SELECT * FROM usuarios INNER JOIN privilegio on usuarios.privilegio = privilegio.idprivilegio WHERE id_usuario = '$id';";
$resultado= $conexion ->query($registros);
$row = $resultado -> fetch_array(MYSQLI_ASSOC);

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
					<div class="col-md-6 cols">
						<div class="formulario-titulo">
							<h1>Modificar usuario</h1>
						</div>
						<form action="modifica.php" method="post" onsubmit="return validarmodif()" autocomplete="off">
							<input type="hidden" id="id" class="input" name="id" value="<?php echo $row['id_usuario']; ?>" />
							<input type="text" name="nombre" id="nombre" class="input" size="32" value="<?php echo $row['nombre'];?>">
							<input type="text" name="nombre_usuario" id="nombre_usuario" class="input" size="32" value="<?php echo $row['nombre_usuario'];?>">
							<input type="email" name="email" id="email" class="input" value="<?php echo $row['email'];?>" size="32">
							<input type="text" name="password" id="password" class="input" value="<?php echo $row['password'];?>" size="32">



							<select class="input styled-select slate" id="privilegio" name="privilegio">
								<option value="1" <?php if($row[ 'idprivilegio']=='Administrador' ) echo 'selected'; ?>>Administrador</option>
								<option value="2" <?php if($row[ 'idprivilegio']=='Usuario' ) echo 'selected'; ?>>Usuario</option>
							</select>


							<input type="submit" class="button" value="Modificar">
						</form>
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
