<?php
    require_once("../../config/conexion.php");
    session_destroy();
    // Redirige al usuario a la ruta principal
    header("Location: " . Conectar::ruta());
    exit();
?>