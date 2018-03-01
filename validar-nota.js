function validacion() {
	var img_nota, nombre_nota, link_nota, id_usuario, expresion;
	img_nota = document.getElementById("img_nota").value;
	nombre_nota = document.getElementById("nombre_nota").value;
	link_nota = document.getElementById("link_nota").value;
	//id_usuario = document.getElementById("id_usuario").value;

	expresion = /\w+@\w+\.+[a-z]/;

	if (img_nota === "" || nombre_nota === "" || link_nota === "" || id_usuario === "") {
		swal('Es obligatorio', 'Todos los campos son obligatorios.', 'error')
		return false;
	} else if (img_nota.length > 100) {
		swal('Oops...', 'La imagen es es muy grande.', 'warning')
		return false;
	} else if (nombre_nota.length > 100) {
		swal('Oops...', 'El nombre es muy largo.', 'error')
		return false;
	} else if (link_nota.length > 100) {
		swal('Oops...', 'El link es muy largo.', 'error')
		return false;
	}	else if (id_usuario.length > 8) {
		swal('Oops...', 'El Usuario no es valido.', 'error')
		return false;
	}
}
