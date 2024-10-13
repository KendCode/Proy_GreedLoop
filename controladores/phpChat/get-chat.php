<?php
session_start();
if (isset($_SESSION['id_usuario'])) {
    include_once "../conexion.php";
    $outgoing_id = $_SESSION['id_usuario'];
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $output = "";
    $sql = "SELECT * FROM messages LEFT JOIN usuario ON usuario.id_usuario = messages.id_mensaje_saliente
                WHERE (id_mensaje_saliente = {$outgoing_id} AND id_mensaje_entrante = {$incoming_id})
                OR (id_mensaje_saliente = {$incoming_id} AND id_mensaje_entrante = {$outgoing_id}) ORDER BY msg_id";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            if ($row['id_mensaje_saliente'] === $outgoing_id) {
                $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>' . $row['msg'] . '</p>
                                </div>
                                </div>';
            } else {
                $output .= '<div class="chat incoming">
                                <img src="../../images/usuarios/' . $row['img'] . '" alt="">
                                <div class="details">
                                    <p>' . $row['msg'] . '</p>
                                </div>
                                </div>';
            }
        }
    } else {
        $output .= '<div class="text">No hay mensajes disponibles. Una vez que envíe el mensaje, aparecerán aquí.</div>';
    }
    echo $output;
} else {
    header("location: ../../pages/chat/login.php");
}
