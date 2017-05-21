<?php
	include("functions.inc.php");
	include("validate_users.php");
	session_start();

	$error = false;
	$error_usrnom = false;
	$error_psswd = false;
	$error_psswd2 = false;
	$error_email = false;
	$error_nom = false;
	$error_ape = false;
	$error_f_nac = false;
	$error_direc = false;
	$error_pais = false;


	if (isset($_POST['alta'])) {
		$error_usrnom = valida_usrnom($_POST['usrnom']);
		if($error_usrnom){ 
			$error_usrnom = "El nombre no puede estar en blanco";
			$error = true;
		}

		$error_psswd = valida_psswd($_POST['psswd']);
		if($error_psswd){ 
			$error_psswd = "La contraseña no puede estar en blanco";
			$error = true;
		}

		$error_psswd2 = valida_psswd2($_POST['psswd2']);
		if($error_psswd2){ 
			$error_psswd2 = "La confirmación no puede estar en blanco";
			$error = true;
		}

		$error_email = valida_email($_POST['email']);
		if($error_email){ 
			$error_email = "El email no puede estar en blanco";
			$error = true;
		}

		$error_nom = valida_nom($_POST['nom']);
		if($error_nom){ 
			$error_nom = "El nombre no puede estar en blanco";
			$error = true;
		}

		$error_ape = valida_ape($_POST['ape']);
		if($error_ape){ 
			$error_ape = "Los apellidos no pueden estar en blanco";
			$error = true;
		}

		$error_f_nac = valida_f_nac($_POST['f_nac']);
		if($error_f_nac){ 
			$error_f_nac = "Su fecha de nacimiento no puede estar en blanco";
			$error = true;
		}

		$error_direc = valida_direccion($_POST['direc']);
		if($error_direc){ 
			$error_direc = "La dirección no puede estar en blanco";
			$error = true;
		}

		$error_pais = valida_pais($_POST['pais']);
		if($error_pais){ 
			$error_pais = "Debe seleccionar un pais";
			$error = true;
		}

		if (!$error) {
			//debug($_POST);
			//exit();
			
			$mensaje="Su registro se ha efectuado correctamente para finalizar compruebe que ha recibido un correo de validacion y siga las instrucciones del correo";
			$_SESSION['user']=$_POST;
			$_SESSION['msje']=$mensaje;
			$callback = 'results_users.php';

			//header("Location:$callback");
			die('<script>top.location.href="'.$callback .'";</script>');
		}
	}
	include 'form_users.php';
