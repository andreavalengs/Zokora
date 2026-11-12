<?php
session_start();
$usuario_logueado = isset($_SESSION['user_id']) ? 'true' : 'false';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zokora - Rutinas</title>
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
                <li><a href="rutinas.php" class="active">RUTINAS</a></li>
                <li><a href="biblioteca.php">BIBLIOTECA</a></li>
                <li><a href="perfil.php">PERFIL</a></li>
            </ul>
        </nav>
    </header>

    <main class="explore-container">
        <div class="explore-search-bar">
            <input type="text" id="searchInput" placeholder="Buscar rutina...">
        </div>

        <div class="explore-filters">
            <button class="filter-tag-btn">Glúteos y Piernas</button>
            <button class="filter-tag-btn">Tren Superior</button>
            <button class="filter-tag-btn">Tren Inferior</button>
            <button class="filter-tag-btn">Abdomen</button>
            <button class="filter-tag-btn">Cardio</button>
            <button class="filter-more-btn">Más +</button>
        </div>

        <div class="explore-grid">
            
            <div class="explore-card">
                 <h3>
                     <span class="card-subtitle-top">GUÍA DE</span>
                     CARDIO<br>
                     <span class="vol-highlight">VOL. III</span>
                 </h3>
                 <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    TREN INFERIOR<br>
                    <span class="vol-highlight">VOL. I</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    GLÚTEOS<br>
                    <span class="vol-highlight">VOL. II</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    CALENTAMIENTO<br>
                    <span class="vol-highlight">VOL. I</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    ABDOMEN<br>
                    <span class="vol-highlight">VOL. IV</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    BRAZOS<br>
                    <span class="vol-highlight">VOL. I</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    ESTIRAMIENTO<br>
                    <span class="vol-highlight">VOL. III</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    TREN SUPERIOR<br>
                    <span class="vol-highlight">VOL. II</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    PIERNAS<br>
                    <span class="vol-highlight">VOL. V</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    ESPALDA<br>
                    <span class="vol-highlight">VOL. I</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    PECHO<br>
                    <span class="vol-highlight">VOL. III</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    GLÚTEOS Y PIERNAS<br>
                    <span class="vol-highlight">VOL. I</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    CARDIO<br>
                    <span class="vol-highlight">VOL. I</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    ABDOMEN<br>
                    <span class="vol-highlight">VOL. I</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    PIERNAS<br>
                    <span class="vol-highlight">VOL. II</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    TREN SUPERIOR<br>
                    <span class="vol-highlight">VOL. IV</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    ESTIRAMIENTO<br>
                    <span class="vol-highlight">VOL. I</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    PECHO<br>
                    <span class="vol-highlight">VOL. I</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    CALENTAMIENTO<br>
                    <span class="vol-highlight">VOL. II</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    ESPALDA<br>
                    <span class="vol-highlight">VOL. III</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    BRAZOS<br>
                    <span class="vol-highlight">VOL. IV</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    TREN INFERIOR<br>
                    <span class="vol-highlight">VOL. III</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    GLÚTEOS<br>
                    <span class="vol-highlight">VOL. I</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    PIERNAS<br>
                    <span class="vol-highlight">VOL. I</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    CARDIO<br>
                    <span class="vol-highlight">VOL. IV</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    ABDOMEN<br>
                    <span class="vol-highlight">VOL. II</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    TREN SUPERIOR<br>
                    <span class="vol-highlight">VOL. I</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    ESTIRAMIENTO<br>
                    <span class="vol-highlight">VOL. II</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    ESPALDA<br>
                    <span class="vol-highlight">VOL. II</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    CALENTAMIENTO<br>
                    <span class="vol-highlight">VOL. III</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    BRAZOS<br>
                    <span class="vol-highlight">VOL. II</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    PECHO<br>
                    <span class="vol-highlight">VOL. II</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    PIERNAS<br>
                    <span class="vol-highlight">VOL. IV</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    GLÚTEOS<br>
                    <span class="vol-highlight">VOL. III</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    TREN INFERIOR<br>
                    <span class="vol-highlight">VOL. II</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    CARDIO<br>
                    <span class="vol-highlight">VOL. II</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    ESTIRAMIENTO<br>
                    <span class="vol-highlight">VOL. IV</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    ABDOMEN<br>
                    <span class="vol-highlight">VOL. III</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    TREN SUPERIOR<br>
                    <span class="vol-highlight">VOL. III</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    CALENTAMIENTO<br>
                    <span class="vol-highlight">VOL. IV</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    BRAZOS<br>
                    <span class="vol-highlight">VOL. III</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    PIERNAS<br>
                    <span class="vol-highlight">VOL. III</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    ESPALDA<br>
                    <span class="vol-highlight">VOL. IV</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    PECHO<br>
                    <span class="vol-highlight">VOL. IV</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    GLÚTEOS<br>
                    <span class="vol-highlight">VOL. IV</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    TREN INFERIOR<br>
                    <span class="vol-highlight">VOL. IV</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    CARDIO<br>
                    <span class="vol-highlight">VOL. V</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

            <div class="explore-card">
                <h3>
                    <span class="card-subtitle-top">GUÍA DE</span>
                    ABDOMEN<br>
                    <span class="vol-highlight">VOL. V</span>
                </h3>
                <div class="explore-card-footer"><a href="#" class="explore-btn-download">DESCARGAR</a></div>
            </div>

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

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const estaLogueado = <?php echo $usuario_logueado; ?>;

        function showZokoraAlert(message, onConfirm = null) {
            const overlay = document.createElement("div");
            overlay.className = "zokora-modal-overlay";
            overlay.innerHTML = `
                <div class="zokora-modal-box">
                    <p class="zokora-modal-title">${message}</p>
                    <div class="zokora-modal-buttons">
                        <button class="zokora-modal-btn zokora-btn-confirm" id="modal-ok">Aceptar</button>
                    </div>
                </div>
            `;
            document.body.appendChild(overlay);

            document.getElementById("modal-ok").addEventListener("click", () => {
                overlay.remove();
                if (onConfirm) onConfirm();
            });
        }

        // --- LÓGICA DE DESCARGA DE GUÍAS ---
        const downloadButtons = document.querySelectorAll(".explore-btn-download");

        downloadButtons.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                e.preventDefault();
                
                if (!estaLogueado) {
                    showZokoraAlert("Debes iniciar sesión para poder descargar las guías.", () => {
                        window.location.href = "perfil.php?action=login";
                    });
                    return;
                }
                
                const card = btn.closest(".explore-card");
                const subtitle = card.querySelector(".card-subtitle-top").textContent;
                
                let mainTitleText = "";
                card.querySelector("h3").childNodes.forEach(node => {
                    if (node.nodeType === Node.TEXT_NODE && node.nodeValue.trim() !== "") {
                        mainTitleText = node.nodeValue.trim();
                    }
                });
                
                const vol = card.querySelector(".vol-highlight").textContent;
                const fullTitle = `${subtitle} ${mainTitleText} ${vol}`;
                
                const today = new Date();
                const dateStr = today.toLocaleDateString('es-ES', { day: '2-digit', month: '2-digit', year: 'numeric' });

                let library = JSON.parse(localStorage.getItem("zokoraLibrary")) || [];

                const exists = library.some(item => item.title === fullTitle);
                if (!exists) {
                    library.push({ title: fullTitle, date: dateStr });
                    localStorage.setItem("zokoraLibrary", JSON.stringify(library));
                    showZokoraAlert("¡Guía descargada y agregada a tu Biblioteca con éxito!");
                } else {
                    showZokoraAlert("Esta guía ya se encuentra en tu Biblioteca.");
                }
            });
        });

        const searchInput = document.getElementById("searchInput");
        const cards = document.querySelectorAll(".explore-card");
        const filterButtons = document.querySelectorAll(".explore-filters .filter-tag-btn");

        function filtrarRutinas(query) {
            const filtro = query.toLowerCase().trim();

            cards.forEach(card => {
                const textoTarjeta = card.textContent.toLowerCase();

                if (filtro === "" || textoTarjeta.includes(filtro)) {
                    card.classList.remove("oculto"); 
                } else {
                    card.classList.add("oculto");    
                }
            });
        }

        searchInput.addEventListener("input", (e) => {
            filtrarRutinas(e.target.value);
        });

        searchInput.addEventListener("keydown", (e) => {
            if (e.key === "Enter") {
                e.preventDefault();
                filtrarRutinas(searchInput.value);
            }
        });

        filterButtons.forEach(btn => {
            btn.addEventListener("click", () => {
                const categoria = btn.textContent.trim();
                searchInput.value = categoria;
                filtrarRutinas(categoria);
            });
        });
    });
</script>

</body>
</html>