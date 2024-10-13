<?php 
    session_start();
    if(isset($_SESSION['id_usuario'])){
        include_once "../conexion.php";
        $outgoing_id = $_SESSION['id_usuario'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['id_mensaje_entrante']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messages (id_mensaje_entrante, id_mensaje_saliente, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
        }
    }else{
        header("location: ../../pages/chat/login.php");
    }


    
?>