<?php
include_once("motor.php");

//ESTE CODIGO FUE MIGRADO DESDE LA EXTENSION ANTIGUA MYSQL A LA NUEVA MYSQLi
//UTILIZANDO LA INTERFAZ ORIENTADA A OBJETOS (http://php.net/manual/es/mysqli.quickstart.dual-interface.php)

class Estudiante{
	public $nombre;
	public $apellido;
	public $sexo;
	public $curso;
	public $email;
	public $user;
	public $passwd;
	public $rol;
 
 function guardar(){  // crea el estudiante cargado en los atributos
   $sql="INSERT into estudiante(nombre,apellido,sexo,curso,email,user,passwd)
   values('$this->nombre','$this->apellido','$this->sexo','$this->curso','$this->email','$this->user','$this->passwd')";
   //mysql_query($sql);
   $objConn = new Conexion();
   $objConn->enlace->query($sql);
 }
 
 function actualizar($nro=0)	// actualiza el estudiante cargado en los atributos
	{
	$sql="update estudiante set nombre='$this->nombre', apellido='$this->apellido',sexo='$this->sexo',curso='$this->curso',email='$this->email',user='$this->user',passwd='$this->passwd' where id = $nro";
	//mysql_query($sql); // ejecuta la consulta para actualizar
	$objConn = new Conexion();
    $objConn->enlace->query($sql);
            			
	}
	
 function borrar($nro=0)	// elimina el estudiante
	{
			$sql="delete from estudiante where id=$nro";
			//mysql_query($sql); // ejecuta la consulta para eliminar
			$objConn = new Conexion();
            $objConn->enlace->query($sql);
			
	
	}	
	
function traer_datos($nro=0) // declara el constructor, si trae el numero de estudiante lo busca 
	{
		if ($nro!=0)
		{
			$sql="select * from estudiante where id = $nro";
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
    $sql="select * from estudiante where curso like '%$str%' or nombre like '%$str%' or apellido like '%$str%' or id='$str'";
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