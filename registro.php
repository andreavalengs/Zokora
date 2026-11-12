<?php
session_start();

include_once __DIR__ . "/conexion.php";

$mensaje_alerta = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($conexion) || $conexion->connect_error) {
        $mensaje_alerta = "Error crítico: No se pudo establecer la conexión a la base de datos.";
    } else {
        $nombre = $_POST['nombre'] ?? '';
        $apellido = $_POST['apellido'] ?? '';
        $usuario = $_POST['usuario'] ?? '';
        $email = $_POST['email'] ?? '';
        $password_plana = $_POST['password'] ?? '';
        $confirm_password = $_POST['confirm_password'] ?? '';

        if (empty($nombre) || empty($email) || empty($password_plana) || empty($confirm_password)) {
            $mensaje_alerta = "Por favor, completa todos los campos obligatorios.";
        } elseif ($password_plana !== $confirm_password) {
            $mensaje_alerta = "Las contraseñas no coinciden.";
        } else {
            $password_segura = password_hash($password_plana, PASSWORD_DEFAULT);

            $sql = "INSERT INTO usuario (nombre, apellido, usuario, email, password) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conexion->prepare($sql);
            
            if ($stmt) {
                $stmt->bind_param("sssss", $nombre, $apellido, $usuario, $email, $password_segura);
                if ($stmt->execute()) {
                    
                    $_SESSION['user_id'] = $conexion->insert_id; // 
                    $_SESSION['nombre'] = $nombre;
                    $_SESSION['apellido'] = $apellido;
                    $_SESSION['usuario'] = $usuario;

                    echo '
                    <!DOCTYPE html>
                    <html lang="es">
                    <head>
                        <meta charset="UTF-8">
                        <title>Registro Exitoso - ZOKORA</title>
                        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap" rel="stylesheet">
                        <link rel="stylesheet" href="css/style.css">
                        <meta http-equiv="refresh" content="2;url=perfil.php"> 
                    </head>
                    <body style="display:flex; justify-content:center; align-items:center; height:100vh; background-color:#fcfbf9;">
                        <div style="background:white; padding:40px; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.05); text-align:center; max-width:400px;">
                            <h2 style="font-family:\'Cinzel\',serif; color:#333; margin-bottom:15px;">¡Bienvenido a ZOKORA!</h2>
                            <p style="color:#666; font-size:15px; margin-bottom:25px;">Tu cuenta ha sido creada con éxito. Entrando a tu perfil...</p>
                            <a href="perfil.php" style="background-color:#d1c2b4; color:white; padding:12px 25px; border-radius:6px; text-decoration:none; font-weight:bold; display:inline-block;">Ir a mi perfil</a>
                        </div>
                    </body>
                    </html>
                    ';
                    exit();
                } else {
                    $mensaje_alerta = "Error al registrar (posible correo o usuario ya existente).";
                }
                $stmt->close();
            } else {
                $mensaje_alerta = "Error en el sistema de base de datos.";
            }
        }
    }
    if (!empty($mensaje_alerta)) {
        echo "<script>alert('$mensaje_alerta'); window.history.back();</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zokora - Regístrate</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="main-header">
        <div class="logo-container">
            <a href="index.php"><h1>ZOKORA</h1></a>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="rutinas.php">RUTINAS</a></li>
                <li><a href="biblioteca.php">BIBLIOTECA</a></li>
                <li><a href="perfil.php">PERFIL</a></li>
            </ul>
        </nav>
    </header>

    <main class="register-container">
        <div class="register-card">
            <h2>ÚNETE A ZOKORA</h2>
            <p class="register-subtitle">Elige cuidar tu bienestar. Crea tu propia personalidad.</p>

            <div class="social-login-grid">
                <button class="social-btn">
                    <img src="img/apple.png" alt="Apple"> Apple
                </button>
                <button class="social-btn">
                    <img src="img/facebook.png" alt="Facebook"> Facebook
                </button>
                <button class="social-btn">
                    <img src="img/google.png" alt="Google"> Google
                </button>
                <button class="social-btn">
                    <img src="img/microsoft.png" alt="Microsoft"> Microsoft
                </button>
            </div>

            <form class="register-form" action="registro.php" method="POST">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="apellido" placeholder="Apellido" required>
                <input type="text" name="usuario" placeholder="Nombre de usuario" required>
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="password" name="confirm_password" placeholder="Confirmar contraseña" required>
    
                <button type="submit" class="submit-btn">Crear mi cuenta</button>
            </form>

            <p class="login-prompt">
                ¿Ya tienes cuenta? <a href="index.php">Iniciar sesión</a>
            </p>
        </div>
    </main>

    <footer class="main-footer">
        <div class="footer-col">
            <h3>ZOKORA</h3>
        </div>
        <div class="footer-col">
            <h4>Informacion corporativa</h4>
            <ul>
                <li><a href="#">Acerca de Zokora</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Prensa</a></li>
                <li><a href="#">Empleo</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Comunidad y Negocios</h4>
            <ul>
                <li><a href="#">Recursos para creadores</a></li>
                <li><a href="#">Zokora Business</a></li>
                <li><a href="#">Publicidad</a></li>
                <li><a href="#">Ideas</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Legalidad y Soporte</h4>
            <ul>
                <li><a href="#">Condiciones del servicio</a></li>
                <li><a href="#">Política de privacidad</a></li>
                <li><a href="#">Directrices de la comunidad</a></li>
                <li><a href="contacto.php">Centro de asistencia</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Social</h4>
            <ul>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Threads</a></li>
                <li><a href="#">TikTok</a></li>
                <li><a href="#">X</a></li>
            </ul>
        </div>
    </footer>

</body>
</html>