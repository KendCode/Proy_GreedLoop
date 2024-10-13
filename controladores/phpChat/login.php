<?php
session_start();
include_once "../conexion.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
if (!empty($email) && !empty($password)) {
    $sql = mysqli_query($conn, "SELECT * FROM usuario WHERE email = '{$email}'");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        $user_pass = md5($password);
        $enc_pass = $row['password'];
        if ($user_pass === $enc_pass) {
            $status = "Disponible";
            $sql2 = mysqli_query($conn, "UPDATE usuario SET status = '{$status}' WHERE id_usuario = {$row['id_usuario']}");
            if ($sql2) {
                $_SESSION['id_usuario'] = $row['id_usuario'];
                echo "Proceso Exitoso";
            } else {
                echo "Algo salió mal. ¡Inténtalo de nuevo!";
            }
        } else {
            echo "¡Correo electrónico o la contraseña son incorrectos!";
        }
    } else {
        echo "$email - ¡Este correo electrónico no existe!";
    }
} else {
    echo "¡Todos los campos de entrada son obligatorios!";
}
