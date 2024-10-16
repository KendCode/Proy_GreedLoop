<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/logReg.css">
    <title>FORMULARIO DE REGISTRO E INICIO SESIÓN</title>
</head>
<body>
    <!-- INICIO SESION -->
    <div class="container-form login">
        <div class="information">
            <div class="info-childs">
                <h2>¡¡Bienvenido nuevamente!!</h2>
                <p>Para unirte a nuestra comunidad por favor Inicia Sesión con tus datos</p>
                <input type="button" value="Registrarse" id="sign-up">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar Sesión</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github'></i>
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <p>o Iniciar Sesión con una cuenta</p>
                <form class="form form-login" method="post" action="../controladores/validador.php">
                    <div>
                        <label >
                            <i class='bx bx-envelope' ></i>
                            <input type="text" placeholder="Usuario o Correo" name="usuario">
                        </label>
                    </div>
                    <div>
                        <label>
                            <i class='bx bx-lock-alt' ></i>
                            <input type="password" placeholder="Contraseña" name="contrasena">
                        </label>
                    </div>
                    <input type="submit" value="Iniciar Sesión">
                    <div class="alerta-error">Todos los campos son obligatorios</div>
                    <div class="alerta-exito">Te registraste correctamente</div>
                </form>
            </div>
        </div>
    </div>

<!--registro-->
    <div class="container-form register hide">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <p>Para unirte a nuestra comunidad por favor Inicia Sesión con tus datos</p>
                <input type="button" value="Iniciar Sesión" id="sign-in">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear una Cuenta</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-facebook'></i>
                </div>
                <p>o usa tu email para registrarte</p>
                <form class="form form-register" method="post" action="../controladores/registro.php">
                    <div>
                        <label>
                            <i class='bx bx-user' ></i>
                            <input type="text" placeholder="Nombre" name="nombre" >
                        </label>
                    </div>
                    <div>
                        <label>
                            <i class='bx bx-user' ></i>
                            <input type="text" placeholder="Apellido" name="apellido" >
                        </label>
                    </div>
                    <div>
                        <label>
                            <i class='bx bx-user' ></i>
                            <input type="text" placeholder="Usuario" name="nom_usuario" >
                        </label>
                    </div>
                    <div>
                        <label >
                            <i class='bx bx-envelope' ></i>
                            <input type="email" placeholder="Correo Electronico" name="correo_electronico" >
                        </label>
                    </div>
                    <div>
                        <label>
                            <i class='bx bx-lock-alt' ></i>
                            <input type="password" placeholder="Contraseña" name="password">
                        </label>
                    </div>
                    <div class="form-group full-width">
					<select name="id_perfil" id="id_sesion" class="form-control">
						<option value="2">Agencia</option>
						<option value="3">Usuario</option>
					</select>
				</div>
                    <input type="submit" value="Registrarse" name="registrarse">
                    <div class="alerta-error">Todos los campos son obligatorios</div>
                    <div class="alerta-exito">Te registraste correctamente</div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/scriptLogin.js"></script>
</body>
</html>