<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once __DIR__ . "/conexion.php";

$mensaje_alerta = "";
$exito_envio = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($conexion) || $conexion->connect_error) {
        $mensaje_alerta = "Error crítico: No se pudo establecer la conexión a la base de datos.";
    } else {
        $nombre = $_POST['nombre'] ?? '';
        $apellido = $_POST['apellido'] ?? '';
        $email = $_POST['email'] ?? '';
        $mensaje = $_POST['mensaje'] ?? '';

        if (empty($nombre) || empty($apellido) || empty($email) || empty($mensaje)) {
            $mensaje_alerta = "Por favor, completa todos los campos.";
        } else {
            $sql = "INSERT INTO contacto (nombre, apellido, email, mensaje) VALUES (?, ?, ?, ?)";
            $stmt = $conexion->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("ssss", $nombre, $apellido, $email, $mensaje);
                if ($stmt->execute()) {
                    $exito_envio = true;
                } else {
                    $mensaje_alerta = "Error al enviar el mensaje: " . $conexion->error;
                }
                $stmt->close();
            } else {
                $mensaje_alerta = "Error en la preparación de la consulta.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zokora - Contacto</title>
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

    <main class="contact-container" style="padding: 40px 20px 80px 20px; min-height: calc(100vh - 250px); display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <div class="contact-card" style="width: 100%; max-width: 500px; text-align: center;">
            
            <?php if ($exito_envio): ?>
                <h2 style="font-family: 'Cinzel', serif; margin-bottom: 15px;">¡MENSAJE ENVIADO!</h2>
                <p class="contact-subtitle" style="margin-bottom: 25px;">Gracias por escribirnos. Nuestro equipo de soporte te responderá a la brevedad.</p>
                <a href="index.php" class="submit-btn" style="text-decoration: none; display: inline-block; padding: 12px 25px;">Volver al inicio</a>
            
            <?php else: ?>
                <h2>CONTACTO</h2>
                <p class="contact-subtitle">¿Tienes alguna duda o sugerencia? Escríbenos y te leemos.</p>

                <?php if (!empty($mensaje_alerta)): ?>
                    <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 6px; margin-bottom: 15px; font-size: 14px; text-align: left;">
                        <?php echo htmlspecialchars($mensaje_alerta); ?>
                    </div>
                <?php endif; ?>

                <form action="contacto.php" method="POST" class="contact-form" style="display: flex; flex-direction: column; gap: 15px; text-align: left;">
                    <div>
                        <label style="font-size: 12px; color: #8a7f72; font-family: 'Cinzel', serif;">Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre" required style="width: 100%; padding: 10px; margin-top: 5px; box-sizing: border-box;">
                    </div>
                    <div>
                        <label style="font-size: 12px; color: #8a7f72; font-family: 'Cinzel', serif;">Apellido</label>
                        <input type="text" name="apellido" placeholder="Apellido" required style="width: 100%; padding: 10px; margin-top: 5px; box-sizing: border-box;">
                    </div>
                    <div>
                        <label style="font-size: 12px; color: #8a7f72; font-family: 'Cinzel', serif;">Correo electrónico</label>
                        <input type="email" name="email" placeholder="correo@email.com" required style="width: 100%; padding: 10px; margin-top: 5px; box-sizing: border-box;">
                    </div>
                    <div>
                        <label style="font-size: 12px; color: #8a7f72; font-family: 'Cinzel', serif;">Mensaje</label>
                        <textarea name="mensaje" placeholder="Escribe tu mensaje aquí..." required style="width: 100%; padding: 10px; margin-top: 5px; box-sizing: border-box; height: 120px; resize: vertical;"></textarea>
                    </div>
                    <button type="submit" class="submit-btn" style="width: 100%; margin-top: 10px;">ENVIAR MENSAJE</button>
                </form>
            <?php endif; ?>

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