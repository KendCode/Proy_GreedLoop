<?php 
include("../controladores/conexion.php");
$id_usuario = $_POST['id_usuario'];

// primer paso
$consulta = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario'";
// segunda paso 
$respuesta = mysqli_query($conexion, $consulta);

// tercer paso
while ($fila = mysqli_fetch_array($respuesta)) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Template</title>
    <link rel="stylesheet" href="../css/stylePerfil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<form action="../controladores/configUsu.php" method="post" enctype="multipart/form-data">
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Configuración
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Cambiar Contraseña</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="<?php echo $fila['profile_picture']; ?>" alt="Avatar" class="d-block ui-w-80" id="profileImagePreview">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Subir Foto
                                        <input type="file" class="account-settings-fileinput" name="profile_picture" accept="image/*" onchange="previewImage(event)">
                                    </label>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <input type="hidden" name="id_usuario" value="<?php echo $fila['id_usuario']; ?>">
                                <div class="form-group">
                                    <label class="form-label">Nombre de Usuario</label>
                                    <input type="text" class="form-control mb-1" name="nom_usuario" value="<?php echo $fila['nom_usuario']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" value="<?php echo $fila['nombre']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Apellido</label>
                                    <input type="text" class="form-control" name="apellido" value="<?php echo $fila['apellido']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="email" class="form-control mb-1" name="email" value="<?php echo $fila['email']; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Contraseña Actual</label>
                                    <input type="password" class="form-control" name="current_password" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nueva Contraseña</label>
                                    <input type="password" class="form-control" name="new_password" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <button type="submit" class="btn btn-primary" name="btnMod">Guardar Cambios</button>
            <button type="reset" class="btn btn-default">Cancelar</button>
        </div>
    </div>
</form>
<?php
}
?>
<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function(){
        const output = document.getElementById('profileImagePreview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
