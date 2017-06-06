<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Alta de Usuario</title>
	<link href="view/css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript">
		$( function() {
			$( "#f_sal" ).datepicker({
			minDate: '0Y',
			maxDate: '+3Y',
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			changeYear: true
            });

        $( "#f_lleg" ).datepicker({
			minDate: '0Y',
			maxDate: '+3Y',
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			changeYear: true
			});
		} );
	</script>
	<script>
		$( function() {
			$( "#destino" ).selectmenu({width:253, maxHeight:300})
			.selectmenu( "menuWidget" )
			.addClass( "overflow" );
		} );
	</script>
	<script type="text/javascript" src="module/viajes/view/validate_viajes.js"></script>
</head>
<body>