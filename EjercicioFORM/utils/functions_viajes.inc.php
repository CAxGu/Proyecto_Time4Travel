<?php
	function validate_viaje(){
		$error='';
		$filtro = array(
			'idviaje' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^([A-Z]{1}[0-9]{1,4})*$/')
			),
			
			'destino' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^.{1,30}$/')
			),


			'precio' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^[0-9]{2,4}$/')
			),

			'oferta' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{2}\s*$/')
			),
			
			'tipo' => array(
				'filter'=>FILTER_CALLBACK,
				'options'=>'validate_tipo'
			),


			'f_sal' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^.{1,20}$/')
			),


			'f_lleg' => array(
				'filter' => FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^.{1,20}$/')
			)
					
		);
		
		$resultado=filter_input_array(INPUT_POST,$filtro);
		if(!$resultado['idviaje']){
			$error='El ID del viaje debe tener 5 caracteres (1 letra y 4 numeros)';
		}elseif(!$resultado['destino']){
			$error='Debe seleccionar un destino de la lista';
		}elseif(!$resultado['precio']){
			$error='El precio debete tener de 2 a 4 caracteres numéricos';
		}elseif(!$resultado['oferta']){
			$error='La oferta debe tomar valor "Si" o "No"';
		}elseif(!$resultado['tipo']){
			$error='Debe seleccionar 1 tipo de viaje cómo mínimo';
		}elseif(!$resultado['f_sal']){
			$error='Formato fecha yyyy-mm-dd';
		}elseif(!$resultado['f_lleg']){
			$error='Formato fecha yyyy-mm-dd';
		}else{
			 return $return=array('resultado'=>true,'error'=>$error,'datos'=>$resultado);
		};
		return $return=array('resultado'=>false , 'error'=>$error,'datos'=>$resultado);
	};

	 function validate_tipo($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
	
	function debug($array){
		echo "<pre>";
		print_r($array);
		echo "</pre><br>";
	}
?>
