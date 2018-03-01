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
		<?php include("navegacion.php"); ?>

		<!-- Left side column. contains the logo and sidebar -->
		<?php include("menulateral-usuario.php");?>

		<!-- Page Content -->
		<div class="content-wrapper">
			<section class="content">
				<?php include("senales.php"); ?>
			</section>
		</div>

		<!-- /.container -->

		<!-- Footer -->
		<?php include("footer.php");?>
	</div>

</body>

</html>
