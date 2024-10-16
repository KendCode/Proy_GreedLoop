<?php
include("conexion.php");

if (isset($_POST['btnMod'])) {
    // Recoger y sanitizar los datos
    $nomUsu = mysqli_real_escape_string($conexion, $_POST['nom_usuario']);
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $contrasena = mysqli_real_escape_string($conexion, $_POST['new_password']);
    $current_password = mysqli_real_escape_string($conexion, $_POST['current_password']);
    $id_usuario = $_POST['id_usuario']; // Obtener ID del usuario desde el formulario

    // Manejo de la imagen de perfil
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['profile_picture']['tmp_name'];
        $fileName = $_FILES['profile_picture']['name'];
        $fileSize = $_FILES['profile_picture']['size'];
        $fileType = $_FILES['profile_picture']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Validar el tipo de archivo
        $allowedExts = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($fileExtension, $allowedExts) && $fileSize < 2000000) { // Límite de 2MB
            // Directorio donde se guardará la imagen
            $uploadFileDir = '../images/';
            $dest_path = $uploadFileDir . 'profile_' . $id_usuario . '.' . $fileExtension;

            // Mover el archivo subido a la ubicación deseada
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                $img_query = "UPDATE usuario SET imgUsu = '$dest_path' WHERE id_usuario = $id_usuario";
                mysqli_query($conexion, $img_query);
            } else {
                echo "<script>alert('Error al subir la imagen')</script>";
            }
        } else {
            echo "<script>alert('Tipo de archivo no permitido o tamaño demasiado grande')</script>";
        }
    }

    // Actualizar los datos del usuario
    $consulta = "UPDATE usuario SET nombre = ?, apellido = ?, nom_usuario = ?, email = ?, password = ? WHERE id_usuario = ?";

    if ($stmt = mysqli_prepare($conexion, $consulta)) {
        // Usar 'i' para el ID que es un entero
        mysqli_stmt_bind_param($stmt, "sssssi", $nombre, $apellido, $nomUsu, $email, $contrasena, $id_usuario);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Usuario modificado de manera correcta')</script>";
            echo '<script>window.location="../pages/index(usu).php"</script>';
        } else {
            echo "<script>alert('Error al modificar el usuario')</script>";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Error en la preparación de la consulta')</script>";
    }
}

mysqli_close($conexion);
?>



