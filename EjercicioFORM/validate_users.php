<?php

	function valida_usrnom($usrnom){
		$reg = "/^\w+$/";
		if (strlen($usrnom)<5 or !preg_match($reg, $usrnom)){
			return true;
		}else{
			return false;
		}
	}

	function valida_psswd($psswd) {
		$reg = "/^[a-zA-Z0-12]*$/";
		if (strlen($psswd)<6 or !preg_match($reg, $psswd)){
			return true;
		}else{
			return false;
		}
	}

	function valida_psswd2($psswd, $psswd2) {
		if($psswd === $psswd2){
			return true;
		}else{
			return false;
		}
	}
	

	function valida_email($email) {
		$reg = "/^[A-Z0-9._%+-]+@(?:[A-Z0-9-]+.)+[A-Z]{2,4}$/i";
		if (strlen($email)<1 or !preg_match($reg, $email)){
			return true;
		}else{
			return false;
		}
	}


	function valida_nom($nom) {
		$reg = "/^\D{3,30}$/";
		if (strlen($nom)<3 or !preg_match($reg, $nom)){
			return true;
		}else{
			return false;
		}
	}


	function valida_ape($ape) {
		$reg = "/^([a-zA-ZùÙüÜäàáëèéïìíöòóüùúÄÀÁËÈÉÏÌÍÖÒÓÜÚñÑ\s]+)$/";
		if (strlen($ape)<3 or !preg_match($reg, $ape)){
			return true;
		}else{
			return false;
		}
	}


	function valida_f_nac($f_nac) {
		if (strlen($f_nac)<1) {
			return true;
		}else{
			return false;
			}
	}

    function valida_direccion($direc) {
		$reg = "/^([Aa]cceso|[Aa]ccess|[Aa]dded|[Aa]gregado|[Aa]lameda|[Aa]lameda|[Aa]ldea|[Aa]lley|[Aa]ndador|[Aa]pple|[Aa]rea|[Aa]rea|[Aa]rrabal|[Aa]rrabal|[Aa]rroyo|[Aa]rroyo|[Aa]utopista|[Aa]ve|[Aa]ve.|[Aa]venida|[Aa]venue|[Aa]venue|[Bb]ack|[Bb]ajada|[Bb]arranco|[Bb]arranquil|[Bb]arranquil|[Bb]arrio|[Bb]arrio|[Bb]ehind|[Bb]elt|[Bb]lock|[Bb]loque|[Bb]oulevard|[Bb]ranch|[Bb]ridge|[Bb]uildings|[Bb]ulevar|[Cc]a[nñ]ada|[Cc]aleya|[Cc]aleya|[Cc]alle|[Cc]alleja|[Cc]allejon|[Cc]allizo|[Cc]allizo|[Cc]amino|[Cc]amp|[Cc]ampa|[Cc]ampo|[Cc]anyon|[Cc]armen|[Cc]arrer|[Cc]arrera|[Cc]arretera|[Cc]aserio|[Cc]aserio|[Cc]halet|[Cc]halet|[Cc]igarral|[Cc]inturon|[Cc]ity [Cc]ollege|[Cc]olegio|[Cc]olonia|[Cc]oncejo|[Cc]onjunto|[Cc]ontinuac|[Cc]ostanilla|[Cc]uesta|[Dd]eparture|[Dd]etras|[Dd]iputacion|[Dd]iseminados|[Dd]ock|[Dd]own|[Ee]dificios|[Ee]nsanche|[Ee]nsanche|[Ee]ntrada|[Ee]ntry|[Ee]scalinata|[Ee]spalda|[Ee]state|[Ee]xplanada|[Ee]xplanada|[Ee]xtramuros|[Ee]xtramuros|[Ee]xtrarradio|[Ff]errocarril|[Ff]ifth|[Ff]inca|[Ff]inca|[Ff]reeway|[Gg]arden|[Gg]ardens|[Gg]len|[Gg]lorieta|[Gg]lorieta|[Gg]ran [Vv]ia|[Gg]roup|[Gg]rupo|[Hh]illside|[Hh]uerta|[Hh]uerto|[Jj]ardines|[Ll]adera|[Ll]ado|[Ll]ago|[Ll]ake|[Ll]and|[Ll]ocation|[Ll]ugar|[Mm]alecon|[Mm]alecon|[Mm]anzana|[Mm]arket|[Mm]asias|[Mm]asias|[Mm]atch|[Mm]ercado|[Mm]onte|[Mm]onte|[Mm]uelle|[Mm]unicipality|[Mm]unicipio|[Nn]ear|[Oo]rchard|[Oo]wners|[Pp]aramo|[Pp]aramo|[Pp]arish|[Pp]ark|[Pp]arque|[Pp]arroquia|[Pp]articular|[Pp]artida|[Pp]asadizo|[Pp]asadizo|[Pp]asadizo|[Pp]asaje|[Pp]aseo|[Pp]ath|[Pp]ath|[Pp]laceta|[Pp]laceta|[Pp]laza|[Pp]oblado|[Pp]oligono|[Pp]oligono|[Pp]rolongacion|[Pp]uente|[Qq]uinta|[Rr]aconada|[Rr]aconada|[Rr]ailway|[Rr]amal|[Rr]ambla|[Rr]ambla|[Rr]amp|[Rr]ampa|[Rr]ide|[Rr]iera|[Rr]iera|[Rr]incon|[Rr]incona|[Rr]ise|[Rr]oad|[Rr]oad|[Rr]oad|[Rr]onda|[Rr]ound|[Rr]ua|[Rr]ua|[Rr]ural|[Ss]alida|[Ss]alon|[Ss]alon|[Ss]chool|[Ss]ector|[Ss]ector|[Ss]enda|[Ss]et|[Ss]ide|[Ss]olar|[Ss]olar|[Ss]quare|[Ss]tairway|[Ss]treet|[Ss]treet|[Ss]ubida|[Tt]errenos|[Tt]orrent|[Tt]orrente|[Tt]own|[Tt]ravesia|[Tt]ravesia|[Uu]rbanizacion|[Vv]alle|[Vv]alle|[Vv]ereda|[Vv]ereda|[Vv]ia|[Vv]ia|[Vv]iaduct|[Vv]iaducto|[Vv]ial|[Vv]illage|[Ww]alker|[Ww]ay)\s?\w*(\s?\w*)?(\s?\w*)?(\s?\w*)?/";
		if (strlen($direc)<3 or !preg_match($reg, $direc)){
			return true;
		}else{
			return false;
		}
	}


    function valida_pais($pais) {
		if (strlen($pais)<1){
			return true;
		}else{
			return false;
			}
	}


/*	function EsRequerido($texto){
		if($texto === "")
			return true;
		else 
			return false;
	}
	
	function EsTexto($texto){
		$reg="^[A-Za-z]+[A-Za-z0-9]*$";
		return ereg($reg,$texto);
	}
	
	function EsNumerico($texto){ 
		$reg = "^[0-9]+$";
		return ereg($reg, $texto); 
	}
*/
