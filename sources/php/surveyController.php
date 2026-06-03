<?php
    include "../config/Conexion.php";

    // Declaración correcta de la consulta SQL
    $query = "SELECT
        e.id,
        e.titulo,
        e.id_usuario,
        u.id_rol,
        p.texto_pregunta,
        p.id AS id_pregunta
    FROM encuestas AS e 
    INNER JOIN preguntas AS p ON e.id = p.id_encuesta
    INNER JOIN usuarios AS u ON e.id_usuario = u.id
    WHERE e.id = ?
    ORDER BY p.id ASC;";

    // Preparar la consulta
    if ($stmt = $dbh->prepare($query)) {
        // Asignar parámetros y ejecutar
        $stmt->bind_param("s", $idSurvey);
        $stmt->execute();

        // Vincular resultados de la consulta
        $result = $stmt->get_result();

        // Inicializar arreglos para almacenar resultados
        $tituloEncuesta = [];
        $txtPregunta = [];
        $idPregunta = [];

        // Recorrer resultados y guardar en arreglos
        while ($row = $result->fetch_assoc()) {
            $tituloEncuesta[] = $row['titulo'];
            $idUsuarioCreador[] = $row['id_usuario'];
            $rolUsuarioCreador[] = $row['id_rol'];
            $txtPregunta[] = $row['texto_pregunta'];
            $idPregunta[] = $row['id_pregunta'];
        }

        // Cerrar declaración
        $stmt->close();
    } else {
        // Manejo de errores en la preparación de la consulta
        echo "Error en la preparación de la consulta: " . $dbh->error;
    }

    $rolCreadorSurvey = $rolUsuarioCreador[0];
    $idCreadorSurvey = $idUsuarioCreador[0];

    $constructor = '<h1>'.$tituloEncuesta[0].'</h1>';
    foreach($txtPregunta as $index => $text){
        $constructor .= '
        <section class="question" id="Question'.($index+1).'">
            <p class="txtQuestion">'.utf8_encode($text).'</p>
            <div class="questOptions">
                <label for="Question'.$idPregunta[$index].'Option1" class="optionContent" id="ContentQuestion'.($index+1).'Option1">
                    <img src="https://klificamefisico.comunisoft.com/sources/img/1_Color.png" alt="">
                    <p class="optionP1">MUY INSATISFECHO</p>
                    <input type="radio" id="Question'.$idPregunta[$index].'Option1" name="responses['.$idPregunta[$index].']" class="radioOption" value="1" required>
                </label>
    
                <label for="Question'.$idPregunta[$index].'Option2" class="optionContent" id="ContentQuestion'.($index+1).'Option2">
                    <img src="https://klificamefisico.comunisoft.com/sources/img/2_Color.png" alt="">
                    <p class="optionP2">INSATISFECHO</p>
                    <input type="radio" id="Question'.$idPregunta[$index].'Option2" name="responses['.$idPregunta[$index].']" class="radioOption" value="2" required>
                </label>
                
                <label for="Question'.$idPregunta[$index].'Option3" class="optionContent" id="ContentQuestion'.($index+1).'Option3">
                    <img src="https://klificamefisico.comunisoft.com/sources/img/3_Color.png" alt="">
                    <p class="optionP3">NEUTRAL</p>
                    <input type="radio" id="Question'.$idPregunta[$index].'Option3" name="responses['.$idPregunta[$index].']" class="radioOption" value="3" required>
                </label>
                
                <label for="Question'.$idPregunta[$index].'Option4" class="optionContent" id="ContentQuestion'.($index+1).'Option4">
                    <img src="https://klificamefisico.comunisoft.com/sources/img/4_Color.png" alt="">
                    <p class="optionP4">SATISFECHO</p>
                    <input type="radio" id="Question'.$idPregunta[$index].'Option4" name="responses['.$idPregunta[$index].']" class="radioOption" value="4" required>
                </label>
                
                <label for="Question'.$idPregunta[$index].'Option5" class="optionContent" id="ContentQuestion'.($index+1).'Option5">
                    <img src="https://klificamefisico.comunisoft.com/sources/img/5_Color.png" alt="">
                    <p class="optionP5">MUY SATISFECHO</p>
                    <input type="radio" id="Question'.$idPregunta[$index].'Option5" name="responses['.$idPregunta[$index].']" class="radioOption" value="5" required>
                </label>
            </div>
        </section>
        ';
    }
?>