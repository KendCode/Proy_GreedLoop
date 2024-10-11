<?php
// Incluimos el archivo de conexión
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturamos los valores enviados desde el formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['nom_usuario'];
    $correo_electronico = $_POST['correo_electronico'];
    $contrasena = $_POST['password'];

    // Verificación de campos vacíos
    if (!empty($nombre) && !empty($apellido) && !empty($usuario) && !empty($correo_electronico) && !empty($contrasena)) {
        
        // Verificamos si el usuario ya está registrado
        $check_query = "SELECT * FROM usuario WHERE nom_usuario = '$usuario'";
        $check_resultado = mysqli_query($conexion, $check_query);

        if (mysqli_num_rows($check_resultado) > 0) {
            // Si el usuario ya está registrado
            echo "<script>alert('El usuario ya está registrado.');</script>";
            echo '<script>window.location="../controladores/registro.php"</script>';
        } else {
            // Si el usuario no está registrado, insertamos el usuario con id_sesion = 3
            $query = "INSERT INTO usuario (nombre, apellido, nom_usuario, email, password, id_perfil) 
                      VALUES ('$nombre', '$apellido', '$usuario', '$correo_electronico', '$contrasena', 3)";

            $resultado = mysqli_query($conexion, $query);

            if ($resultado) {
                echo "<script>alert('Te has registrado correctamente.');</script>";
                echo '<script>window.location="../pages/agencias.php"</script>';
            } else {
                echo "<script>alert('Error al registrarse.');</script>";
                echo '<script>window.location="../pages/loggin.php"</script>';
            }
        }
    } else {
        echo "<script>alert('Todos los campos son obligatorios.');</script>";
        echo '<script>window.location="../pages/loggin.php"</script>';
    }
}
?>