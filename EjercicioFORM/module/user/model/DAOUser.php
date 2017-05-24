<?php
    include("/model/connect.php");
   class DAOUser{
		   /* function nuevo_registro($user){
			
			$sql = "INSERT INTO usuarios(usuario, password, email, nombre, apellidos, sexo ,f_nac, direccion, pais, hora_alta, fecha_alta)"
			." VALUES ('$user[usrnom]','$user[psswd]','$user[email]','$user[nom]','$user[ape]','$user[sexo]','$user[f_nac]','$user[direc]','$user[pais]', time(now()), date(now()))";
  
            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
			return $res;
		}*/

    
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
        	/*foreach ($datos[idioma] as $indice) {
        	    $pais=$pais."$indice:";
        	}*/

            $sql = "INSERT INTO usuarios(usuario, password, email, nombre, apellidos, sexo ,f_nac, direccion, pais, hora_alta, fecha_alta)"
			." VALUES ('$usernom','$psswd','$email','$nom','$ape','$sexo','$f_nac','$direc','$pais', time(now()), date(now()))";

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
		
		function select_user($user){
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
        	/*$comment=$datos[observaciones];
        	foreach ($datos[aficion] as $indice) {
        	    $hobby=$hobby."$indice:";
        	}*/

            $sql = " UPDATE usuarios SET usuario='$usrnom', password='$psswd', email='$email', nombre='$nom', apellidos='$ape', sexo='$sexo',"
        		. " f_nac='$f_nac', direccion='$direc', pais='$pais' WHERE usuario='$usrnom'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_user($user){
			$sql = "DELETE FROM usuarios WHERE usaurio='$usrnom'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

    }