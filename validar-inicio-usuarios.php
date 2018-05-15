<?php
include 'cn.php';

session_start();

$Administrador = $_POST['Administrador'];
$Usuario = $_POST['Usuario'];

$nombre_usuario=$_POST['nombre_usuario'];
$password=$_POST['password'];

$sql2=mysqli_query($conexion,"SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario' AND privilegio=1 ");
if($f2=mysqli_fetch_assoc($sql2)){
	if($password==$f2['password']){
		$_SESSION['id']=$f2['id'];
		$_SESSION['nombre_usuario']=$f2['nombre_usuario'];
		$_SESSION['privilegio']=$f2['privilegio'];

		echo '<script>alert("Bienvenido administrador '. $_SESSION['nombre_usuario'] .' ");</script> ';
		echo "<script>location.href='registro-usuario.php';</script>";
	}
	else{
		echo '<script>alert("CONTRASEÑA INCORRECTA");</script> ';
		echo "<script>location.href='index.php';</script>";
	}
}



$sql=mysqli_query($conexion,"SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario' AND privilegio=2 ");
if($f=mysqli_fetch_assoc($sql)){
	if($password==$f['password']){
		$_SESSION['id']=$f['id'];
		$_SESSION['nombre_usuario']=$f['nombre_usuario'];
		$_SESSION['privilegio']=$f['privilegio'];

		echo '<script>alert("Bienvenido '. $_SESSION['nombre_usuario'] .' ");</script> ';
		echo "<script>location.href='registro-usuario.php';</script>";
	}
	else{
		echo '<script>alert("CONTRASEÑA INCORRECTA");</script> ';
		echo "<script>location.href='index.php';</script>";
	}
}
else{
	echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR");</script> ';
	echo "<script>location.href='index.php';</script>";
}
