/*function validate_viaje() {

	if (document.getElementById('idviaje').value.length==0){
	    document.getElementById('e_idviaje').innerHTML = "Tiene que escribir un ID";
	    document.alta_viaje.idviaje.focus();
	    return 0;
    }

    document.getElementById('e_idviaje').innerHTML = "*";


    if (document.getElementById('destino').value.length==0){
	    document.getElementById('e_destino').innerHTML = "Debe seleccionar un destino";
	    document.formusers.destino.focus();
	    return 0;
    }
    document.getElementById('e_destino').innerHTML = "*";
    
    if (document.getElementById('precio').value.length==0){
	    document.getElementById('e_precio').innerHTML = "Tiene que escribir un precio";
	    document.formusers.precio.focus();
	    return 0;
    }else if ((document.getElementById('precio').value.length<70)||(document.getElementById('precio').value.length<70)){
        document.getElementById('e_precio').innerHTML = "El precio debe estar entre 70 y 4000";
	    document.formusers.precio.focus();
	    return 0;
    }
    document.getElementById('e_precio').innerHTML = "*";

    
    if (document.getElementById('tipo').value.length==0){
	    document.getElementById('e_tipo').innerHTML = "Tiene que seleccionar un tipo de viaje";
	    document.formusers.tipo.focus();
	    return 0;
    }
    document.getElementById('e_tipo').innerHTML = "*";

    
    if (document.getElementById('f_sal').value.length==0){
	    document.getElementById('e_f_sal').innerHTML = "Tiene que seleccionar una fecha";
	    document.formusers.f_sal.focus();
	    return 0;
    }
    document.getElementById('e_f_sal').innerHTML = "*";
    
    if (document.getElementById('f_lleg').value.length==0){
	    document.getElementById('e_f_lleg').innerHTML = "Tiene que seleccionar una fecha";
	    document.formusers.f_lleg.focus();
	    return 0;
    }
    document.getElementById('e_f_lleg').innerHTML = "*";

	if(document.getElementById('alta_user')){
		document.alta_user.submit();
		document.alta_user.action="index.php?page=controller_user";
	}else if(document.getElementById('update_user')){
		document.update_user.submit();
		document.update_user.action="index.php?page=controller_user";
	}else if(document.getElementById('alta_viaje')){
		document.alta_viaje.submit();
		document.alta_viaje.action="index.php?page=controller_user";
	}else if(document.getElementById('update_viaje')){
		document.update_viaje.submit();
		document.update_viaje.action="index.php?page=controller_viajes";
	}
}*/
