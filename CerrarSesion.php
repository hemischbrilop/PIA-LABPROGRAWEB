<?php 
session_start(); // <- este comando sirve para iniciar una nueva sesion o reanuda una existente

//aqui se destruyen todas las variables de sesion

$_SESSION=array();


// aqui la sesion ya se va a la kk
session_destroy();
header('Location:...index');//te redirijira al index

?>