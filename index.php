<?php

include("menu_bs.php");
echo '
<div class="container-fluid" id="capa_T">
	<div class="row">
	 
	  <div class="col-sm-3">
	  <div id="capa_d">
	  <H2><u>Silvia Martinez & All-Round Teachers</u></H2>
	  <ul class="nav nav-pills nav-stacked">
        <li><a href="#1"><span onclick="cargar(\'#capa_C\',\'txts/objetivo.html\')">¿COMO FUNCIONA S.M.A.R.T.?</span></a></li>
        <li><a href="#2"><span onclick="cargar(\'#capa_C\',\'txts/tecnologias.html\')">EL CURSO</span></a></li>
		<li><a href="#3"><span onclick="cargar(\'#capa_C\',\'txts/referencias.html\')">¡COMENZAR!</a></span></li>
		<li><a href="#4"><span onclick="cargar(\'#capa_C\',\'txts/proyectos.html\')">PROYECTOS 2018</a></span></li>
           
	  </ul>
	  </div>
	  </div>
  
	  <div class="col-sm-6">
	  <div id="capa_C">	
	  <div id="titulo">	</div>
	  <div id="contenido">	</div>
	  <H3></H3>
	  </div>
	  </div>
	  
	  <div class="col-sm-3" >
	  <div id="capa_P">	
	  
	  </div>
	  </div>

	</div>
 </div>
 
';
echo "<script>";
echo "cargar('#capa_C','mostrar_cartelera.php?b=Portada');";
echo "</script>";
?>

