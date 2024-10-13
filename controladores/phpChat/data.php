<?php
while ($row = mysqli_fetch_assoc($query)) {
    $sql2 = "SELECT * FROM messages WHERE (id_mensaje_entrante = {$row['id_usuario']}
                OR id_mensaje_saliente = {$row['id_usuario']}) AND (id_mensaje_saliente = {$outgoing_id} 
                OR id_mensaje_entrante = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);
    (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result = "No hay mensajes disponibles";
    (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
    if (isset($row2['id_mensaje_saliente'])) {
        ($outgoing_id == $row2['id_mensaje_saliente']) ? $you = "Tu: " : $you = "";
    } else {
        $you = "";
    }
    ($row['status'] == "Fuera de Línea") ? $offline = "offline" : $offline = "";
    ($outgoing_id == $row['id_usuario']) ? $hid_me = "hide" : $hid_me = "";

    $output .= '<a href="../../pages/chat/chat.php?id_usuario=' . $row['id_usuario'] . '">
                    <div class="content">
                    <img src="../../images/usuarios/' . $row['img'] . '" alt="">
                    <div class="details">
                        <span>' . $row['nom_usuario']'</span>
                        <p>' . $you . $msg . '</p>
                    </div>
                    </div>
                    <div class="status-dot ' . $offline . '"><i class="fas fa-circle"></i></div>
                </a>';
}
