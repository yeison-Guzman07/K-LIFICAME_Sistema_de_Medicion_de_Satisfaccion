<?php
    session_start();

    // Eliminar variables de sesión específicas
    unset($_SESSION['id_user']);
    unset($_SESSION['user']);
    unset($_SESSION['entity']);
    unset($_SESSION['rol']);

    // Destruir la sesión actual
    session_destroy();

    // Cerrar y regenerar la sesión
    session_regenerate_id(true);

    // Limpiar cookies relacionadas con la sesión si las hay
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 3600, '/');
    }

    // Redirigir a la página principal u otra página de tu elección
    header("Location: ../");
?>
