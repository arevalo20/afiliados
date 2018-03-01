<header class="main-header">
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top">
		<!-- Logo -->
		<a href="index.php" class="logo">
			<span class="logo-lg">
				<img src="img/logoacustica.png" width="50%" alt="" class="" />
			</span>
		</a>
		<!-- Sidebar toggle button-->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-user fa-lg" aria-hidden="true"></i>
						<span class="hidden-xs" id="usuario"><?php echo $_SESSION["nombre_usuario"]; ?></span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="img/favicon-300x300.png" class="img-circle" alt="User Image">
							<p id="usuario">
								<?php echo $_SESSION["nombre_usuario"]; ?>
								<!--<small><?php echo $_SESSION["nombre_usuario"]; ?></small>-->
							</p>
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
							<div>
								<a href="logout.php" class="btn btn-default btn-flat">Cerrar sesión</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>
