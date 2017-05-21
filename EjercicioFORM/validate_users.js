function validate_usuario(usrnom) {
    if (usrnom.length > 4) {
        var regexp = /^\w+$/;
        return regexp.test(usrnom);
    }
    return false;
}

function validate_password(psswd) {
    if (psswd.length > 5) {
        var regexp = /^[a-zA-Z0-12]*$/;
        return regexp.test(psswd);
    }
    return false;
}

function validate_password2(psswd, psswd2) {
	if(psswd === psswd2){
		return true;
    }
    return false;
}

function validate_email(email) {
    if (email.length > 0) {
        var regexp = /^[A-Z0-9._%+-]+@(?:[A-Z0-9-]+.)+[A-Z]{2,4}$/i;
        return regexp.test(email);
    }
    return false;
}


function validate_nombre(nom) {
    if (nom.length > 0){
        var regexp = /^\D{3,30}$/;
        return regexp.test(nom);
    }
    return false;
}


function validate_apellidos(ape) {
    if (ape.length > 2) {
        var regexp = /^([a-zA-ZùÙüÜäàáëèéïìíöòóüùúÄÀÁËÈÉÏÌÍÖÒÓÜÚñÑ\s]+)$/;
        return regexp.test(ape);
    }
    return false;
}

function validate_date_birthday(f_nac) {
    if (f_nac.length > 0) {
        return true;
    }
    return false;
}

function validate_direc(direc) {
    if (direc.length > 3) {
        var regexp = /^([Aa]cceso|[Aa]ccess|[Aa]dded|[Aa]gregado|[Aa]lameda|[Aa]lameda|[Aa]ldea|[Aa]lley|[Aa]ndador|[Aa]pple|[Aa]rea|[Aa]rea|[Aa]rrabal|[Aa]rrabal|[Aa]rroyo|[Aa]rroyo|[Aa]utopista|[Aa]ve|[Aa]ve.|[Aa]venida|[Aa]venue|[Aa]venue|[Bb]ack|[Bb]ajada|[Bb]arranco|[Bb]arranquil|[Bb]arranquil|[Bb]arrio|[Bb]arrio|[Bb]ehind|[Bb]elt|[Bb]lock|[Bb]loque|[Bb]oulevard|[Bb]ranch|[Bb]ridge|[Bb]uildings|[Bb]ulevar|[Cc]a[nñ]ada|[Cc]aleya|[Cc]aleya|[Cc]alle|[Cc]alleja|[Cc]allejon|[Cc]allizo|[Cc]allizo|[Cc]amino|[Cc]amp|[Cc]ampa|[Cc]ampo|[Cc]anyon|[Cc]armen|[Cc]arrer|[Cc]arrera|[Cc]arretera|[Cc]aserio|[Cc]aserio|[Cc]halet|[Cc]halet|[Cc]igarral|[Cc]inturon|[Cc]ity [Cc]ollege|[Cc]olegio|[Cc]olonia|[Cc]oncejo|[Cc]onjunto|[Cc]ontinuac|[Cc]ostanilla|[Cc]uesta|[Dd]eparture|[Dd]etras|[Dd]iputacion|[Dd]iseminados|[Dd]ock|[Dd]own|[Ee]dificios|[Ee]nsanche|[Ee]nsanche|[Ee]ntrada|[Ee]ntry|[Ee]scalinata|[Ee]spalda|[Ee]state|[Ee]xplanada|[Ee]xplanada|[Ee]xtramuros|[Ee]xtramuros|[Ee]xtrarradio|[Ff]errocarril|[Ff]ifth|[Ff]inca|[Ff]inca|[Ff]reeway|[Gg]arden|[Gg]ardens|[Gg]len|[Gg]lorieta|[Gg]lorieta|[Gg]ran [Vv]ia|[Gg]roup|[Gg]rupo|[Hh]illside|[Hh]uerta|[Hh]uerto|[Jj]ardines|[Ll]adera|[Ll]ado|[Ll]ago|[Ll]ake|[Ll]and|[Ll]ocation|[Ll]ugar|[Mm]alecon|[Mm]alecon|[Mm]anzana|[Mm]arket|[Mm]asias|[Mm]asias|[Mm]atch|[Mm]ercado|[Mm]onte|[Mm]onte|[Mm]uelle|[Mm]unicipality|[Mm]unicipio|[Nn]ear|[Oo]rchard|[Oo]wners|[Pp]aramo|[Pp]aramo|[Pp]arish|[Pp]ark|[Pp]arque|[Pp]arroquia|[Pp]articular|[Pp]artida|[Pp]asadizo|[Pp]asadizo|[Pp]asadizo|[Pp]asaje|[Pp]aseo|[Pp]ath|[Pp]ath|[Pp]laceta|[Pp]laceta|[Pp]laza|[Pp]oblado|[Pp]oligono|[Pp]oligono|[Pp]rolongacion|[Pp]uente|[Qq]uinta|[Rr]aconada|[Rr]aconada|[Rr]ailway|[Rr]amal|[Rr]ambla|[Rr]ambla|[Rr]amp|[Rr]ampa|[Rr]ide|[Rr]iera|[Rr]iera|[Rr]incon|[Rr]incona|[Rr]ise|[Rr]oad|[Rr]oad|[Rr]oad|[Rr]onda|[Rr]ound|[Rr]ua|[Rr]ua|[Rr]ural|[Ss]alida|[Ss]alon|[Ss]alon|[Ss]chool|[Ss]ector|[Ss]ector|[Ss]enda|[Ss]et|[Ss]ide|[Ss]olar|[Ss]olar|[Ss]quare|[Ss]tairway|[Ss]treet|[Ss]treet|[Ss]ubida|[Tt]errenos|[Tt]orrent|[Tt]orrente|[Tt]own|[Tt]ravesia|[Tt]ravesia|[Uu]rbanizacion|[Vv]alle|[Vv]alle|[Vv]ereda|[Vv]ereda|[Vv]ia|[Vv]ia|[Vv]iaduct|[Vv]iaducto|[Vv]ial|[Vv]illage|[Ww]alker|[Ww]ay)\s?\w*(\s?\w*)?(\s?\w*)?(\s?\w*)?/;
        return regexp.test(direc);
    }
    return false;
}

function validate_pais(pais) {
    if (pais.length > 0){
        return true;
    }
    return false;
}


function validate_user() {
    var result = true;

    var usrnom = document.getElementById('usrnom').value;
    var psswd = document.getElementById('psswd').value;
	var psswd2 = document.getElementById('psswd2').value;
	var email = document.getElementById('email').value;
    var nom = document.getElementById('nom').value;
	var ape = document.getElementById('ape').value;
    var f_nac = document.getElementById('f_nac').value;
    var direc = document.getElementById('direc').value;
    var pais = document.getElementById('pais').value;

	
	var v_usuario = validate_usuario(usrnom);
    var v_password = validate_password(psswd);
	var v_password2 = validate_password2(psswd, psswd2);
    var v_email = validate_email(email);
	var v_nombre = validate_nombre(nom);
	var v_apellidos = validate_apellidos(ape);
	var v_f_nacimiento = validate_date_birthday(f_nac);
    var v_direccion = validate_direc(direc);
    var v_pais = validate_pais(pais);

    if (!v_usuario) {
        document.getElementById('e_usrnom').innerHTML = "El usuario introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_usrnom').innerHTML = "";
    }

    if (!v_password) {
        document.getElementById('e_psswd').innerHTML = "La contraseña introducida no es valida";
        result = false;
    } else {
        document.getElementById('e_psswd').innerHTML = "";
    }
	
	if (!v_password2) {
        document.getElementById('e_psswd2').innerHTML = "No coinciden las contraseñas";
        result = false;
    } else {
        document.getElementById('e_psswd2').innerHTML = "";
    }

    if (!v_email) {
        document.getElementById('e_email').innerHTML = "El email introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_email').innerHTML = "";
    }

	if (!v_nombre) {
        document.getElementById('e_nom').innerHTML = "El nombre introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_nom').innerHTML = "";
    }
	
	if (!v_apellidos) {
        document.getElementById('e_ape').innerHTML = "Los apellidos introducidos no son validos";
        result = false;
    } else {
        document.getElementById('e_ape').innerHTML = "";
    }


    if (!v_f_nacimiento) {
        document.getElementById('e_f_nac').innerHTML = "La fecha introducida no es valida";
        result = false;
    } else {
        document.getElementById('e_f_nac').innerHTML = "";
    }
    

    if (!v_direccion) {
        document.getElementById('e_direc').innerHTML = "La dirección introducida no es valida";
        result = false;
    } else {
        document.getElementById('e_direc').innerHTML = "";
    }

    if (!v_pais) {
        document.getElementById('e_pais').innerHTML = "El país seleccionado no es valido";
        result = false;
    } else {
        document.getElementById('e_pais').innerHTML = "";
    }

    
	return result;
}
