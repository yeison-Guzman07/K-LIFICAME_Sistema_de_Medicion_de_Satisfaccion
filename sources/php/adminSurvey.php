<?php
    include "../config/Conexion.php";

    $idUser = $_SESSION['id_user'];

    $query = "SELECT id, titulo FROM encuestas WHERE id_usuario = ? AND es_negocio = 0;";

    // Preparar la sentencia
    $stmt = $dbh->prepare($query);

    // Vincular el parámetro
    $stmt->bind_param("i", $idUser);

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener los resultados
    $result = $stmt->get_result();

    // Procesar los resultados
    while ($row = $result->fetch_assoc()) {
        $idEncuesta[] = $row['id'];
        $tituloEncuesta[] = $row['titulo'];
    }

    // Cerrar la declaración
    $stmt->close();

        $constructor = '<h1>Encuestas Creadas</h1>
        <div class="container">';
        
        $i=0;

        foreach ($tituloEncuesta as $valor) {
            $encuestaid = "'";
            $encuestaid .= "".$idEncuesta[$i];
            $encuestaid .= "'";

            $constructor .= '<div class="survey">
                <div class="titleSurvey">
                    <h2>' . $valor . '</h2><i class="fa-solid fa-share-from-square" title="Compartir" onclick="showShareOptions('.$encuestaid.')"></i>
                </div>
                <hr>
                <img class="surveyImg" src="../sources/img/Klificame Isotipo Blanco.png" alt="">
                <hr>
                <div class="surveyOption">
                    <a href="createQuest.php"><p><i class="fa-solid fa-pen" title="Editar"></i></p></a>
                    <a href="statisticSurveys.php?encuesta='.$idEncuesta[$i].'"><p><i class="fa-solid fa-chart-simple" title="Ver Estadisticas"></i></p></a>
                    <p><i class="fa-solid fa-trash-can" title="Eliminar"></i></p>
                </div>
            </div>';
            $i++;
            $encuestaid = "";
        }
        
        $constructor .= '<div class="addSurvey" id="addSurvey" title="Crear Encuesta">
                <i class="fa-regular fa-square-plus"></i>
            </div>';
?>