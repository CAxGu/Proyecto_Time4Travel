
function valida_id(texto) {
	if (texto.length > 0) {
		var reg = /^([A-Z]{1}[0-9]{1,4})*$/;
		return reg.test(texto);
	}
	return false;
}

function valida_destino(texto) {
	if (texto.length > 0) {
		return true;
	}
	return false;
}

function valida_precio(texto) {
	if (texto.length > 0) {
		var reg = /^[0-9]{2,4}$/;
		return reg.test(texto);
	}
	return false;
}

function valida_oferta(texto) {
	if (text.length > 0) {
		return true;
	} else {
		return false;
	}
}

function valida_tipo(array) {
	var i;
	var ok = 0;
	for (i = 0; i < array.length; i++) {
		if (array[i].checked) {
			ok++;
		}
	}

	if (ok >= 1) {
		return true;
	}
	if (ok == 0) {
		return false;
	}

}

function valida_fechaSalida(texto) {
	if (text.length > 0) {
		return true;
	} else {
		return false;
	}
}

function valida_fechaLlegada(texto) {
	if (text.length > 0) {
		return true;
	} else {
		return false;
	}
}

//REVISARLO
function dias_transcurridos($fecha_i, $fecha_f) {

	var f1 = Date.parse(fecha_i);
	var f2 = Date.parse(fecha_f);

	var date1 = new SimpleDateFormat("yyyy/mm/dd").parse(f1);
	var date2 = new SimpleDateFormat("yyyy/mm/dd").parse(f2);

	var milliseconds = date1.getTime() - date2.getTime();
	var a = parseInt(milliseconds);

	var dias = a / (1000 * 60 * 60 * 24);

	return dias;
}


//==================================


function validate_viaje() {
	if (document.getElementById('idviaje').value.length == 0) {
		document.getElementById('e_idviaje').innerHTML = "Tiene que escribir un ID";
		document.getElementById('idviaje').focus();
		return false;
	} else if (!valida_id(document.getElementById('idviaje').value)) {
		document.getElementById('e_idviaje').innerHTML = "Tiene que introducir un ID válido ej.'A01'";
		document.getElementById('idviaje').focus();
		return false;
	}

	document.getElementById('e_idviaje').innerHTML = "";


	if (document.getElementById('destino').value.length == 0) {
		document.getElementById('e_destino').innerHTML = "Debe seleccionar un destino";
		document.alta_viaje.destino.focus();
		return false;
	}
	document.getElementById('e_destino').innerHTML = "";


	if (document.getElementById('precio').value.length == 0) {
		document.getElementById('e_precio').innerHTML = "Tiene que escribir un precio";
		document.getElementById('precio').focus();
		return false;
	} else if (!valida_precio(document.getElementById('precio').value)) {
		document.getElementById('e_precio').innerHTML = "Debes introducir un precio entre 70 y 4000";
		document.getElementById('precio').focus();
		return false;
	}

	document.getElementById('e_precio').innerHTML = "";


	if (!valida_tipo(document.getElementsByName('tipo[]'))) {
		document.getElementById('e_tipo').innerHTML = "Debes seleccionar 1 tipo de viaje cómo mínimo";
		document.getElementById('tipo[]').focus();
		return false;
	}

	document.getElementById('e_tipo').innerHTML = "";


	if (document.getElementById('f_sal').value.length == 0) {
		document.getElementById('e_f_sal').innerHTML = "Debe seleccionar una fecha de salida";
		document.getElementById('f_sal').focus();
		return false;
	}
	document.getElementById('e_f_sal').innerHTML = "";

	if (document.getElementById('f_lleg').value.length == 0) {
		document.getElementById('e_f_lleg').innerHTML = "Debe seleccionar una fecha de vuelta";
		document.getElementById('f_lleg').focus();
		return false;
	} else if ((dias_transcurridos((document.getElementById('f_sal').value), (document.getElementById('f_lleg').value))) < 0) {
		document.getElementById('e_f_lleg').innerHTML = "Debes escoger una fecha de vuelta posterior a la de salida";
		document.getElementById('f_lleg').focus();
		return false;
	}
	document.getElementById('e_f_lleg').innerHTML = "";

	if (document.getElementById('alta_viaje')) {
		document.alta_viaje.submit();
		document.alta_viaje.action = "index.php?page=controller_viajes";
	} else if (document.getElementById('update_viaje')) {
		document.update_viaje.submit();
		document.update_viaje.action = "index.php?page=controller_viajes";
	}

}
