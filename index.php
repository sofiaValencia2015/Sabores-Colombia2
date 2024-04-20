<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("Location: ../SABORES COLOMBIA/pantallainicio.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Y Registro - Kevin López</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>

            <div class="contenedor__login-register">
                <form action="php/login_usuario_be.php" method ="POST" 
                class="formulario__login">
                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="Correo electronico" name="correo">
                    <input type="password" placeholder="contraseña" name="contrasena">
                    <button>Entrar</button>

                    
                </form>
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completos" name = "nombre_completo">
                    <input type="text" placeholder="Correo electronico" name = "correo">
                    <input type="text" placeholder="Usuario" name = "usuario">
                    <input type="password" placeholder="contraseña" name = "contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src ="assets/js/script.js"></script>
</body>
</html>