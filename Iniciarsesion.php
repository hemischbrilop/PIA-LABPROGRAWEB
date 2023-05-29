<?php
include("CONEXION.PHP"); //llama al archivo conexion 

$_SESSION['login'] = false //variable super global (todos los archivos)

//Estas variables son las que recibimos del formulario login y son las que utilizaremos para fuardar y comprar los datos
$Correo_Electronico = $_POST["Correo_Electronico"];
$Contrasena = $_POST["Contrasena"];

//Comparamos el correo Electronico

$Consulta="SELECT * FROM 'USUARIO' WHERE Correo_Electronico = '$Correo_Electronico' ";
$Consulta= mysqli_query

//Evaluacion de correo
$Consulta = "SELECT * FROM 'Usuario' WHERE Correo_Electronico= '$Correo_Electronico' ";
$Consulta = mysqli_query($CONEXION, $Consulta); //Se ejecuta la consulta
$Consulta = mysqli_fetch_array($Consulta);

// Apartir de aqui se comparara la contrasena
if($Consulta)
    if(password_verify($Contrasena, $Consulta['Contrasena'])){
        $_SESSION[login] = true; 

        $_SESSION[Nombre] = $Consulta['Nombre']
        $_SESSION[Apellido] = $Consulta['Apellido']
        $_SESSION[Edad] = $Consulta['Edad']
        $_SESSION[Telefono] = $Consulta['Telefono']
        $_SESSION[Correo_Electronico] = $Consulta['Correo_Electronico']
        $_SESSION[Direccion] = $Consulta['Direccion']
        $_SESSION[Ciudad] = $Consulta['Ciudad']
        
        header('Location: Ruta para pagina de perfil') //El hedader es el que redirecciona ES PHP NO HTML - QUE NO SE ME OLVIDE

    }else{
        echo"Contrasena incorrecta";
        echo"<br><a href='index'>Intentele otra vez.</a></div>:";
    }else{
        echo "El Correo es inexistente";
        echo"<br><a href='index'>Intentele otra vez.</a></div>:";
    }
    // con respecto a lo de arriba se que me preguntare en un futuro para que sirve, y es que si la consulta salio negativa/nula/etc, significa que no se encontro el correo electronico por ende no existe el usuario 

    //cerrar conexion
    mysqli_close($CONEXION);
?>