<?php
//include_once("libreria/motor.php");
include_once("libreria/Comunicados.php");

$str_b = array_key_exists('b', $_GET) ? $_GET['b'] : '';
$str_n = array_key_exists('n', $_GET) ? $_GET['n'] : '';
$str_a = array_key_exists('a', $_GET) ? $_GET['a'] : '';
$str_j = array_key_exists('j', $_GET) ? $_GET['j'] : '';
session_start();
$cart=Comunicado::seleccionar_receptor($str_b,$str_n);
$carts=Comunicado::seleccionar_emisor($str_a,$str_j);


?>
<?php
if (isset($cart)){
echo '<link rel="stylesheet" href="bootstrap/carteles.css">';
?>

	  <?php
	  
		  foreach($cart as $carteles){
           	echo "<header>
		   		<h5>$carteles[a_emisor] $carteles[n_emisor]dice:</h5>
               <h3>$carteles[titulo]</h3>
               </header>";
		   
		   echo "<article><h4>$carteles[texto]<h4></article>";

	if($carteles['fecha']<>""){
		   echo "<footer><h4>$carteles[fecha]</h4></footer>";
		   }
		   echo '</div><br>';
		   }
	  ?>
	
<?php
}
?>
<?php
if (isset($carts)){
echo '<link rel="stylesheet" href="bootstrap/carteles.css">';
?>

	  <?php
	  
		  foreach($carts as $carteles){
		  if($carteles['a_emisor']==$_SESSION['lastname'] AND $carteles['n_emisor']==$_SESSION['name']){
		   echo "<header>
		   		<h5>Enviado a $carteles[a_receptor] $carteles[n_receptor]:</h5>
               <h3>$carteles[titulo]</h3>
               </header>";
           }
		   
		   echo "<article><h4>$carteles[texto]<h4></article>";

	if($carteles['fecha']<>""){
		   echo "<footer><h4>$carteles[fecha]</h4></footer>";
		   }
		   echo '</div><br>';
		   }
	  ?>
	
<?php
}
?>