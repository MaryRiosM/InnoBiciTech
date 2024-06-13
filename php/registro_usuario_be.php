<?php

include'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$departamento = $_POST['departamento'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$repetircorreo = $_POST['repetir_correo'];
$contrasena = $_POST['contrasena'];
$repetir_contrasena = $_POST['repetir_contrasena'];
$contrasena = hash('sha512', $contrasena);   //encriptar contraseña deben ser 150 caracteres esta entrada

$query = "INSERT INTO usuarios(nombre_completo, apellido, usuario, departamento, ciudad, direccion, telefono, correo, contrasena)
VALUE ('$nombre_completo', '$apellido', '$usuario', '$departamento', '$ciudad', '$direccion', '$telefono', '$correo', '$contrasena')";


//verificar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM  usuarios WHERE correo='$correo'");

if(mysqli_num_rows($verificar_correo) > 0){
    echo'
        <script>
        alert("Este correo ya está registrado, intente con uno nuevo");
        window.location = "../Datos_cuenta.php"
        </script>
        ';
        mysqli_close($conexion);
        exit();
}

//verificar que el usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo'
        <script>
        alert("Usuario ya está registrado, intente con otro usuario");
        window.location = "../Datos_cuenta.php"
        </script>
    ';

mysqli_close($conexion);
exit();

}


//mensaje de alerta para guardar info
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
       alert("Usuario almacenado exitosamente");
       window.location = "../Datos_cuenta.php";
    </script>
    ';
}else{
    echo'
    <script>
           alert("intentelo de nuevo");
           wondow.location = "../Datos_cuenta.php";
    </script>
    ';
}
mysqli_close($conexion);






?>