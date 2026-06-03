<?php
// Configuración de la conexión a la base de datos MySQL
include_once "../../config/Conexion.php";

if (!$dbh) {
    die("Error de conexión a la base de datos");
}


// Verificar si se recibió la cadena de datos
if (isset($_POST['numButton']) && isset($_POST['mac']) && isset($_POST['idOficina'])) {
    // Obtiene los datos enviados
    $buttonNumber = $_POST['numButton'];
    $macAddress = $_POST['mac'];
    $oficina = $_POST['idOficina'];
    $esNegocio = 'negocio';

    $sql = "SELECT id_entidad FROM oficinas WHERE id=?;";

    // Preparar la sentencia
    $stmt = $dbh->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param("i", $oficina);

    // Ejecuta la consulta preparada
    $stmt->execute();
    $result = $stmt->get_result();

    $row = $result->fetch_assoc();

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Prepara la consulta SQL para insertar los datos en la tabla calificaciones
    $sql = "INSERT INTO calificaciones (
                id_encuesta,
                id_pregunta,
                id_oficina,
                id_usuario,
                id_entidad,
                mac_dispositivo,
                calificacion,
                fecha_sys,
                tipo_calificacion
            ) VALUES (
                NULL,
                NULL,
                ?,
                NULL,
                ?,
                ?,
                ?,
                NOW(),
                ?
            )";

    // Preparar la sentencia
    $stmt = $dbh->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param("iisss", $oficina, $row['id_entidad'], $macAddress, $buttonNumber, $esNegocio);

    // Ejecuta la consulta preparada
    if ($stmt->execute()) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos en la base de datos: " . $stmt->error;
    }
    // Cierra la sentencia
    $stmt->close();
} else {
    // Si no se han recibido los datos esperados, devuelve un mensaje de error
    echo "Error: Datos faltantes o incorrectos.";
}

// Cierra la conexión a la base de datos
$dbh->close();
