<?php
include("CONEXION PHP.php"); //Es para llamar al archivo conexion php

//Aqui se guardan las variables que se ingresan en los formularios
$Nombre = $_POST[Nombre];  //el primer $es la variable y el segundo es el formulario del que agarraremos la informacion apra guardar la variable
$Apellido = $_POST[Apellido];
$Municipio = $_POST[Municipio];
$Colonia = $_POST[Colonia];
$Ciudad = $_POST[Ciudad];
$Codigo_Postal = $_POST[Codigo_Postal];
$Edad = $_POST[Edad];
$Contrasena = $_POST[Contrasena];
$Telefono = $_POST[Telefono];
$Direccion = $_POST[Direccion];
$Correo_Electronico  = $_POST[Correo_Electronico];

$ContrasenaHash = password_hash($Contrasena, PASSWORD_BCRYPT); // <--BCrypt es el algoritmo de encriptacion que es el que no devolvera una cadena de 60 digitos  
$FotoPerfil = "link de la imagen"; // <-- aqui se almacena la imagen del foto de perfil
?>