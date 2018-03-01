<?php
include 'cn.php';

// Recibir los datos y almacenarlos en variables
$nombre = $_POST ["nombre"];
$email = $_POST ["email"];
$nombre_usuario = $_POST ["nombre_usuario"];
$password = $_POST ["password"];
$privilegio = $_POST ["privilegio"];

// Consulta para insertar
$insertar = "INSERT INTO usuarios(nombre, email, nombre_usuario, password, privilegio) VALUES ('$nombre', '$email', '$nombre_usuario', '$password', '$privilegio')";

// Verificar user
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' ");
if (mysqli_num_rows($verificar_usuario) > 0) {
	echo '<script>
	alert("El usuario ya esta registrado");
	window.history.go(-1);
	</script>';
	exit;
}

// Verificar mail
$verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email' ");
if (mysqli_num_rows($verificar_email) > 0) {
	echo '<script>
	alert("El correo ya esta registrado");
	window.history.go(-1);
	</script>';
	exit;
}

// Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo '<script>
	alert("Error al registrarse");
	window.history.go(-1);
	</script>';
} else{
	echo '<script>
	alert("Usuario registrado exitosamente");
	window.history.go(-1);
	</script>';
}

//cerrar coneccion
mysqli_close($conexion);
?>
