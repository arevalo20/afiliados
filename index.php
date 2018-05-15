<?php include "header.php";?>


<body class="skin-red fixed sidebar-collapse">

	<div class="wrapper">

		<!-- Page Content -->
		<div class="content-wrapper contenedor-login">
			<section class="content">
				<div class="row">
					<div class="col-md-12">
						<div class="login">
							<div class="loginimagen">
								<img src="img/logoacustica.png" width="70%" alt="" class="logo-login" />
							</div>

							<div class="login-content">
								<div class="login-header">
									<!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
									<h4 class="login-title">Inicio de secion</h4>
								</div>
								<div class="login-body">
									<form name="loginform" id="loginform" action="validar-inicio-usuarios.php" method="POST" onsubmit="return validarusario()" autocomplete="off">
										<div class="row">
											<div class="col-md-12">
												<input type="text" name="nombre_usuario" id="nombre_usuario" placeholder="Nombre de usuario" class="input" value="" size="30" />
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<input type="password" name="password" id="password" placeholder="Contraseña" class="input" value="" size="30" />
											</div>
										</div>
										<div class="row">
											<!-- <div class="col-md-6"> </div> -->
											<div class="col-md-4">
												<input type="submit" class="button btn-block" value="Entrar" />
											</div>
											<div class="col-md-4 col-md-offset-4">
												<!-- <input type="submit" class="button btn-block" value="Regresar" /> -->
												<a style="text-align: center;" href="http://grupoacustik.com.mx/" class="button-c btn-block">Regresar</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- /.container -->

		<!-- Footer -->
		<?php include "footer.php";?>
	</div>

	<script src="validar-usuario.js"></script>
	<script src="sweetalert2/sweetalert2.min.js"></script>
</body>

</html>
