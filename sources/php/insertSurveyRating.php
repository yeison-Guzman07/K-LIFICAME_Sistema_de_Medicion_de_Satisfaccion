<?php
$comentary = isset($_POST['comentary']) ? $_POST['comentary'] : '';

if (isset($_POST['responses']) && is_array($_POST['responses'])) {
    $responses = $_POST['responses'];
    $dbh->set_charset("utf8mb4");
    // Verificar que todas las preguntas tienen una respuesta
    $allAnswered = true;
    foreach ($idPregunta as $questionId) {
        if (!isset($responses[$questionId])) {
            $allAnswered = false;
            break;
        }
    }

    if ($allAnswered) {
        // Insertar respuestas en la base de datos
        foreach ($responses as $questionId => $response) {
            $questionId = intval($questionId);
            $response = intval($response);

            if ($rolCreadorSurvey == 4) {
                $tipo = 'personal';

                // Prepara tu consulta para insertar las respuestas
                $query = "INSERT INTO calificaciones (id_encuesta, id_pregunta, id_oficina, id_usuario, id_entidad, mac_dispositivo, calificacion, fecha_sys, tipo_calificacion
                    ) VALUES (
                        ?,                   -- id_encuesta
                        ?,                   -- id_pregunta
                        NULL,                -- id_oficina (NULL porque no aplica a un negocio específico)
                        ?,                   -- id_usuario (creador de la encuesta)
                        NULL,                -- id_entidad (NULL porque es una calificación personal)
                        NULL,                -- mac_dispositivo (NULL porque no aplica)
                        ?,                   -- calificacion
                        now(),               -- fecha_sys
                        ?           -- tipo_calificacion
                    );";

                if ($stmt = $dbh->prepare($query)) {
                    $stmt->bind_param("iiiss", $idSurvey, $questionId, $idCreadorSurvey, $response, $tipo);
                    $stmt->execute();
                    $stmt->close();
                } else {
                    echo "Error en la preparación de la consulta: " . $dbh->error;
                }
            } else {
                $tipo = 'negocio';
            }
        }
        if (!empty($comentary)) {
            $query = "INSERT INTO comentarios_encuestas (id_encuesta, comentario, fecha_respuesta) VALUES (?, ?, now())";

            if ($stmt = $dbh->prepare($query)) {
                $stmt->bind_param("is", $idSurvey, $comentary);
                $stmt->execute();
                $stmt->close();
            } else {
                echo "Error en la preparación de la consulta: " . $dbh->error;
            }
        }
        echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Gracias Por Tu Valioso Aporte",
                    text: "Tu participación es de suma importancia para nosotros.",
                    confirmButtonColor: "#00C201"
                });
            </script>';
    }
} else {
    echo '<script>
            Swal.fire({
                icon: "warning",
                title: "¡Antes De Comenzar!",
                text: "Debe responder todas las preguntas, si no lo hace no podra enviar nada.",
                confirmButtonColor: "#00C201"
            });
        </script>';
}
