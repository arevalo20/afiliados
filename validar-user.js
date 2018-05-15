function validaruser() {
	var nombre, email, nombre_usuario, password;
	nombre = document.getElementById("nombre").value;
	email = document.getElementById("email").value;
	nombre_usuario = document.getElementById("nombre_usuario").value;
	password = document.getElementById("password").value;
	if (nombre === "" || email === "" || nombre_usuario === "" || password === "") {
		//swal('Lo sentimos', 'Todos los campos son obligatorios.', 'warning');
		swal({
			title: 'Lo sentimos',
			text: 'Todos los campos son obligatorios.',
			type: 'info',
			allowOutsideClick: false,
			showConfirmButton: false,
			timer: 2000,
			onOpen: () => {
				swal.hideLoading()
			}
		}).then((result) => {
			if (result.dismiss === 'timer') {
				console.log('I was closed by the timer')
			}
		})
		return false;
	} else if (nombre.length > 40) {
		//swal('Oops...', 'El nombre es muy largo.', 'warning');
		swal({
			title: 'Oops...',
			text: 'El nombre es muy largo.',
			type: 'error',
			allowOutsideClick: false,
			showConfirmButton: false,
			allowEscapeKey: true,
			showCloseButton: true,
		})
		return false;
	} else if (nombre_usuario.length > 30) {
		//swal('Oops...', 'El nombre de usuario es muy largo.', 'warning');
		swal({
			title: 'Oops...',
			text: 'El nombre de usuario es muy largo.',
			type: 'warning',
			allowOutsideClick: false,
			showConfirmButton: false,
			allowEscapeKey: true,
			showCloseButton: true,
		})
		return false;
	} else if (email.length > 40) {
		//swal('Oops...', 'El correo es invalido.', 'warning');
		swal({
			title: 'Oops...',
			text: 'El correo es invalido.',
			type: 'warning',
			allowOutsideClick: false,
			showConfirmButton: false,
			allowEscapeKey: true,
			showCloseButton: true,
		})
		return false;
	} else if (password.length > 20) {
		//swal('Lo lamento', 'La contraseña es invalida.', 'error');
		swal({
			title: 'Oops...',
			text: 'La contraseña es invalida.',
			type: 'error',
			allowOutsideClick: false,
			showConfirmButton: false,
			allowEscapeKey: true,
			showCloseButton: true,
		})
		return false;
	}
}