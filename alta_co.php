
<div class="container">
  
<div class="row" >
 
  <div class="col-sm-5" >
  <div id="capa_d">
   
  <form  role="form" method="POST" action="abm_co.php">
   <legend>Registro Comunicado</legend>
   <div class="row">
   
	 <div class="form-group">
	 
	 	<div class="col-xs-6">
		  <label>Apellido</label>
		  <input type="text"  size="20" name="a_receptor" class="form-control" id="a_receptor"
				   placeholder="Apellido del receptor" required>
		 </div>
		 <div class="col-xs-6">
		  <label>Nombre</label>
		  <input type="text"  size="20" name="n_receptor" class="form-control" id="n_receptor"
				   placeholder="Nombre del receptor" required>
		 </div>
	     <div class="col-xs-12">
		  <label>Titulo</label>
		  <input type="text"  size="20" name="txtTitulo" class="form-control" id="tit_titulo"
				   placeholder="Titulo del comunicado" required>
		 </div>
		 
		 <div class="col-xs-12">
		   <label>Texto</label>
		   <textarea  rows="3" cols="30" name="txtTexto" class="form-control" id="aut_texto" required/>	   
		 </div>	 		   
	 </div>   
	 
	<div class="form-group">
	  <div class="col-xs-6">
	   <div class="ui-widget">
		<label for="tit_origen">Fecha</label>
		<input type="date"  size="20" name="txt_fecha" class="form-control" id="tit_fecha"
			   placeholder="Fecha del comunicado" required>
		</div>	   
	  
	  <div class="form-group">
	  <div class="col-xs-6">
			Activo<input type="checkbox"  name="txtActivo"  id="tit_activo" checked  >
	  </div>	   
	  </div>	
	  	 
	  </div>

 <button type="submit" class="btn btn-default">Agregar</button>

	 </form>    	 
 </div>
  </div>
  

</div>
</div>

</script>