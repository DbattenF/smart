<?php
include("motor.php");

//ESTE CODIGO FUE MIGRADO DESDE LA EXTENSION ANTIGUA MYSQL A LA NUEVA MYSQLi
//UTILIZANDO LA INTERFAZ ORIENTADA A OBJETOS (http://php.net/manual/es/mysqli.quickstart.dual-interface.php)

class Persona{
 public $id;
 public $nombre;
 public $apellido;
 public $telefono;
 public $email;
 public $user;
 public $passwd;
 public $rol;
 
 function guardar(){  // crea la Persona
   $sql="insert into personas(nombre,apellido,email,user,passwd,rol)
   values('$this->nombre','$this->apellido','$this->email','$this->user','$this->passwd','$this->rol')";
   $objConn = new Conexion();
   $objConn->enlace->query($sql);
 }
 
 function actualizar($nro=0)	// actualiza la Persona
	{
	        if($this->passwd !=""){
			  $pass=md5($this->passwd);
			}
			if($this->passwd ==""){
			  $pass=md5("1234");
			}
			$sql="update personas set nombre='$this->nombre', apellido='$this->apellido',telefono='$this->telefono'
			,email='$this->email',user='$this->user',passwd='$pass'
			,rol='$this->rol' where id = $nro";
			//mysql_query($sql); // ejecuta la consulta para actualizar
			$objConn = new Conexion();
            $objConn->enlace->query($sql);
            			
	}
	
 function borrar($nro=0)	// elimina la Persona
	{
			$sql="delete from personas where id=$nro";
			//mysql_query($sql); // ejecuta la consulta para eliminar
			$objConn = new Conexion();
            $objConn->enlace->query($sql);
			
	
	}	
	
function traer_datos($nro=0) // declara el constructor, si trae el numero de persona lo busca 
	{
		if ($nro!=0)
		{
			$sql="select * from personas where id = $nro";
			//$result=mysql_query($sql);
			$objConn = new Conexion();
            $result = $objConn->enlace->query($sql);
			$recs=mysqli_num_rows($result);
			$row=mysqli_fetch_array($result);
			$id=$row['id'];
			//$nombre=$row['nombre'];
			//$nombre="ALGO";
			//$apellido=$row['apellido'];
			//$sexo=$row['sexo'];
			//$matricula=$row['matricula'];
			//$carrera=$row['carrera'];
			return $row;
		}
	}	
 
 
 
 static function buscar($str){
    $sql="select * from personas where user like '%$str%' or nombre like '%$str%' or apellido like '%$str%' or id='$str' or email like '%$str%' or rol like '%$str%'";
    //$rs=mysql_query($sql);
	$objConn = new Conexion();
	$rs=$objConn->enlace->query($sql);
	$est=array();
	//while($fila=mysql_fetch_assoc($rs) > 0){
	while($fila=mysqli_fetch_assoc($rs)){
	  $est[]=$fila;
	}return $est;
 
 }
 
 }