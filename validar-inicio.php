<?php 
include 'cn.php';

$nombre_usuario = $_POST['nombre_usuario'];
$password = $_POST['password'];

	//conctar a la base de datos
$consulta = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' and password = '$password' ";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
	echo "<script>alert('Error en la autentificación');</script>";
	header("location:registro-usuario.php");
}
else {
	echo "<script>alert('Error en la autentificación'); window.history.go(-1);</script>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
