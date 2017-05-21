<?php
	function validate_user(){
		$error='';
		$filtro = array(
			'usrnom' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^.{4,20}$/')
			),
			
			'psswd' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^.{6,12}$/')
			),


			'email' => array(
				'filter'=>FILTER_CALLBACK,
				'options'=>'validatemail'
			),

			'nom' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{3,30}$/')
			),
			
			'ape' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^[a-zA-Z0-18]*$/')
			),


			'sexo' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^.{1,20}$/')
			),


			'f_nac' => array(
				'filter' => FILTER_VALIDATE_REGEXP,
				'options' => array('regexp' => '/\d{4}-\d{2}-\d{2}$/')
			),

			
			'direc' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^([Aa]cceso|[Aa]ccess|[Aa]dded|[Aa]gregado|[Aa]lameda|[Aa]lameda|[Aa]ldea|[Aa]lley|[Aa]ndador|[Aa]pple|[Aa]rea|[Aa]rea|[Aa]rrabal|[Aa]rrabal|[Aa]rroyo|[Aa]rroyo|[Aa]utopista|[Aa]ve|[Aa]ve.|[Aa]venida|[Aa]venue|[Aa]venue|[Bb]ack|[Bb]ajada|[Bb]arranco|[Bb]arranquil|[Bb]arranquil|[Bb]arrio|[Bb]arrio|[Bb]ehind|[Bb]elt|[Bb]lock|[Bb]loque|[Bb]oulevard|[Bb]ranch|[Bb]ridge|[Bb]uildings|[Bb]ulevar|[Cc]a[nñ]ada|[Cc]aleya|[Cc]aleya|[Cc]alle|[Cc]alleja|[Cc]allejon|[Cc]allizo|[Cc]allizo|[Cc]amino|[Cc]amp|[Cc]ampa|[Cc]ampo|[Cc]anyon|[Cc]armen|[Cc]arrer|[Cc]arrera|[Cc]arretera|[Cc]aserio|[Cc]aserio|[Cc]halet|[Cc]halet|[Cc]igarral|[Cc]inturon|[Cc]ity [Cc]ollege|[Cc]olegio|[Cc]olonia|[Cc]oncejo|[Cc]onjunto|[Cc]ontinuac|[Cc]ostanilla|[Cc]uesta|[Dd]eparture|[Dd]etras|[Dd]iputacion|[Dd]iseminados|[Dd]ock|[Dd]own|[Ee]dificios|[Ee]nsanche|[Ee]nsanche|[Ee]ntrada|[Ee]ntry|[Ee]scalinata|[Ee]spalda|[Ee]state|[Ee]xplanada|[Ee]xplanada|[Ee]xtramuros|[Ee]xtramuros|[Ee]xtrarradio|[Ff]errocarril|[Ff]ifth|[Ff]inca|[Ff]inca|[Ff]reeway|[Gg]arden|[Gg]ardens|[Gg]len|[Gg]lorieta|[Gg]lorieta|[Gg]ran [Vv]ia|[Gg]roup|[Gg]rupo|[Hh]illside|[Hh]uerta|[Hh]uerto|[Jj]ardines|[Ll]adera|[Ll]ado|[Ll]ago|[Ll]ake|[Ll]and|[Ll]ocation|[Ll]ugar|[Mm]alecon|[Mm]alecon|[Mm]anzana|[Mm]arket|[Mm]asias|[Mm]asias|[Mm]atch|[Mm]ercado|[Mm]onte|[Mm]onte|[Mm]uelle|[Mm]unicipality|[Mm]unicipio|[Nn]ear|[Oo]rchard|[Oo]wners|[Pp]aramo|[Pp]aramo|[Pp]arish|[Pp]ark|[Pp]arque|[Pp]arroquia|[Pp]articular|[Pp]artida|[Pp]asadizo|[Pp]asadizo|[Pp]asadizo|[Pp]asaje|[Pp]aseo|[Pp]ath|[Pp]ath|[Pp]laceta|[Pp]laceta|[Pp]laza|[Pp]oblado|[Pp]oligono|[Pp]oligono|[Pp]rolongacion|[Pp]uente|[Qq]uinta|[Rr]aconada|[Rr]aconada|[Rr]ailway|[Rr]amal|[Rr]ambla|[Rr]ambla|[Rr]amp|[Rr]ampa|[Rr]ide|[Rr]iera|[Rr]iera|[Rr]incon|[Rr]incona|[Rr]ise|[Rr]oad|[Rr]oad|[Rr]oad|[Rr]onda|[Rr]ound|[Rr]ua|[Rr]ua|[Rr]ural|[Ss]alida|[Ss]alon|[Ss]alon|[Ss]chool|[Ss]ector|[Ss]ector|[Ss]enda|[Ss]et|[Ss]ide|[Ss]olar|[Ss]olar|[Ss]quare|[Ss]tairway|[Ss]treet|[Ss]treet|[Ss]ubida|[Tt]errenos|[Tt]orrent|[Tt]orrente|[Tt]own|[Tt]ravesia|[Tt]ravesia|[Uu]rbanizacion|[Vv]alle|[Vv]alle|[Vv]ereda|[Vv]ereda|[Vv]ia|[Vv]ia|[Vv]iaduct|[Vv]iaducto|[Vv]ial|[Vv]illage|[Ww]alker|[Ww]ay)\s?\w*(\s?\w*)?(\s?\w*)?(\s?\w*)?/')
			),
			
			'pais' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^.{1,30}$/')
			)
					
		);
		
		$resultado=filter_input_array(INPUT_POST,$filtro);
		if(!$resultado['usrnom']){
			$error='El Nombre de Usuario debe tener mas de 4 caracteres';
		}elseif(!$resultado['psswd'] || $resultado['psswd']!=$_POST['psswd2'] ){
			$error='Password debe tener de 6 a 12 caracteres y las dos contrasenyas deben ser iguales';
		}elseif(!$resultado['email']){
			$error='El email debe contener de 5 a 50 caracteres y debe ser un email valido';
		}elseif(!$resultado['nom']){
			$error='El Nombre debe tener 3 o mas caracteres';
		}elseif(!$resultado['ape']){
			$error='El Apellidos debe tener 3 o mas caracteres';
		}elseif(!$resultado['sexo']){
			$error='El sexo debe ser Hombre, Mujer u Otro';
		}elseif(!$resultado['f_nac']){
			$error='Formato fecha yyyy-mm-dd';
		}elseif(!$resultado['direc']){
			$error='La direccion debe tener mas de 3 caracteres ';
		}elseif(!$resultado['pais']){
			$error='Debe seleccionar un pais de la lista';	
		}else{
			 return $return=array('resultado'=>true,'error'=>$error,'datos'=>$resultado);
		};
		return $return=array('resultado'=>false , 'error'=>$error,'datos'=>$resultado);
	};

	function validatemail($email){
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				if(filter_var($email, FILTER_VALIDATE_REGEXP, array('options' => array('regexp'=> '/^.{5,50}$/')))){
					return $email;
				}
			}
			return false;
	}
	
	function debug($array){
		echo "<pre>";
		print_r($array);
		echo "</pre><br>";
	}
?>
