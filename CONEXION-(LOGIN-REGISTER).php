
<?php
// todos los comentarios que agregue apartir de aqui seran solo para saber que estoy haciendo

//Variables que utilice
$Servidor = "Localhost";
$Usuario = "root";
$contrasena = "";

$BD = "Abarrotes_Osito";


$conexion = mysqli_connect($Servidor, $Usuario, $contrasena, $BD); // <--- Esto es lo que crea la conexion de la pagina a la base de datos

//Esto verifica si se realizo la conexion

if(!$conexion){
    echo"Fallo la conexion <br>";
    die("Connection failed: " . mysqli_connect_error() );
}else{
    echo"Conexion exitosa";
}

?>