# 🌿 Zokora – Plataforma Web de Bienestar

**Zokora** es una aplicación web dinámica orientada a la gestión de rutinas de gimnasio para mujeres en formato PDF. El proyecto ha sido completamente rediseñado y migrado desde una estructura estática (`.html`) hacia una arquitectura robusta basada en **PHP, MySQL y JavaScript**.

---

## 📂 Ficheros del Proyecto y Estructura

El código fuente está modularizado en archivos con extensión `.php` debidamente comentados para facilitar su lectura, mantenimiento y comprensión técnica:

```text
ZOKORA/
│
├── css/
│   └── style.css            # Estilos generales, cabecera fija, modales y tarjetas
├── img/                     # Recursos gráficos, banners e iconos corporativos
├── conexion.php             # Script de conexión centralizada a MySQL (mysqli)
├── index.php                # Página principal (Home)
├── registro.php             # Formulario de registro con lógica de Auto-Login
├── procesar_login.php       # Script de validación de credenciales e inicio de sesión
├── logout.php               # Script para la destrucción de sesiones activas
├── perfil.php               # Panel de control y datos del usuario (Zona Segura)
├── biblioteca.php           # Biblioteca personal de PDFs con buscador en tiempo real
├── rutinas.php              # Catálogo de rutinas con filtrado dinámico
├── contacto.php             # Formulario de soporte conectado a la base de datos
└── zokora.sql               # Script SQL para recrear las tablas y datos de prueba

```

---

## 🚀 Descripción Técnica y Guía de Uso

### 1. ¿Cómo navegar por las vistas?

La interfaz cuenta con un menú de navegación superior unificado en todas las páginas e implementado con un **Sticky Header** (`position: sticky`), el cual acompaña al usuario durante el *scroll* vertical para facilitar el acceso instantáneo a cualquier sección:

* **HOME (`index.php`):** Vista de bienvenida con banners corporativos y secciones de inspiración sobre salud y bienestar.
* **RUTINAS (`rutinas.php`):** Catálogo interactivo equipado con un buscador dinámico en JavaScript que filtra las rutinas en tiempo real sin recargar la página.
* **BIBLIOTECA (`biblioteca.php`):** Espacio personal para gestionar guías en PDF. Si el usuario no ha iniciado sesión, el sistema muestra una tarjeta restringida invitándolo a loguearse o registrarse.
* **PERFIL (`perfil.php`):** Panel privado del usuario con sus datos de sesión y opciones de configuración corporativa.

### 2. ¿Cómo enviar los formularios?

* **Registro (`registro.php`):** El formulario recopila los datos del usuario, valida que no existan campos vacíos ni contraseñas desparejas, y procesa la clave mediante `password_hash()`. Tras una inserción exitosa mediante consultas preparadas (`prepared statements`), el sistema ejecuta automáticamente un **Auto-Login** creando las variables de sesión y redirigiendo al usuario a su perfil sin requerir un inicio de sesión manual.


* **Inicio de Sesión (`procesar_login.php`):** Permite ingresar mediante correo electrónico o nombre de usuario, validando la contraseña cifrada contra la base de datos MySQL.
* **Soporte y Contacto (`contacto.php`):** Los mensajes enviados desde el formulario se insertan de forma segura en la tabla `contacto` y muestran una pantalla de confirmación integrada directamente en el diseño corporativo, evitando el uso de alertas nativas del navegador.

### 3. ¿Cómo ingresar a la zona segura mediante sesiones?

Las secciones protegidas (como `perfil.php` y `biblioteca.php`) implementan un control de acceso basado en sesiones nativas de PHP (`session_start()`):

1. Al autenticarse correctamente o registrarse, el servidor almacena el identificador único del usuario (`$_SESSION['user_id']`).
2. Al ingresar a cualquier zona segura, el script verifica la existencia de esta variable de sesión.
3. Si la sesión **existe**, se despliega el contenido exclusivo del usuario (como la tabla de descargas desde el `localStorage` en la biblioteca).


4. Si la sesión **no existe**, el sistema bloquea el acceso directo y muestra una interfaz alternativa con opciones para iniciar sesión o crear una cuenta nueva.



---

## ⚙️ Instalación y Configuración Local

1. Clona este repositorio o coloca la carpeta del proyecto dentro del directorio raíz de tu servidor local (ej. `htdocs` en **XAMPP**).
2. Importa el archivo **`zokora.sql`** a través de **phpMyAdmin** para crear la base de datos y sus tablas correspondientes.
3. Configura las credenciales de tu servidor de base de datos en el archivo **`conexion.php`**:
```php
$host = "localhost";
$user = "root";
$password = "";
$database = "zokora";

```


4. Inicia los servicios de Apache y MySQL en tu entorno local e ingresa en el navegador a:
`http://localhost/tu-ruta/ZOKORA/index.php`
---
