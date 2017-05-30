function validate_user() {

	if (document.formusers.usrnom.value.length==0){
	    document.getElementById('e_usrnom').innerHTML = "Tiene que escribir su usuario";
	    document.formusers.usrnom.focus();
	    return 0;
    }

    document.getElementById('e_usrnom').innerHTML = "";


     if (document.formusers.psswd.value.length==0){
	    document.getElementById('e_psswd').innerHTML = "Tiene que escribir su password";
	    document.formusers.psswd.focus();
	    return 0;
    }
    document.getElementById('e_psswd').innerHTML = "";
    
    if (document.formusers.psswd2.value.length==0){
	    document.getElementById('e_psswd2').innerHTML = "Tiene que repetir su password";
	    document.formusers.psswd2.focus();
	    return 0;
    }
    document.getElementById('e_psswd2').innerHTML = "";

    
    if (document.formusers.email.value.length==0){
	    document.getElementById('e_email').innerHTML = "Tiene que escribir su email";
	    document.formusers.email.focus();
	    return 0;
    }
    document.getElementById('e_email').innerHTML = "";

    
    if (document.formusers.nom.value.length==0){
	    document.getElementById('e_nom').innerHTML = "Tiene que escribir su nombre";
	    document.formusers.nom.focus();
	    return 0;
    }
    document.getElementById('e_nom').innerHTML = "";
    
    if (document.formusers.ape.value.length==0){
	    document.getElementById('e_ape').innerHTML = "Tiene que escribir sus apellidos";
	    document.formusers.ape.focus();
	    return 0;
    }
    document.getElementById('e_ape').innerHTML = "";


    if (document.formusers.f_nac.value.length==0){
	    document.getElementById('e_f_nac').innerHTML = "Debe seleccionar una fecha de nacimiento";
	    document.formusers.f_nac.focus();
	    return 0;
    }
    document.getElementById('e_f_nac').innerHTML = "";
    
    
    if (document.formusers.direc.value.length==0){
	    document.getElementById('e_direc').innerHTML = "Tiene que escribir su direccion";
	    document.formusers.direc.focus();
	    return 0;
    }
    document.getElementById('e_direc').innerHTML = "";

    
    if (document.formusers.pais.value.length==0){
	    document.getElementById('e_pais').innerHTML = "Debe seleccionar un pais";
	    document.formusers.pais.focus();
	    return 0;
    }
    document.getElementById('e_pais').innerHTML = "";

	document.formusers.submit();
	document.formusers.action="index.php?page=controller_user";
}