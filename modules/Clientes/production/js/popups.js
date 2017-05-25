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
function popUpFechaCitaNoValida(){
	swal({
		title: 'Fecha no valida',
		text: "La fecha para la que ha pedido la cita no es válida, debe elegir una fecha posterior a hoy como mínimo",
		type: 'info',
		confirmButtonText: 'Aceptar'
	});
}
function popUpInsertarCita(){
	swal({
		title: 'Cita guardada',
		text: "Su cita ha sido registrada con éxito",
		type: 'success',
		confirmButtonText: 'Aceptar'
	});
}
function popUpEvento(titulo,descripcion){
	swal({
		title: titulo,
		text: descripcion,
	});
}