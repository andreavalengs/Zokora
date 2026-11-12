<?php
session_start();
include_once __DIR__ . "/conexion.php";

if (!isset($conexion) || $conexion->connect_error) {
    die("Error crítico: No se pudo establecer la conexión a la base de datos.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturamos los datos del formulario de la home
    $identificador = $_POST['email_or_user'] ?? ''; // Puede ser correo o nombre de usuario
    $password_ingresada = $_POST['password'] ?? '';

    if (empty($identificador) || empty($password_ingresada)) {
        echo "<script>alert('Por favor, completa todos los campos.'); window.history.back();</script>";
        exit();
    }

    // Buscamos al usuario en la tabla 'usuario' por correo o por nombre de usuario
    $sql = "SELECT * FROM usuario WHERE email = ? OR usuario = ?";
    $stmt = $conexion->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ss", $identificador, $identificador);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows === 1) {
            $user = $resultado->fetch_assoc();

            // Verificamos que la contraseña coincida con el hash almacenado
            if (password_verify($password_ingresada, $user['password'])) {
                // Guardamos los datos clave en la sesión de PHP
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['nombre'] = $user['nombre'];
                $_SESSION['apellido'] = $user['apellido'];
                $_SESSION['usuario'] = $user['usuario'];

                // Redirigimos al perfil personalizado
                header("Location: perfil.php");
                exit();
            } else {
                echo "<script>alert('Contraseña incorrecta.'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('No existe una cuenta con ese correo o usuario.'); window.history.back();</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Error en el sistema.'); window.history.back();</script>";
    }
}
$conexion->close();
?>