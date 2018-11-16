<?php
session_start();
if ( !isset($_SESSION['username']) && !isset($_SESSION['userid']) ){
    if ( @$idcnx = mysqli_connect('localhost','root','','biblio_t1') ){
             
       //LOGIN
	   if (isset($_POST['login_username'])){   
            $sql = 'SELECT * FROM personas WHERE user="' . $_POST['login_username'] . '" AND passwd="' . md5($_POST['login_userpass']) . '"';
            //echo $sql;
			if ( @$res = mysqli_query($idcnx,$sql) ){	
                if ( mysqli_num_rows($res) == 1 ){
                        
                    $user = mysqli_fetch_array($res);
                         
                    $_SESSION['username']   = $user['user'];
                    $_SESSION['userid'] = $user['id'];
					          $_SESSION['rol'] = $user['rol'];
                    $_SESSION['lastname'] = $user['apellido'];
                    $_SESSION['name'] = $user['nombre'];
					          echo 1;
                    //echo $user['rol'];     
                }
                else
                    echo "No hay resultados";
            }
            else
                echo "Fallo la consulta";
                 
        }
			
	//REGISTRO
	   if (isset($_POST['rec_username'])){
          $sql = 'SELECT id FROM estudiante WHERE nombre="'. $_POST['rec_nom_alum'] .'" AND apellido="'. $_POST['rec_apel_alum'] .'" ';
          if( $res = mysqli_query($idcnx,$sql)){
            if( mysqli_num_rows($res)==1){
                 $user = mysqli_fetch_array($res);
                 $id_alum = $user['id'];
 
            $sql = 'INSERT into padres (id,dni,nombre,apellido,nom_alum,apel_alum,telefono,direccion,email,user,password) values("' . $id_alum .'","' . $_POST['rec_dni'].'","' . $_POST['rec_nombre'] .
				  '","' . $_POST['rec_apellido'] .
				  '","' . $_POST['rec_nom_alum'] .
                  '","' . $_POST['rec_apel_alum'] .
                  '","' . $_POST['rec_telefono'] .
                  '","' . $_POST['rec_direccion'] .
                  '","' . $_POST['rec_email'] .
                  '","' . $_POST['rec_username'] .
                  '","' . md5($_POST['rec_userpass']) .
                  '")';
            if (mysqli_query($idcnx,$sql)){
              echo "Registro en padres realizado correctamente";
            }else{
              var_dump($sql);
            }
            $sql = 'INSERT into personas (id,nombre,apellido,email,user,passwd,rol) values("'. $id_alum .'","'. $_POST['rec_nombre'] .
                  '","' . $_POST['rec_apellido'] .
                  '","' . $_POST['rec_email'] .
                  '","' . $_POST['rec_username'] .
                  '","' . md5($_POST['rec_userpass']) .
                  '","Padre")';
            mysqli_query($idcnx,$sql);
                
            echo 1;
              }
          }     
        }
		
		
             
        mysqli_close($idcnx);
}
else{
    echo 0;
    }
	}
	
?>