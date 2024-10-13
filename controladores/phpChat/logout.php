<?php
    session_start();
    if(isset($_SESSION['id_usuario'])){
        include_once "../conexion.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = "Offline now";
            $sql = mysqli_query($conn, "UPDATE usuario SET status = '{$status}' WHERE id_usuario={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../../pages/chat/login.php");
            }
        }else{
            header("location: ../../pages/chat/users.php");
        }
    }else{  
        header("location: ../../pages/chat/login.php");
    }
?>