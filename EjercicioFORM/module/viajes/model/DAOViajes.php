<?php
    include("model/connect.php");
	
   class DAOViajes{
    function insert_viajes($datos){
			$idviajes=$datos['idviaje'];
            $destino=$datos['destino'];
            $precio=$datos['precio'];
            $oferta=$datos['oferta'];
            foreach ($datos['tipo'] as $indice) {
        	    $tipo=$tipo."$indice:";
                }
            $f_salida=$datos['f_sal'];
            $f_llegada=$datos['f_lleg'];

            $sql = "INSERT INTO viajes(codviaje, destino, precio, oferta, tipo, f_salida ,f_vuelta, hora_alta, fecha_alta)"
			." VALUES ('$idviajes','$destino','$precio','$oferta','$tipo','$f_salida','$f_llegada', time(now()), date(now()))";

            $conexion = connect::con();

            $res = mysqli_query($conexion, $sql);

            connect::close($conexion);
			return $res;
		}
		
		function select_all_viajes(){

			$sql = "SELECT * FROM viajes ORDER BY codviaje ASC";
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			
            return $res;
		}
		
		function select_viajes($idviajes){
			$sql = "SELECT * FROM viajes WHERE codviaje like '$idviajes'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_viajes($datos){
			$idviajes=$datos['idviaje'];
            $destino=$datos['destino'];
            $precio=$datos['precio'];
            $oferta=$datos['oferta'];
            foreach ($datos['tipo'] as $indice) {
        	    $tipo=$tipo."$indice:";
                }
            $f_salida=$datos['f_sal'];
            $f_llegada=$datos['f_lleg'];

            $sql = " UPDATE viajes SET codviaje='$idviajes', destino='$destino', precio='$precio', oferta='$oferta', tipo='$tipo', f_salida='$f_salida',"
        		. " f_vuelta='$f_llegada' WHERE codviaje='$idviajes'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_viajes($idviajes){
			$sql = "DELETE FROM viajes WHERE codviaje like '$idviajes'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

    }