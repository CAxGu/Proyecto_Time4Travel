
function valida_user(texto) {
	if (texto.length > 0) {
		var reg = /^.{4,20}$/;
		return reg.test(texto);
	}
	return false;
}

function valida_pass(texto) {
	if (texto.length > 0) {
		var reg = /^.{6,12}$/;
		return reg.test(texto);
	}
	return false;
}


function valida_pass2(psswd, psswd2) {
	if(psswd === psswd2){
		return true;
    }
    return false;
}


function valida_email(email) {
    if (email.length > 0) {
        var regexp = /^[A-Z0-9._%+-]+@(?:[A-Z0-9-]+.)+[A-Z]{2,4}$/i;
        return regexp.test(email);
    }
    return false;
}


function valida_nom(texto) {
	if (texto.length > 0) {
		var reg = /^\D{3,30}\s*$/;
		return reg.test(texto);
	}
	return false;
}

function valida_ape(texto) {
	if (texto.length > 0) {
		var reg = /^\D{3,30}\s*$/; 
		return reg.test(texto);
	}
	return false;
}


function valida_fechaNacimiento(texto) {
	if (text.length > 0) {
		return true;
	} else {
		return false;
	}
}


function valida_direcc(texto) {
	if (text.length > 0) {
		var reg = /^.{3,30}$/; 
		return reg.test(texto);
	} else {
		return false;
	}
}


function valida_pais(texto) {
	if (text.length > 0) {
		return true;
	} else {
		return false;
	}
}


//==================================



function validate_user() {
	if (document.getElementById('usrnom').value.length==0){
	    document.getElementById('e_usrnom').innerHTML = "Tiene que escribir su usuario";
	    document.getElementById('usrnom').focus();
	    return false;
    } else if (!valida_user(document.getElementById('usrnom').value)) {
		document.getElementById('e_usrnom').innerHTML = "Tiene que introducir un usuario válido";
		document.getElementById('usrnom').focus();
		return false;
	}

    document.getElementById('e_usrnom').innerHTML = "";


     if (document.getElementById('psswd').value.length==0){
	    document.getElementById('e_psswd').innerHTML = "Tiene que escribir su password";
	    document.getElementById('psswd').focus();
	    return false;
    } else if (!valida_pass(document.getElementById('psswd').value)) {
		document.getElementById('e_psswd').innerHTML = "Tiene que introducir un password válido (6 a 12 caracteres)";
		document.getElementById('psswd').focus();
		return false;
	}
	
    document.getElementById('e_psswd').innerHTML = "";
    
    if (document.getElementById('psswd2').value.length==0){
	    document.getElementById('e_psswd2').innerHTML = "Tiene que repetir su password";
	    document.getElementById('psswd2').focus();
	    return false;
    } else if (!valida_pass2((document.getElementById('psswd').value),(document.getElementById('psswd2').value))){
		document.getElementById('e_psswd2').innerHTML = "Las contraseñas no son iguales";
		document.getElementById('psswd2').focus();
		return false;
	}
	
    document.getElementById('e_psswd2').innerHTML = "";

    
    if (document.getElementById('email').value.length==0){
	    document.getElementById('e_email').innerHTML = "Tiene que escribir su email";
	    document.getElementById('email').focus();
	    return false;
    } else if (!valida_email(document.getElementById('email').value)) {
		document.getElementById('e_email').innerHTML = "Introduzca un email válido ej:'c@c.es'";
		document.getElementById('email').focus();
		return false;
	}

    document.getElementById('e_email').innerHTML = "";

    
    if (document.getElementById('nom').value.length==0){
	    document.getElementById('e_nom').innerHTML = "Tiene que escribir su nombre";
	    document.getElementById('nom').focus();
	    return false;
    } else if (!valida_nom(document.getElementById('nom').value)) {
		document.getElementById('e_nom').innerHTML = "Introduzca un nombre válido";
		document.getElementById('nom').focus();
		return false;
	}

    document.getElementById('e_nom').innerHTML = "";
    
    if (document.getElementById('ape').value.length==0){
	    document.getElementById('e_ape').innerHTML = "Tiene que escribir sus apellidos";
	    document.getElementById('ape').focus();
	    return false;
    } else if (!valida_ape(document.getElementById('ape').value)) {
		document.getElementById('e_ape').innerHTML = "Introduzca unos apellidos válidos";
		document.getElementById('ape').focus();
		return false;
	}

    document.getElementById('e_ape').innerHTML = "";


    if (document.getElementById('f_nac').value.length==0){
	    document.getElementById('e_f_nac').innerHTML = "Debe seleccionar una fecha de nacimiento";
	    document.getElementById('f_nac').focus();
	    return false;
    }

    document.getElementById('e_f_nac').innerHTML = "";
    
    
    if (document.getElementById('direc').value.length==0){
	    document.getElementById('e_direc').innerHTML = "Tiene que escribir su direccion";
	    document.getElementById('direc').focus();
	    return false;
    } else if (!valida_direcc(document.getElementById('direc').value)) {
		document.getElementById('e_direc').innerHTML = "Introduzca una direccion válida ej:'calle mayor n1 1ºA'";
		document.getElementById('direc').focus();
		return false;
	}

    document.getElementById('e_direc').innerHTML = "";


	if (document.getElementById('pais').value.length == 0) {
		document.getElementById('e_pais').innerHTML = "Debe seleccionar un pais";
		document.getElementById('pais').focus();
		return false;
	}
	document.getElementById('e_pais').innerHTML = "";

	if (document.getElementById('alta_user')) {
		document.alta_user.submit();
		document.alta_user.action = "index.php?page=controller_user";
	} else if (document.getElementById('update_user')) {
		document.update_user.submit();
		document.update_user.action = "index.php?page=controller_user";
	}
}