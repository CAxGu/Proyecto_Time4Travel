<?php
	//if (!isset($_GET['page'])) {

		switch($_GET['page']){
				case "home";
					include("module/inicio/view/home.php");
					break;
				case "controller_user";
					include("module/user/controller/".$_GET['page'].".php");
					break;
				case "services";
					include("module/services/".$_GET['page'].".php");
					break;
				case "aboutus";
					include("module/aboutus/".$_GET['page'].".php");
					break;
				case "contactus";
					include("module/contactus/".$_GET['page'].".php");
					break;
				case "404";
					include("view/inc/error".$_GET['page'].".php");
					break;
				case "503";
					include("view/inc/error".$_GET['page'].".php");
					break;
				default;
					include("module/inicio/view/home.php");
					break;
			}
	/*}else{
		include("view/inc/error".$_GET['page'].".php");
	}*/
?>