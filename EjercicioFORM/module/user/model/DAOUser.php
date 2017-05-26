<?php
    include("model/connect.php");
	
   class DAOUser{
    function insert_user($datos){
			$usrnom=$datos['usrnom'];
        	$psswd=$datos['psswd'];
            $email=$datos['email'];
        	$nom=$datos['nom'];
            $epe=$datos['ape'];
        	$sexo=$datos['sexo'];
        	$f_nac=$datos['f_nac'];
            $direc=$datos['direc'];
            $pais=$datos['pais'];

            $sql = "INSERT INTO usuarios(usuario, password, email, nombre, apellidos, sexo ,f_nac, direccion, pais, hora_alta, fecha_alta)"
			." VALUES ('$usrnom','$psswd','$email','$nom','$ape','$sexo','$f_nac','$direc','$pais', time(now()), date(now()))";

            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_user(){

			$sql = "SELECT * FROM usuarios ORDER BY usuario ASC";
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			
            return $res;
		}
		
		function select_user($usrnom){
			$sql = "SELECT * FROM usuarios WHERE usuario like '$usrnom'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_user($datos){
			$usrnom=$datos['usrnom'];
        	$psswd=$datos['psswd'];
            $email=$datos['email'];
        	$nom=$datos['nom'];
            $epe=$datos['ape'];
        	$sexo=$datos['sexo'];
        	$f_nac=$datos['f_nac'];
            $direc=$datos['direc'];
            $pais=$datos['pais'];

            $sql = " UPDATE usuarios SET usuario='$usrnom', password='$psswd', email='$email', nombre='$nom', apellidos='$ape', sexo='$sexo',"
        		. " f_nac='$f_nac', direccion='$direc', pais='$pais' WHERE usuario='$usrnom'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_user($usrnom){
			$sql = "DELETE FROM usuarios WHERE usuario like '$usrnom'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

    }