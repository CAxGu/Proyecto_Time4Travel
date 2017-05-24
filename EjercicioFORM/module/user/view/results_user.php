<?php

	include("utils/functions.inc.php");
	include("user/model/DAOUser.php");

	$user = $_SESSION['user'];
	debug($user);

	$daouser = new DAOUser();
	$rdo = $daouser->nuevo_registro($user);

	if($rdo){
			echo $_SESSION['msje'];
		}else{
			echo 'error';
		}