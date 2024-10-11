<?php
include("conexion.php");





$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];


// primer paso guardar la consulta
$consulta="SELECT * FROM usuario WHERE email='$usuario' OR nom_usuario='$usuario'";

// segundo paso mostrar la consulta
$resultado= mysqli_query($conexion,$consulta);

// tercer paso 
$resp= mysqli_fetch_assoc($resultado);


if($usuario==$resp['email'] && $contrasena==$resp['password'] || $usuario==$resp['nom_usuario'] && $contrasena==$resp['password'])
{
    switch($resp['id_perfil']){
        case 1:
            session_start();
            //$_SESSION["va el nombre de la sesion"]=$usuario;
            $_SESSION['admin']=$usuario;
            $_SESSION['nombre']=$resp['nombre'];
            //$_SESSION['contrasena']=$contrasena;
            echo '<script>window.location="../pages/administrador.php"</script>';
            break;
        case 2:
            session_start();
            $_SESSION['admin']=$usuario;
            $_SESSION['nombre']=$resp['nombre'];
            echo '<script>window.location="../pages/usuarioAgente.php"</script>';
            break;
        case 3:
            session_start();
            $_SESSION['usuario']=$usuario;
            $_SESSION['contrasena']=$contrasena;
            echo '<script>window.location="../pages/agencias.php"</script>';
            break;
    }            
}else{
	echo "<script>alert('usuario o contraseña incorrecta')</script>";
    echo '<script>window.location="../pages/loggin.php"</script>';
}

?>