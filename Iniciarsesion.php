<?php
include("CONEXION.PHP"); //llama al archivo conexion 

$_SESSION['login'] = false //variable super global (todos los archivos)

//Estas variables son las que recibimos del formulario login y son las que utilizaremos para fuardar y comprar los datos
$Correo_Electronico = $_POST["Correo_Electronico"];
$Contrasena = $_POST["Contrasena"];

//Comparamos el correo Electronico

$Consulta="SELECT * FROM 'USUARIO' WHERE Correo_Electronico = '$Correo_Electronico' ";
$Consulta= mysqli_query
?>