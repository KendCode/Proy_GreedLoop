<?php
    session_start();
    include_once "../conexion.php";

    $outgoing_id = $_SESSION['id_usuario'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT * FROM usuario WHERE NOT id_usuario = {$outgoing_id} AND (nombre LIKE '%{$searchTerm}%'";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>