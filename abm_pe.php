<?php
session_start();
//include_once("libreria/motor.php");
include_once("libreria/persona.php");
include_once("libreria/Directivo.php");
include_once("libreria/estudiante.php");
include_once("menu_bs.php");

$datos = new Persona();
$directivo = new Directivo();
$estudiante = new estudiante();

$operacion = '';

$nombre = '';
$apellido = '';
$sexo = '';
$dni = '';
$carrera = '';
$telefono="";
$email="";
$user="";
$rol="";

if (!empty($_POST)){
	$rol=$_POST['txtRol'];
	if ($rol=='estudiante'){
		$estudiante->nombre=$_POST['txtNombre'];
		$estudiante->apellido=$_POST['txtApellido'];
		$estudiante->sexo=$_POST['txtSexo'];
		$estudiante->curso=$_POST['txtCurso'];
		$estudiante->email=$_POST['txtEmail'];
		$estudiante->user=$_POST['txtuser'];
		$estudiante->passwd=md5($_POST['txtpasswd']);		
		$estudiante->guardar();
	}
	if ($rol=='docente'){
		$directivo->nombre=$_POST['txtNombre'];
		$directivo->apellido=$_POST['txtApellido'];
		$directivo->telefono=$_POST['txtTelefono'];
		$directivo->direccion=$_POST['txtDireccion'];
		$directivo->rol=$_POST['txtRol'];
		$directivo->curso=$_POST['txtCurso'];
		$directivo->email=$_POST['txtEmail'];
		$directivo->user=$_POST['txtuser'];
		$directivo->passwd=md5($_POST['txtpasswd']);		
		$directivo->guardar();
	}
	if ($rol=='directivo'){
		$directivo->nombre=$_POST['txtNombre'];
		$directivo->apellido=$_POST['txtApellido'];
		$directivo->telefono=$_POST['txtTelefono'];
		$directivo->direccion=$_POST['txtDireccion'];
		$directivo->rol=$_POST['txtRol'];
		$directivo->email=$_POST['txtEmail'];
		$directivo->user=$_POST['txtuser'];
		$directivo->passwd=md5($_POST['txtpasswd']);		
		$directivo->guardar();
	}
	$datos->nombre=$_POST['txtNombre'];
	$datos->apellido=$_POST['txtApellido'];
	$datos->rol=$_POST['txtRol'];
	$datos->email=$_POST['txtEmail'];
	$datos->user=$_POST['txtuser'];
	$datos->passwd=md5($_POST['txtpasswd']);		
	$datos->guardar();
}
/*	if ($operacion == 'actualizar' && isset($_GET['id_pers'])){
		$persona->nombre=$_POST['txtNombre'];
		$persona->apellido=$_POST['txtApellido'];
		$persona->sexo=$_POST['txtSexo'];
		$persona->dni=$_POST['txtDni'];
		$persona->carrera=$_POST['txtCarrera'];
		$persona->telefono=$_POST['txtTelefono'];
		$persona->email=$_POST['txtEmail'];
		$persona->user=$_POST['txtUser'];
		$persona->rol=$_POST['txtRol'];
		if($_POST['txtPass'] != "" && $_POST['txtPass1'] != "" && ($_POST['txtPass'] == $_POST['txtPass1'])){
		  $persona->passwd=$_POST['txtPass'];
		}
        else{
		  $persona->passwd="";
		}
		
		$persona->actualizar($_GET['id_pers']);
	}
	if ($operacion == 'borrar' && isset($_GET['id_pers'])){
	    //echo '3-eliminar';
		$persona->borrar($_GET['id_pers']);
	}
    if ($operacion == 'edicion' && isset($_GET['id_usuario'])) {
        //echo '3-edicion';
        
        $id_usuario = $_GET['id_usuario'];

        $datos=Persona::traer_datos($id_usuario);

        $nombre = $datos['¨nombre'];
        $apellido = $datos['apellido'];
        $sexo = $datos['sexo'];
        $dni = $datos['dni'];
        $carrera = $datos['carrera'];
    }
   
}*/
?>
 
<script src="bootstrap/js/funciones_p.js"></script>
 
<div class="container-fluid">
   <nav class="navbar navbar-default " role="navigation" >
     
      <ul class="nav navbar-nav" style="padding-top: 10px;padding-bottom: 0px;">
      <?php
      if(isset($_SESSION['username']) && $_SESSION['rol']=='administrador' or isset($_SESSION['username']) && $_SESSION['rol']=='Directivo'){
	  echo '<span style="padding-right: 20px;font-weight: bold;">Usuarios</span>';
	  echo '<button type="button" class="btn btn-primary  btn-sm"   onclick="cargar(\'#capa_d\',\'alta_per.php\')">Alta</button>';
      }
      ?>
      </ul>      
      <ul class="nav navbar-nav" style="padding-top: 10px;padding-bottom: 0px;">
      	<?php 
      	if(isset($_SESSION['username']) && $_SESSION['rol']=='administrador'or isset($_SESSION['username']) && $_SESSION['rol']=='Directivo'){
        echo '<input type="text"  id="txt_b" placeholder="Buscar" style="position: absolute;right: 100px;" >';
		echo '<button type="button" id="btn_b" class="btn btn-primary btn-sm" style="position: absolute;right: 20px;">Buscar</button>';
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