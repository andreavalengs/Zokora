<?php
session_start();
$mostrar_formulario_login = isset($_GET['action']) && $_GET['action'] === 'login';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zokora - Mi Biblioteca</title>
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
                <li><a href="biblioteca.php" class="active">BIBLIOTECA</a></li>
                <li><a href="perfil.php">PERFIL</a></li>
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
                    <p class="register-subtitle" style="margin-bottom: 20px;">Introduce tus datos para acceder a tu biblioteca.</p>
                    
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
                        <a href="biblioteca.php" style="color: #666; text-decoration: underline;">← Volver atrás</a>
                    </p>
                </div>

            <?php else: ?>
                <div class="register-card" style="max-width: 500px; margin: 0 auto; text-align: center;">
                    <h2 style="font-family: 'Cinzel', serif; margin-bottom: 15px;">Bienvenida a Zokora!</h2>
                    <p class="register-subtitle" style="margin-bottom: 25px;">Para ver y gestionar tu biblioteca, necesitas iniciar sesión.</p>
                    
                    <div style="display: flex; gap: 15px; justify-content: center; margin-bottom: 20px;">
                        <a href="biblioteca.php?action=login" class="submit-btn" style="text-decoration: none; padding: 12px 25px; display: inline-block; text-align: center;">Iniciar sesión</a>
                        <a href="registro.php" class="submit-btn" style="text-decoration: none; background-color: #ebdcd6; padding: 12px 25px; display: inline-block; text-align: center;">Registrarse</a>
                    </div>
                    
                    <p class="login-prompt" style="margin-top: 20px;">
                        ¿No tienes una cuenta aún? <a href="registro.php">Crea una aquí</a>
                    </p>
                </div>
            <?php endif; ?>

        <?php else: ?>
            <div class="collections-top-bar centered-bar">
                <div class="action-buttons">
                    <button class="filter-tag-btn">PUBLICAR</button>
                </div>

                <div class="search-wrapper">
                    <input type="text" id="librarySearchInput" placeholder="Buscar en tu biblioteca...">
                </div>
                
                <div class="spacer-right"></div>
            </div>
            
            <div class="collections-tabs">
                <a href="#" class="tab-link active-tab">DESCARGAS</a>
                <a href="#" class="tab-link">PUBLICACIONES</a>
            </div>
            
            <div class="library-table-wrapper">
                <table class="library-table">
                    <tbody id="library-tbody">
                    </tbody>
                </table>
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

<?php if (isset($_SESSION['user_id'])): ?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const tbody = document.getElementById("library-tbody");
        const searchInput = document.getElementById("librarySearchInput");

        function showZokoraConfirm(message, onConfirm) {
            const overlay = document.createElement("div");
            overlay.className = "zokora-modal-overlay";
            overlay.innerHTML = `
                <div class="zokora-modal-box">
                    <p class="zokora-modal-title">${message}</p>
                    <div class="zokora-modal-buttons">
                        <button class="zokora-modal-btn zokora-btn-cancel" id="modal-cancel">Cancelar</button>
                        <button class="zokora-modal-btn zokora-btn-confirm" id="modal-confirm">Confirmar</button>
                    </div>
                </div>
            `;
            document.body.appendChild(overlay);

            document.getElementById("modal-cancel").addEventListener("click", () => {
                overlay.remove();
            });

            document.getElementById("modal-confirm").addEventListener("click", () => {
                overlay.remove();
                onConfirm();
            });
        }

        function renderLibrary(filtro = "") {
            let library = JSON.parse(localStorage.getItem("zokoraLibrary")) || [];
            tbody.innerHTML = "";

            const textoFiltro = filtro.toLowerCase().trim();

            const libraryFiltrada = library.filter(item => 
                item.title.toLowerCase().includes(textoFiltro) || 
                item.date.toLowerCase().includes(textoFiltro)
            );

            if (libraryFiltrada.length === 0) {
                tbody.innerHTML = `<tr><td colspan="3" style="text-align:center; padding: 40px; color: #8a7f72; font-family: 'Cinzel', serif;">No se encontraron guías en tu biblioteca.</td></tr>`;
                return;
            }

            libraryFiltrada.forEach((item) => {
                const indexReal = library.findIndex(el => el.title === item.title);

                const row = document.createElement("tr");
                row.className = "library-row";
                row.innerHTML = `
                    <td class="col-info">
                        <span class="file-title">${item.title} <span class="pdf-tag">PDF</span></span>
                    </td>
                    <td class="col-date">Añadido el ${item.date}</td>
                    <td class="col-action">
                        <button class="delete-btn" title="Eliminar" data-index="${indexReal}">🗑️</button>
                    </td>
                `;
                tbody.appendChild(row);
            });

            document.querySelectorAll(".delete-btn").forEach(btn => {
                btn.addEventListener("click", (e) => {
                    const idx = e.currentTarget.getAttribute("data-index");
                    
                    showZokoraConfirm("¿Seguro que quieres eliminar el PDF?", () => {
                        let currentLibrary = JSON.parse(localStorage.getItem("zokoraLibrary")) || [];
                        currentLibrary.splice(idx, 1);
                        localStorage.setItem("zokoraLibrary", JSON.stringify(currentLibrary));
                        renderLibrary(searchInput.value); // Re-renderizamos manteniendo el filtro actual
                    });
                });
            });
        }

        renderLibrary();

        if (searchInput) {
            searchInput.addEventListener("input", (e) => {
                renderLibrary(e.target.value);
            });

            searchInput.addEventListener("keydown", (e) => {
                if (e.key === "Enter") {
                    e.preventDefault();
                    renderLibrary(searchInput.value);
                }
            });
        }
    });
</script>
<?php endif; ?>
</body>
</html>