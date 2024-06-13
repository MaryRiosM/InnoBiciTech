<?php

include 'conexion_be.php';
session_start();
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);


//validar el usuario a ingresar

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena = '$contrasena'");

//validar usuario si existe o no

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['correo'] = $correo;
    header("location:../Detalle_factura.php");    //redireccionar donde ir cuando se inicie sesion
    exit;
}   echo '
          <script>
           alert("Usuario no existe, por favor verificar los datos introducidos");
         window.location = "../Inicio_sesion.php";
          </script>

'





?>