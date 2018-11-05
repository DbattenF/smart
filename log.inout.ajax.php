<?php
session_start();
if ( !isset($_SESSION['username']) && !isset($_SESSION['userid']) ){
    if ( @$idcnx = @mysqli_connect('localhost','root','','biblio_t1') ){
             
       //LOGIN
	   if (isset($_POST['login_username'])){    
            $sql = 'SELECT user,passwd,id,rol,apellido,nombre FROM personas WHERE user="' . $_POST['login_username']. '" && passwd="' . md5($_POST['login_userpass']) . '" LIMIT 1';
            //echo $sql;
			if ( @$res = @mysqli_query($sql) ){	
                if ( @mysqli_num_rows($res) == 1 ){
                        
                    $user = @mysqli_fetch_array($res);
                         
                    $_SESSION['username']   = $user['user'];
                    $_SESSION['userid'] = $user['id'];
					          $_SESSION['rol'] = $user['rol'];
                    $_SESSION['lastname'] = $user['apellido'];
                    $_SESSION['name'] = $user['nombre'];
					echo 1;
                    //echo $user['rol'];     
                }
                else
                    echo 0;
            }
            else
                echo 0;
                 
        }
			
	//REGISTRO
	   if (isset($_POST['rec_username'])){    
            $sql = 'insert into padres (dni,nombre,apellido,alumno,telefono,direccion,email,user,password) values("' . $_POST['rec_dni'].'","' . $_POST['rec_nombre'] .
				  '","' . $_POST['rec_apellido'] .
				  '","' . $_POST['rec_alumno'] .
                  '","' . $_POST['rec_telefono'] .
                  '","' . $_POST['rec_direccion'] .
                  '","' . $_POST['rec_email'] .
                  '","' . $_POST['rec_username'] .
                  '","' . md5($_POST['rec_userpass']) .
                  '")';
            @mysqli_query($sql);
            $sql = 'insert into personas (nombre,apellido,email,user,passwd) values("'. $_POST['rec_nombre'] .
                  '","' . $_POST['rec_apellido'] .
                  '","' . $_POST['rec_email'] .
                  '","' . $_POST['rec_username'] .
                  '","' . md5($_POST['rec_userpass']) .
                  '","Padre")';
            @mysqli_query($sql);
                
            echo 1;
                 
        }
		
		
             
        mysqli_close($idcnx);
}
else{
    echo 0;
    }
	}
	
?>