<?php
session_start();
if ( !isset($_SESSION['username']) && !isset($_SESSION['userid']) ){
    if ( @$idcnx = @mysql_connect('localhost','root','') ){
             
        if ( @mysql_select_db('biblio_t1',$idcnx) ){
       //LOGIN
	   if (isset($_POST['login_username'])){    
            $sql = 'SELECT user,passwd,id,rol,apellido,nombre FROM personas WHERE user="' . $_POST['login_username']. '" && passwd="' . md5($_POST['login_userpass']) . '" LIMIT 1';
            //echo $sql;
			if ( @$res = @mysql_query($sql) ){	
                if ( @mysql_num_rows($res) == 1 ){
                        
                    $user = @mysql_fetch_array($res);
                         
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
            $sql = 'insert into padres (user,passwd,email,rol) values("' . $_POST['rec_username'].'","' . md5($_POST['rec_userpass']) .
				  '","' . $_POST['rec_email'] .
				  '")';
            @mysql_query($sql);
                
            echo 1;
                 
        }
		
		
             
        mysql_close($idcnx);
    }
    else
        echo 0;
}
else{
    echo 0;
    }
	}
	
?>