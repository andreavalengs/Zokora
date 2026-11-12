<?php
$servidor = "localhost";
$usuario_db = "root";
$password_db = ""; 
$base_datos = "zokora"; 

$conexion = new mysqli($servidor, $usuario_db, $password_db, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>