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
 
<div class="col-sm-6" > 
   
  <form  role="form" method="POST" action="">
  <legend>Agregar persona</legend>
     
     <div class="row">  	   
		   <div class="col-xs-6">
			 <div class="form-group">
			   <label for="ejemplo_apellido">Nombre/s</label>
			   <input type="text"  size="20" name="txtNombre" class="form-control" id="ejemplo_nombre"
					   placeholder="Introduce el nombre" />
			 </div>
		 </div>		   
	  
		   <div class="col-xs-6">
			 <div class="form-group">
			  <label for="ejemplo_nombre">Apellido/s</label>
			  <input type="text"  size="20" name="txtApellido" class="form-control" id="ejemplo_Apellido"
					   placeholder="Introduce el Apellido" />
			 </div> 
		   </div>
	  </div>
	  
	    <div class="row">   
		   <div class="col-xs-6">
			 <div  class="form-group">
			 <label>Sexo</label>
			    <div class="radio">
			     <label>
				  <input type="radio" name="txtSexo" id="sexo_1" value="Femenino" checked>
				  Femenino
			     </label>
			    </div>			  
			    <div class="radio">
			     <label>
				  <input type="radio" name="txtSexo" id="sexo_2" value="Masculino">
				  Masculino
			     </label>
			    </div>				 
			 </div> 
		   </div>
	  	
		<div class="col-xs-6">
			  <div class="form-group">
				<label for="ejemplo_Matricula">DNI</label>
				<input type="text"  size="20" name="txtDni" class="form-control" id="ejemplo_Matricula"
					   placeholder="Introduce el DNI" />
			  </div> 
		</div> 
	    </div>
	  
	  
	  <div class="row">  	   
		   <div class="col-xs-6">
			 <div class="form-group">
			   <label for="ejemplo_email">E-Mail</label>
			   <input type="text"  size="20" name="txtEmail" class="form-control" id="ejemplo_email"
					   placeholder="correo electronico" />
			 </div>
		   </div>		   
		   
		   <div class="col-xs-6">
			 <div class="form-group">
			   <label for="ejemplo_telefono">Telefono/Movi</label>
			   <input type="text"  size="20" name="txtTelefono" class="form-control" id="ejemplo_telefono"
					   placeholder="Telefono fijo o movil" />
			 </div>
		   </div>		   
	  </div>
	  
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
					   placeholder="Nombre de usuario" "/>
			 </div>
		   </div>	
	 <div class="col-xs-4">
			 <div class="form-group">
			   <label for="ejemplo_pass">Contraseña</label>
			   <input type="password"  size="20" name="txtPass" class="form-control" id="ejemplo_pass"
					   placeholder="Cambiar Pass" />
			 </div>
		   </div>	
	
	 <div class="col-xs-4">
			 <div class="form-group">
			   <label for="ejemplo_pass1">Repetir Contraseña</label>
			   <input type="password"  size="20" name="txtPass1" class="form-control" id="ejemplo_pass1"
					   placeholder="Cambiar Pass" />
			 </div>
		   </div>	
	
	 
	 </div>
		 
  		
  
  <button method="post" type="submit" class="btn btn-default" >Guardar</button>
   
  </form>
  </div>
  </div>
  

</div>
</div>
