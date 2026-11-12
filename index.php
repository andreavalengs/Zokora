<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zokora - El bienestar que se elige</title>
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
                <li><a href="index.php" class="active">HOME</a></li>
                <li><a href="rutinas.php">RUTINAS</a></li>
                <li><a href="biblioteca.php">BIBLIOTECA</a></li>
                <li><a href="perfil.php">PERFIL</a></li>
            </ul>
        </nav>
    </header>

    <section class="welcome-banner">
        <h2>EL BIENESTAR QUE SE ELIGE</h2>
        <div class="banner-grid-full">
            <img src="img/banner1.png" alt="Banner Zokora 1">
            <img src="img/banner2.png" alt="Banner Zokora 2">
            <img src="img/banner3.png" alt="Banner Zokora 3">
        </div>
    </section>

    <main class="home-container">
        
        <section class="inspiration-section">
            <h3>EL CAMBIO QUE TU SALUD NECESITA SIN RUTINAS ETERNAS Y PESADAS</h3>
            <div class="inspiration-grid">
                <img src="img/banner4.png" alt="Inspiración 1">
                <img src="img/banner5.png" alt="Inspiración 2">
                <img src="img/banner6.png" alt="Inspiración 3">
            </div>
        </section>

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