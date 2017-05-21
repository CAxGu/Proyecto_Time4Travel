<?php
    include("connect.php");
    class DAOUser{
		    function nuevo_registro($user){
			
			$sql = "INSERT INTO usuarios(usuario, password, email, nombre, apellidos, sexo ,f_nac, direccion, pais, hora_alta, fecha_alta)"
			." VALUES ('$user[usrnom]','$user[psswd]','$user[email]','$user[nom]','$user[ape]','$user[sexo]','$user[f_nac]','$user[direc]','$user[pais]', time(now()), date(now()))";
  
            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
			return $res;
		}
    }