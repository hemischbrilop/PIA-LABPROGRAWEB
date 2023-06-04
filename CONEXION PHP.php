<?php
$Servidor = "containers-us-west-148.railway.app";
$Usuario = "root";
$contrasena = "e5OrJ4CNMg7gisvdRD56";
$BD = "railway";

try {
    $conexion = new PDO("mysql:host=$Servidor;dbname=$BD", $Usuario, $contrasena);
    echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>
