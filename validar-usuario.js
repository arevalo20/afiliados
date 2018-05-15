function validarusario() {
	var nombre_usuario, password;
	nombre_usuario = document.getElementById("nombre_usuario").value;
	password = document.getElementById("password").value;
	if (nombre_usuario === "" || password === "") {
		//swal('Lo sentimos', 'Todos los campos son obligatorios.', 'warning');
		swal({
			title: 'Lo sentimos',
			text: 'Todos los campos son obligatorios.',
			type: 'info',
			allowOutsideClick: false,
			showConfirmButton: false,
			timer: 2000,
			onOpen: () => {
				//swal.showLoading()
				swal.hideLoading()
			}
		}).then((result) => {
			if (result.dismiss === 'timer') {
				console.log('I was closed by the timer')
			}
		})
		return false;
	} else if (nombre_usuario.length > 20) {
		//swal('Oops...', 'El nombre de usuario es muy largo.', 'warning');
		swal({
			title: 'Oops...',
			text: 'El nombre de usuario es muy largo.',
			type: 'error',
			allowOutsideClick: false,
			showConfirmButton: false,
			allowEscapeKey: true,
			showCloseButton: true,
		})
		return false;
	} else if (password.length > 20) {
		//swal('Lo lamento', 'La contraseña es invalida.', 'error');
		swal({
			title: 'Lo lamento',
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