<?php
$dsn = 'mysql:host=localhost;dbname=universidad';
$usuario = 'tu_usuario';
$contraseña = 'tu_contraseña';

try {
    $conexion = new PDO($dsn, $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "¡Conexión exitosa a la base de datos!";
} catch(PDOException $e) {
    echo "Error al conectarse a la base de datos: " . $e->getMessage();
}
?>