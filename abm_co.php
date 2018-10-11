<?php
session_start();
//include_once("libreria/motor.php");
include_once("libreria/Comunicados.php");
/*
$id_comunicado,$categoria,$titulo,$texto,$imagen,$plantilla,$v_desde,$v_hasta,$activo,$link

id_comunicado,categoria,titulo,texto,imagen,plantilla,v_desde,v_hasta,activo,link
*/

$comunicado = new Comunicado();

include("menu_bs.php");

$operacion = '';
$id_comunicado = '';
$receptor = '';
$fecha= '';
$titulo = '';
$texto = '';
$activo = '';

echo '
<script>
 
function PonerNombreArchivo(id){
    var f=["t_file","t_file1"];
  var dest=["fileToUpload","fileToUpload1"];
    var x = document.getElementById(dest[id]);
    var txt = "";
    var file = x.files[0];
                
    txt = file.name ;
           
    document.getElementById(f[id]).value = txt;
}
</script>
';

if (!empty($_POST)) {
    $comunicado->a_receptor=$_POST['a_receptor'];
    $comunicado->n_receptor=$_POST['n_receptor'];
    $comunicado->a_emisor=$_SESSION['lastname'];
    $comunicado->n_emisor=$_SESSION['name'];
    $comunicado->titulo=$_POST['txtTitulo'];
    $comunicado->texto=$_POST['txtTexto']; 
    $comunicado->fecha=$_POST['txt_fecha'];

    if(isset($_POST['txtActivo'])){
     $comunicado->activo=1;
    }
    else{
         $comunicado->activo=0;  
       }
    if($comunicado->a_receptor==$comunicado->a_emisor){
      echo "No puede enviarse un comunicado a usted mismo";
    }else{
    $comunicado->guardar();
    }
}

?>
<script src="bootstrap/js/funciones_c.js"></script>
<link rel="stylesheet" href="bootstrap/comunicadoes.css">
<div class="container-fluid">
   <nav class="navbar navbar-default " role="navigation" >
    
      <ul class="nav navbar-nav" style="padding-top: 10px;padding-bottom: 0px;">

	  <?php 
		if (isset($_SESSION['username']) && $_SESSION['rol']=='administrador' OR isset($_SESSION['username']) && $_SESSION['rol']=='Padre' OR isset($_SESSION['username']) && $_SESSION['rol']=='Directivo'){
		 echo '<button type="button" class="btn btn-primary  btn-sm"   onclick="cargar(\'#capa_d\',\'alta_co.php\')">Nuevo Comunicado</button>';
    echo '<button type="button" class="btn btn-primary  btn-sm"   onclick="cargar(\'#capa_L\',\'mostrar_comunicados.php?b='.$_SESSION['lastname'].'&n='.$_SESSION['name'].'\')">Ver Comunicados</button>';
    echo '<button type="button" class="btn btn-primary  btn-sm"   onclick="cargar(\'#capa_d\',\'mostrar_comunicados.php?a='.$_SESSION['lastname'].'&j='.$_SESSION['name'].'\')">Mis comunicados</button>';
		}
    if(isset($_SESSION['username']) && $_SESSION['rol']=='Docente' OR isset($_SESSION['username']) && $_SESSION['rol']=='Preceptor'){
    echo '<button type="button" class="btn btn-primary  btn-sm"   onclick="cargar(\'#capa_d\',\'alta_co.php\')">Nuevo Comunicado</button>';
    echo '<button type="button" class="btn btn-primary  btn-sm"   onclick="cargar(\'#capa_L\',\'mostrar_comunicados.php?b='.$_SESSION['lastname'].'&n='.$_SESSION['name'].'\')">Ver Comunicados</button>';
    echo '<button type="button" class="btn btn-primary  btn-sm"   onclick="cargar(\'#capa_d\',\'mostrar_comunicados.php?a='.$_SESSION['lastname'].'&j='.$_SESSION['name'].'\')">Mis comunicados</button>';
    }
	  ?>
       
	  </ul>      
	 </div> 
	 
   </nav>
 </div>


<div class="row">
 
  <div class="col-sm-6">
  <div id="capa_d">
  
  </div>
  </div>
  
  <div class="col-sm-6">
  <div id="capa_L">	
  
   </div>
</div>
</div>
</div>
</body>

</html>