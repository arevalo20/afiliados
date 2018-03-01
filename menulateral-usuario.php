<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="img/avatar04.png" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<!--<p>Nombre de usuario</p>-->
				<p class="usuario">
					<?php echo $_SESSION["nombre_usuario"]; ?>
				</p>
				<a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Buscar...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="header">MENU DE NAVEGACIÓN</li>
			<li class="active treeview">
				<a href="senalafiliadas.php">
					<i class="fa fa-play"></i>
					<span>Señal para afiliadas</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
			</li>
			<li class="treeview">
				<a href="notas-usuario.php">
					<i class="fa fa-wrench"></i>
					<span>Notas</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
			</li>
			<!-- <li class="treeview">
				<a href="#">
					<i class="fa fa-wrench"></i>
					<span>Reportes</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
			</li> -->
			<li class="treeview">
				<a href="#">
					<i class="fa fa-tachometer"></i>
					<span>Dashboard</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
