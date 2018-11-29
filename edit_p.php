<?php
//include("libreria/motor.php");
include_once("libreria/persona.php");
include_once("libreria/estudiante.php");
include_once("libreria/Directivo.php");

$persona = new Persona();
$directivo = new Directivo();
$estudiante = new estudiante();

global $nombre;
global $apellido;
global $telefono;
global $direccion;
global $sexo;
global $curso;
global $email;
global $user;
global $passwd;
global $rol;
global $leyenda;

if (!empty($_POST)) {

    $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : 'actualizar' ;
	//echo $operacion;
	if ($operacion == 'edicion'){

		$id=$_POST['id_pers'];  
		$P=Persona::traer_datos($id);
		  
		if ($P['rol']=='Estudiante'){
		  	$pers=estudiante::buscar($P['apellido']);
		  	foreach($pers as $personas){
		  	$E=estudiante::traer_datos($personas['id']);
		  	
		  	$nombre=$E['nombre'];
			$apellido=$E['apellido'];
			$sexo=$E['sexo'];
			$curso=$E['curso'];
			$email=$E['email'];
			$user=$E['user'];
			$passwd=$E['passwd'];
			$accion=$_SERVER['HTTP_REFERER'].'?operacion=actualizar&id_pers='. $E['id'];
			$btn_txt='Actualizar';
			$leyenda='Modificar datos ';
			$id=$E['id'];
			}
		  }

		if ($P['rol']=='Docente' || $P['rol']=='Directivo'){
		  	$pers=Directivo::buscar($P['apellido']);
		  	foreach($pers as $personas){
		  	$D=Directivo::traer_datos($personas['id']);
		  	}
		    $nombre=$D['nombre'];
			$apellido=$D['apellido'];
			$email=$D['email'];
			$user=$D['user'];
			$passwd=$D['passwd'];
			$rol=$D['rol'];
			$accion=$_SERVER['HTTP_REFERER'].'?operacion=actualizar&id_pers='. $D['id'];
			$btn_txt='Actualizar';
			$leyenda='Modificar datos ';
			$id=$D['id'];
			}
		}
	
	if ($operacion == 'baja'){
	  
	  $id=$_POST['id_pers'];
	  $P=Persona::traer_datos($id);
	  
	  if ($P['rol']=='Estudiante'){
	  	$pers=estudiante::buscar($P['apellido']);
	  	foreach($pers as $personas){
	  	$E=estudiante::traer_datos($personas['id']);
	  	}
	  	$nombre=$E['nombre'];
		$apellido=$E['apellido'];
		$sexo=$E['sexo'];
		$curso=$E['curso'];
		$email=$E['email'];
		$user=$E['user'];
		$passwd=$E['passwd'];
		$accion=$_SERVER['HTTP_REFERER'].'?operacion=borrar&id_pers='. $E['id'];
		$btn_txt='Borrar';
		$leyenda='Eliminar';
		$id=$E['id'];
	  }
	  if ($P['rol']=='Docente' || $P['rol']=='Directivo'){
	  	$pers=Directivo::buscar($P['apellido']);
	  	foreach($pers as $personas){
	  	$D=Directivo::traer_datos($personas['id']);
	  	}
	    $nombre=$D['nombre'];
		$apellido=$D['apellido'];
		$email=$D['email'];
		$user=$D['user'];
		$passwd=$D['passwd'];
		$rol=$D['rol'];
		$accion=$_SERVER['HTTP_REFERER'].'?operacion=borrar&id_pers='. $D['id'];
		$btn_txt='Borrar';
		$leyenda='Eliminar';
		$id=$D['id'];
		}
	}
}

?>
<script type="text/javascript">
function mostrar(id) {
    if (id == "estudiante") {
        $("#estudiante").show();
        $("#docente").hide();
        $("#directivo").hide();
        $("#preceptor").hide();
    }

    if (id == "docente") {
        $("#estudiante").hide();
        $("#docente").show();
        $("#directivo").hide();
        $("#preceptor").hide();
    }

    if (id == "directivo") {
        $("#estudiante").hide();
        $("#docente").hide();
        $("#directivo").show();
        $("#preceptor").hide();
    }

    if (id == "preceptor") {
        $("#estudiante").hide();
        $("#docente").hide();
        $("#directivo").hide();
        $("#preceptor").show();
    }
}
</script>
<div id="capa_d"> 
<div class="container">
  
<div class="row" >
 
<div class="col-sm-6">
  <legend><?php echo $leyenda;?></legend>
  <div id="capa_d"> 
	<div class="container">
	<div class="row" >
	<div class="col-sm-6" > 
<form action="" method="post">
    Rol: 
    <select id="status" name="rol" onChange="mostrar(this.value);">
    	<option selected="selected" disabled="disabled">Seleccione...</option>
        <option value="estudiante">Estudiante</option>
        <option value="docente">Docente</option>
        <option value="directivo">Directivo</option>
     </select>
</form>
<div id="estudiante" style="display: none;">
  <form  role="form" method="POST" action="<?php echo $accion;?>">
  <div class="row"> 
      <div class="col-xs-2">
        
        
     <?php 
	 if (isset($operacion)){
			if ($operacion == 'edicion' || $operacion == 'baja' ) {
			    /*echo $nombre;*/
				?>
				<label for="id_usuario" >ID:</label>
				<input id="id_pers" name="id_pers" type="text" class="form-control" disabled value="<?php echo $id; ?>"/>
				<?php
			}
		}	
        ?> 
      </div>  	   
      <div class="col-xs-5">
			 <div class="form-group">
			   <label for="ejemplo_apellido">Nombre/s</label>
			   <input type="text"  size="20" name="txtNombre" class="form-control" id="ejemplo_nombre"
					   placeholder="Introduce el nombre" value="<?php echo $nombre; ?>"/>
			 </div>
	   </div>		   
	  
	   <div class="col-xs-5">
			 <div class="form-group">
			  <label for="ejemplo_nombre">Apellido/s</label>
			  <input type="text"  size="20" name="txtApellido" class="form-control" id="ejemplo_Apellido"
					   placeholder="Introduce el Apellido" value="<?php echo $apellido; ?>"/>
			 </div> 
	   </div>  
	  </div>
	  
	 <div class="row">   
		   <div class="col-xs-6">
			 <div  class="form-group">
			 <label>Sexo</label>
			    <div class="radio">
			     <label>
				 <?php
				 if($sexo==NULL){
				 $ch_m="checked";$ch_f="";}
				 if($sexo=='Masculino'){
				  $ch_m="checked";$ch_f="";
				 }
				 if($sexo=='Femenino'){
				  $ch_m="";$ch_f="checked";
				 }
				 
				 ?>
				  <input type="radio" name="txtSexo" id="sexo_1" value="Femenino" <?php echo $ch_f; ?>>
				  Femenino
			     </label>
			    </div>			  
			    <div class="radio">
			     <label>
				  <input type="radio" name="txtSexo" id="sexo_2" value="Masculino"  <?php echo $ch_m; ?>>
				  Masculino
			     </label>
			    </div>				 
			 </div> 
		   </div>
	  </div>
	  
	  <div class="row">  	   
		   <div class="col-xs-6">
			 <div class="form-group">
			   <label for="ejemplo_email">E-Mail</label>
			   <input type="text"  size="20" name="txtEmail" class="form-control" id="ejemplo_email"
					   placeholder="correo electronico" value="<?php echo $email; ?>"/>
			 </div>
		   </div>		   
		   		   
	  </div>
	  
	
	   <div class="row">  

          	   
          <div class="row">		  
	  <div class="col-xs-6">
			 <div  class="form-group">   
				 <label>Cursando</label>
				   <select class="form-control" name="txtCarrera" >
				   	  <option><?php echo $curso; ?></option>
				      <option>1er Grado</option>
					  <option>2do Grado</option>
					  <option>3er Grado</option>
					  <option>2do Año</option>
					  <option>3er Año</option>
					  <option>4to Año</option>
					  <option>5to Año</option>
					  <option>6to Año</option>
					  <option>First Certificated Exam 1</option>
					  <option>First Certificated Exam 2</option>
				   </select>
			 </div>   
			</div>
		</div>

	  
	  
	 <div class="row">		
	 <div class="col-xs-4">
			 <div class="form-group">
			   <label for="ejemplo_user">Usuario</label>
			   <input type="text"  size="20" name="txtUser" class="form-control" id="ejemplo_user"
					   placeholder="Nombre de usuario" value="<?php echo $user; ?>"/>
			 </div>
		   </div>	
	 <div class="col-xs-4">
			 <div class="form-group">
			   <label for="ejemplo_pass">Contraseña</label>
			   <input type="password"  size="20" name="txtPass" class="form-control" id="ejemplo_pass"
					   placeholder="Cambiar Pass" value=""/>
			 </div>
		   </div>	
	
	 <div class="col-xs-4">
			 <div class="form-group">
			   <label for="ejemplo_pass1">Repetir Contraseña</label>
			   <input type="password"  size="20" name="txtPass1" class="form-control" id="ejemplo_pass1"
					   placeholder="Cambiar Pass" value=""/>
			 </div>
		   </div>	
	
	 
	 </div>
		 
  <button method="post" type="submit" class="btn btn-default" ><?php echo $btn_txt;?></button>
   
 </div>
 </form>
</div>
<div id="estudiante" style="display: none;">
  <form  role="form" method="POST" action="<?php echo $accion;?>">
  <div class="row"> 
      <div class="col-xs-2">
        
        
     <?php 
	 if (isset($operacion)){
			if ($operacion == 'edicion' || $operacion == 'baja' ) {
			    /*echo $nombre;*/
				?>
				<label for="id_usuario" >ID:</label>
				<input id="id_pers" name="id_pers" type="text" class="form-control" disabled value="<?php echo $id; ?>"/>
				<?php
			}
		}	
        ?> 
      </div>  	   
      <div class="col-xs-5">
			 <div class="form-group">
			   <label for="ejemplo_apellido">Nombre/s</label>
			   <input type="text"  size="20" name="txtNombre" class="form-control" id="ejemplo_nombre"
					   placeholder="Introduce el nombre" value="<?php echo $nombre; ?>"/>
			 </div>
	   </div>		   
	  
	   <div class="col-xs-5">
			 <div class="form-group">
			  <label for="ejemplo_nombre">Apellido/s</label>
			  <input type="text"  size="20" name="txtApellido" class="form-control" id="ejemplo_Apellido"
					   placeholder="Introduce el Apellido" value="<?php echo $apellido; ?>"/>
			 </div> 
	   </div>  
	  </div>
	  
	 <div class="row">   
		   <div class="col-xs-6">
			 <div  class="form-group">
			 <label>Sexo</label>
			    <div class="radio">
			     <label>
				 <?php
				 if($sexo==NULL){
				 $ch_m="checked";$ch_f="";}
				 if($sexo=='Masculino'){
				  $ch_m="checked";$ch_f="";
				 }
				 if($sexo=='Femenino'){
				  $ch_m="";$ch_f="checked";
				 }
				 
				 ?>
				  <input type="radio" name="txtSexo" id="sexo_1" value="Femenino" <?php echo $ch_f; ?>>
				  Femenino
			     </label>
			    </div>			  
			    <div class="radio">
			     <label>
				  <input type="radio" name="txtSexo" id="sexo_2" value="Masculino"  <?php echo $ch_m; ?>>
				  Masculino
			     </label>
			    </div>				 
			 </div> 
		   </div>
	  
	  
		<div class="col-xs-6">
			  <div class="form-group">
				<label for="ejemplo_dni">DNI</label>
				<input type="text"  size="20" name="txtDni" class="form-control" id="ejemplo_dni"
				<input type="text"  size="20" name="txtni" class="form-control" id="ejemplo_dni"
					   placeholder="Introduce el DNI" value="<?php echo $dni; ?>"/>
			  </div> 
		</div> 
	  </div>
	  
	  <div class="row">  	   
		   <div class="col-xs-6">
			 <div class="form-group">
			   <label for="ejemplo_email">E-Mail</label>
			   <input type="text"  size="20" name="txtEmail" class="form-control" id="ejemplo_email"
					   placeholder="correo electronico" value="<?php echo $email; ?>"/>
			 </div>
		   </div>		   
		   
		   <div class="col-xs-6">
			 <div class="form-group">
			   <label for="ejemplo_telefono">Telefono/Movi</label>
			   <input type="text"  size="20" name="txtTelefono" class="form-control" id="ejemplo_telefono"
					   placeholder="Telefono fijo o movil" value="<?php echo $telefono; ?>"/>
			 </div>
		   </div>		   
	  </div>
	  
	
	   <div class="row">  

          	   
          <div class="row">		  
	  <div class="col-xs-6">
			 <div class="form-group">
			   <label>Rol</label>
			   <select class="form-control" name="txtRol" >
			   		 <option><?php echo $rol; ?></option>
			         <option>Estudiante</option>
			         <option>Padre</option>
					 <option>Docente</option>
					 <option>Preceptor</option>
					 <option>administrador</option>
				</select>	  
			 </div>
		   </div>	
		   	   
	  <div class="col-xs-6">
			 <div  class="form-group">   
				 <label>Cursando</label>
				   <select class="form-control" name="txtCarrera" >
				   	  <option><?php echo $carrera; ?></option>
				      <option>1er Grado</option>
					  <option>2do Grado</option>
					  <option>3er Grado</option>
					  <option>2do Año</option>
					  <option>3er Año</option>
					  <option>4to Año</option>
					  <option>5to Año</option>
					  <option>6to Año</option>
					  <option>First Certificated Exam 1</option>
					  <option>First Certificated Exam 2</option>
				   </select>
			 </div>   
			</div>
		</div>

	  
	  
	 <div class="row">		
	 <div class="col-xs-4">
			 <div class="form-group">
			   <label for="ejemplo_user">Usuario</label>
			   <input type="text"  size="20" name="txtUser" class="form-control" id="ejemplo_user"
					   placeholder="Nombre de usuario" value="<?php echo $user; ?>"/>
			 </div>
		   </div>	
	 <div class="col-xs-4">
			 <div class="form-group">
			   <label for="ejemplo_pass">Contraseña</label>
			   <input type="password"  size="20" name="txtPass" class="form-control" id="ejemplo_pass"
					   placeholder="Cambiar Pass" value=""/>
			 </div>
		   </div>	
	
	 <div class="col-xs-4">
			 <div class="form-group">
			   <label for="ejemplo_pass1">Repetir Contraseña</label>
			   <input type="password"  size="20" name="txtPass1" class="form-control" id="ejemplo_pass1"
					   placeholder="Cambiar Pass" value=""/>
			 </div>
		   </div>	
	
	 
	 </div>
		 
  <button method="post" type="submit" class="btn btn-default" ><?php echo $btn_txt;?></button>
   
 </div>
 </form>
</div>
  
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

