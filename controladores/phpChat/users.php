<?php
    session_start();
    include_once "../conexion.php";
    $outgoing_id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuario WHERE NOT id_usuario = {$outgoing_id} ORDER BY id_usuario DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>