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

?>