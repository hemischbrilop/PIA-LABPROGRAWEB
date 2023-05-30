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

//Aqui creamos la consulta evaluaremos si el correo ya se ha registrado
$ConsultaCorreo_Electronico="SELECT Correo_Electronico FROM Usuario WHERE Correo_Electronico='$Correo_Electronico' ";
$ConsultaCorreo_Electronico=mysqli_query($conexion, $ConsultaCorreo_Electronico);
$ConsultaCorreo_Electronico=mysqli_fetch_array($ConsultaCorreo_Electronico);// el fetch es porque nos devolvera un array o un null

//Aqui se anade los datos a la base de datos
if(!$ConsultaCorreo_Electronico){

$sql = "INSERT INTO Usuario VALUES ('$Nombre','$Apellido','$Municipio','$Colonia','$Ciudad','$Codigo_Postal','$Edad','$Contrasena','$Telefono','$Direccion','$Correo_Electronico')";

//Aqui se verifica si se guardaron los datos
if(mysqli_query($conexion, $sql)){
    mkdir("ruta de carpeta"); // aqui se va a crear una carpeta en imagenes para el usuario
    copy("ruta de la imagen"); // aqui se va a copiar una imagen por default

    echo"Tu cuenta ha sido creada.";
    Echo"<br> <a href= link de la pagina login>Iniciar sesion</a></div>";
}else{
    echo"ERROR" . $sql . "</br>" . mysqli_connect_error($conexion);
}

// Se cierra la conexion
mysqli_close($conexion);
}else{
    echo"El correo ya existe"
    Echo"<br> <a href= link de la pagina login>Intentalo de nuevo</a></div>";
}

?>