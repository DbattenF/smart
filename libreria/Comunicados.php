<?php
include("motor.php");


class Comunicado{
 public $id_comunicado;
 public $a_emisor;
 public $n_emisor;
 public $a_receptor;
 public $n_receptor;
 public $titulo;
 public $texto;
 public $fecha;
 public $activo;

 
 
 function guardar(){  // crea cartel
   $sql="insert into comunicados(a_emisor,n_emisor,a_receptor,n_receptor,titulo,texto,fecha,activo)values('$this->a_emisor','$this->n_emisor','$this->a_receptor','$this->n_receptor','$this->titulo','$this->texto','$this->fecha','$this->activo')";
   //mysql_query($sql);
   $objConn = new Conexion();
   $objConn->enlace->query($sql);
   
 }
 
 /*function actualizar($nro=0)	// actualiza cartel
	{
	        
			$sql="update comunicados set categoria='$this->categoria', titulo='$this->titulo',texto='$this->texto'
			,imagen='$this->imagen',plantilla='$this->plantilla',v_desde='$this->v_desde'
			,v_hasta='$this->v_hasta',activo='$this->activo',link='$this->link' 
			,texto1='$this->texto1',texto2='$this->texto2',imagen1='$this->imagen1' 
			 where id_cartel = $nro";
			//mysql_query($sql); // ejecuta la consulta para actualizar
			$objConn = new Conexion();
            $objConn->enlace->query($sql);
            			
	}*/
	
 
/* function borrar($nro=0)	
	{
	        echo $nro;
			$sql="delete from comunicados where id_cartel = $nro";
			$objConn = new Conexion();
            $objConn->enlace->query($sql);
			
	
	}*/	
	
function traer_datos($nro=0) // declara el constructor, si trae el numero de persona lo busca 
	{
		if ($nro!=0)
		{
			$sql="select * from comunicados where id_comunicado = $nro";
			//$result=mysql_query($sql);
			$objConn = new Conexion();
            $result = $objConn->enlace->query($sql);
			$recs=mysqli_num_rows($result);
			$row=mysqli_fetch_array($result);
			$id=$row['id_comunicado'];
			
			return $row;
		}
	}	
 
 
 
 static function buscar($str){
    $sql="select * from comunicados where receptor like '%$str%' or titulo like '%$str%' or texto like '%$str% or id_comunicado='$str' ";
    //$rs=mysql_query($sql);
	$objConn = new Conexion();
	$rs=$objConn->enlace->query($sql);
	$est=array();
	//while($fila=mysql_fetch_assoc($rs) > 0){
	while($fila=mysqli_fetch_assoc($rs)){
	  $est[]=$fila;
	}return $est;
 
 }
 
 static function seleccionar_receptor($a_str,$n_str){
    $sql="select * from comunicados where a_receptor='$a_str' AND n_receptor='$n_str' AND activo = 1";
    //$rs=mysql_query($sql);
	$objConn = new Conexion();
	$rs=$objConn->enlace->query($sql);
	$est=array();
	//while($fila=mysql_fetch_assoc($rs) > 0){
	while($fila=mysqli_fetch_assoc($rs)){
	  $est[]=$fila;
	}return $est;
 
 }

 static function seleccionar_emisor($a_str,$n_str){
    $sql="select * from comunicados where a_emisor='$a_str' AND n_emisor='$n_str' AND activo = 1";
    //$rs=mysql_query($sql);
	$objConn = new Conexion();
	$rs=$objConn->enlace->query($sql);
	$est=array();
	//while($fila=mysql_fetch_assoc($rs) > 0){
	while($fila=mysqli_fetch_assoc($rs)){
	  $est[]=$fila;
	}return $est;
 
 }
 
 static function categorias(){
    $sql="select categoria,count(id_cartel) from comunicados where activo=1 group by categoria";
    
	//echo $sql;
    
    $objConn = new Conexion();
	$rs=$objConn->enlace->query($sql);
	$est=array();
	//while($fila=mysql_fetch_assoc($rs) > 0){
	while($fila=mysqli_fetch_assoc($rs)){
	  $est[]=$fila;
	}return $est;
 
 }
 
 
 
 }