function popUpInformacion(){
	// sweetalert2
	swal({
		title: 'Información sobre la aplicación',
		text: "Esta página está construida con diseño adaptativo provisto por 'Bootstrap'. Los lenguajes utilizados son html,css, php y javascript (con multiples librerias)",
		type: 'info',
		confirmButtonText: 'Aceptar'
	});
}
function popUpQuienesSomos(){
	swal({
		title: '¿Quién ha desarrollado esta aplicación?',
		text: "Esta aplicación está desarrollada por Carlos González González  y Juan Carrasco Mateo para el proyecto de fin de grado del modulo de Desarrollo de Aplicaciones Web. Esperemos que les guste.",
		confirmButtonText: 'Aceptar'
	});
}
function popUpInsertarMedico(){
	swal({
		title: 'Medico guardado',
		text: "El medico ha sido guardado satisfactoriamente",
		confirmButtonText: 'OK'
	});
}
function popUpActualizarTarea(){
	swal({
		title: 'Tarea Actualizada',
		text: "La Tarea fue actualizada con éxito",
		confirmButtonText: 'Vale'
	});
}
function popUpmodificarMedico(){
	swal({
		title: 'Medico Modificado',
		text: "El Medico fue modificado con exito",
		confirmButtonText: 'Vale'
	});
}
function popUpCrearCliente(){
	swal({
		title: 'Cliente creado',
		text: "El Cliente fue creado con exito",
		confirmButtonText: 'Vale'
	});
}
function popUpmodificarCliente(){
	swal({
		title: 'Cliente Modificado',
		text: "El Cliente fue modificado con exito",
		confirmButtonText: 'Vale'
	});
}
