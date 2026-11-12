<?php
session_start();
$mostrar_formulario_login = isset($_GET['action']) && $_GET['action'] === 'login';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zokora - Perfil <?php echo isset($_SESSION['nombre']) ? '- ' . htmlspecialchars($_SESSION['nombre']) : ''; ?></title>
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
                <li><a href="perfil.php" class="active">PERFIL</a></li>
            </ul>
        </nav>
    </header>

    <main class="collections-container" style="padding: 40px 20px 80px 20px; min-height: calc(100vh - 250px); display: flex; flex-direction: column; justify-content: center;">
        
        <?php if (!isset($_SESSION['user_id'])): ?>
            
            <div style="text-align: center; margin-bottom: 25px;">
                <h3 style="font-family: 'Cinzel', serif; font-size: 14px; letter-spacing: 3px; color: #8a7f72;">ZOKORA COMMUNITY</h3>
            </div>

            <?php if ($mostrar_formulario_login): ?>
                <div class="register-card" style="max-width: 450px; margin: 0 auto; text-align: center;">
                    <h2 style="font-family: 'Cinzel', serif; margin-bottom: 10px;">INICIAR SESIÓN</h2>
                    <p class="register-subtitle" style="margin-bottom: 20px;">Introduce tus datos para acceder a tu perfil.</p>
                    
                    <form class="register-form" action="procesar_login.php" method="POST" style="display: flex; flex-direction: column; gap: 15px; text-align: left;">
                        <div>
                            <label style="font-size: 12px; color: #8a7f72; font-family: 'Cinzel', serif;">Correo electrónico o Usuario</label>
                            <input type="text" name="email_or_user" placeholder="ej. usuario o correo@email.com" required style="width: 100%; padding: 10px; margin-top: 5px; box-sizing: border-box;">
                        </div>
                        <div>
                            <label style="font-size: 12px; color: #8a7f72; font-family: 'Cinzel', serif;">Contraseña</label>
                            <input type="password" name="password" placeholder="••••••••" required style="width: 100%; padding: 10px; margin-top: 5px; box-sizing: border-box;">
                        </div>
                        
                        <button type="submit" class="submit-btn" style="width: 100%; margin-top: 10px;">Entrar</button>
                    </form>

                    <p style="font-size: 13px; color: #8a7f72; margin-top: 15px; text-align: center;">
                        ¿Olvidaste tu contraseña? <a href="#" style="color: #555; text-decoration: underline;">Presiona aquí para recuperarla</a>
                    </p>

                    <p style="margin-top: 20px; font-size: 14px;">
                        <a href="perfil.php" style="color: #666; text-decoration: underline;">← Volver atrás</a>
                    </p>
                </div>
            <?php else: ?>
                <div class="register-card" style="max-width: 500px; margin: 0 auto; text-align: center;">
                    <h2 style="font-family: 'Cinzel', serif; margin-bottom: 15px;">Bienvenida a Zokora!</h2>
                    <p class="register-subtitle" style="margin-bottom: 25px;">Para acceder a tu perfil y consultar tus datos, necesitas iniciar sesión.</p>
                    
                    <div style="display: flex; gap: 15px; justify-content: center; margin-bottom: 20px;">
                        <a href="perfil.php?action=login" class="submit-btn" style="text-decoration: none; padding: 12px 25px; display: inline-block; text-align: center;">Iniciar sesión</a>
                        <a href="registro.php" class="submit-btn" style="text-decoration: none; background-color: #ebdcd6; padding: 12px 25px; display: inline-block; text-align: center;">Registrarse</a>
                    </div>
                    
                    <p class="login-prompt" style="margin-top: 20px;">
                        ¿No tienes una cuenta aún? <a href="registro.php">Crea una aquí</a>
                    </p>
                </div>
            <?php endif; ?>

        <?php else: ?>
            
            <?php 
                $inicial_nombre = !empty($_SESSION['nombre']) ? strtoupper(substr($_SESSION['nombre'], 0, 1)) : 'U';
            ?>
            <div class="profile-header-card" style="width: 100%; max-width: 750px; margin-left: auto; margin-right: auto;">
                <div class="profile-avatar-large"><?php echo htmlspecialchars($inicial_nombre); ?></div>
                
                <div class="profile-details">
                    <h2><?php echo htmlspecialchars($_SESSION['nombre'] . ' ' . $_SESSION['apellido']); ?></h2>
                    <p class="profile-username">@<?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
                    <p class="profile-stats-text">10.555 seguidores | 976 seguidos</p>
                </div>
                
                <div class="profile-actions-container">
                    <button class="filter-tag-btn">EDITAR PERFIL</button>
                    <button class="filter-tag-btn">COMPARTIR</button>
                    <a href="logout.php" class="filter-tag-btn logout-btn" style="text-decoration: none; display: inline-block; text-align: center;">CERRAR SESIÓN</a>
                </div>
            </div>

            <div class="profile-extra-sections" style="width: 100%; max-width: 750px; margin: 20px auto 0 auto; display: flex; flex-direction: column; gap: 20px;">
                <div class="profile-sub-card" style="width: 100%; box-sizing: border-box;">
                    <h3>Configuración de cuenta</h3>
                    <p>Actualiza tus datos personales y preferencias de seguridad.</p>
                    <a href="#" class="profile-inline-link">Gestionar cuenta</a>
                </div>

                <div class="profile-sub-card" style="width: 100%; box-sizing: border-box;">
                    <h3>¿Tienes una duda?</h3>
                    <p>Nuestro equipo de soporte te asiste con cualquier inconveniente.</p>
                    <a href="contacto.php" class="profile-inline-link">Contáctanos aquí</a>
                </div>
            </div>
            
        <?php endif; ?>

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