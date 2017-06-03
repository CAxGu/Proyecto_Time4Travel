<?php
       

	include("utils/functions_viajes.inc.php"); 
	include("module/viajes/model/DAOViajes.php");
    
    session_start();

    switch($_GET['op']){
        case 'list';
        
            try{

                $daoviaje = new DAOViajes();              
            	$rdo = $daoviaje->select_all_viajes();

            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/viajes/view/list_viajes.php");
    		}
            break;
            
        case 'create';
            
            
            $check = true;
            
            if (isset($_POST['create'])){

                $check=validate_viaje();

                if ($check['resultado']){

                    $_SESSION['idviaje']=$_POST;

                    try{

                        $daoviaje = new DAOViajes();   

    		            $rdo = $daoviaje->insert_viajes($_POST);

                      //  echo("Hola no he hecho el insert: $_POST");
                        //die();

                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Registrado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_viajes&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
            include("module/viajes/view/create_viajes.php");
            break;
            
        case 'update';
            
            
            $check = true;
            
            if (isset($_POST['update'])){
                 $check=validate_viaje();
                
                if ($check){
                    $_SESSION['idviaje']=$_POST;
                    try{
                        $daoviaje = new DAOViajes();
    		            $rdo = $daoviaje->update_viajes($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_viajes&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
            
            try{
                $daoviaje = new DAOViajes();
            	$rdo = $daoviaje->select_viajes($_GET['id']);
            	$user=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
        	    include("module/viajes/view/update_viajes.php");
    		}
            break;
            
        case 'read';
            try{
                $daoviaje = new DAOViajes();
            	$rdo = $daoviaje->select_viajes($_GET['id']);
                $user=get_object_vars($rdo);
    
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/viajes/view/read_viajes.php");
    		}
            break;
            
        case 'delete';
            if (isset($_POST['delete'])){
                try{
                    $daoviaje = new DAOViajes();
                	$rdo = $daoviaje->delete_viajes($_GET['id']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	
            	if($rdo){
        			echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
        			$callback = 'index.php?page=controller_viajes&op=list';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }
            
            include("module/viajes/view/delete_viajes.php");
            break;
        default;
            include("view/inc/error404.php");
            break;
    }