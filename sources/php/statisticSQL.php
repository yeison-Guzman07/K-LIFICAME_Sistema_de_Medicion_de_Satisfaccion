<?php 
    include "../config/Conexion.php";
    setlocale(LC_TIME, 'es_ES.utf8');

    $sql = "SET lc_time_names = 'es_ES';";
    $dbh->query($sql);

    $entidad = $_SESSION['entity'];
    $mes = 5; // MES ACTUAL       ESTA SUJETO A CAMBIO PERO SIGUE HACIENDO EL ROL DE SER EL ACTUAL
    $anio = 2024; // AÑO ACTUAL      ESTA SUJETO A CAMBIO PERO SIGUE HACIENDO EL ROL DE SER EL ACTUAL

///// CONSULTAR NOMBRE DE LA ENTIDAD
$query1 = "SELECT u.usuario
    FROM usuarios u
    INNER JOIN usuarios_negocios bu ON u.id = bu.id_usuario
    WHERE bu.id_entidad = ?";

// Preparar la sentencia
$stmt = $dbh->prepare($query1);

// Vincular el parámetro
$stmt->bind_param("i", $entidad);

// Ejecutar la consulta
$stmt->execute();

// Obtener los resultados
$result = $stmt->get_result();

// Inicializar el arreglo para almacenar los nombres de entidad
$nomEntidad = [];

// Procesar los resultados
while ($row = $result->fetch_assoc()) {
    $nomEntidad[] = $row['usuario'];
}

// Cerrar la declaración
$stmt->close();

////////////////////////////////////////////////////////

    /* HAYAR MESES ANTERIORES */
        $mes_anterior1 = 0; 
        $mes_anterior2 = 0; 
        $mes_anterior3 = 0; 
        $mes_anterior4 = 0; 
        
        $anioMes1 = $anio; 
        $anioMes2 = $anio; 
        $anioMes3 = $anio; 
        $anioMes4 = $anio;
        
        // MES 1
        if ($mes == 1){
            $mes_anterior1 = 12; 
            $anioMes1 -= 1; 
            $anioMes2 -= 1; 
            $anioMes3 -= 1; 
            $anioMes4 -= 1;
        }else{
            $mes_anterior1 = $mes - 1;
        }

        // MES 2
        if($mes_anterior1 == 1){
            $mes_anterior2 = 12; 
            $anioMes2 -= 1; 
            $anioMes3 -= 1; 
            $anioMes4 -= 1;
        }else{
            $mes_anterior2 = $mes_anterior1 - 1;
        }

        // MES 3
        if($mes_anterior2 == 1){
            $mes_anterior3 = 12; 
            $anioMes3 -= 1; 
            $anioMes4 -= 1;
        }else{
            $mes_anterior3 = $mes_anterior2 - 1;
        }

        // MES 4
        if($mes_anterior3 == 1){
            $mes_anterior4 = 12;
            $anioMes4 -= 1;
        }else{
            $mes_anterior4 = $mes_anterior3 - 1;
        }
    /**************************/

//////  CONSULTA TARJETAS GRAFICOS #1 - SEMANAS MES

// Preparar la consulta
    $query2 = "SELECT
            c.calificacion,
            COUNT(c.id) AS total_calificaciones,
            CONCAT(DATE_FORMAT(MIN(c.fecha_sys), '%d %b'), ' - ', DATE_FORMAT(MAX(c.fecha_sys), '%d %b')) AS semana,
            WEEK(c.fecha_sys) AS semana_numero
        FROM
            calificaciones AS c
        WHERE
            c.id_entidad = ? AND
            MONTH(c.fecha_sys) = ? AND
            YEAR(c.fecha_sys) = ?
        GROUP BY
            c.calificacion, WEEK(c.fecha_sys)
        ORDER BY
            c.calificacion, WEEK(c.fecha_sys)";

    // Preparar la sentencia
    $stmt = $dbh->prepare($query2);

    // Vincular los parámetros
    $stmt->bind_param("iii", $entidad, $mes, $anio);

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener los resultados
    $result = $stmt->get_result();

    // Inicializar los arreglos para cada calificación
    $totalMuyInsatisGraf_1 = [];
    $semanasMuyInsatisGraf_1 = [];

    $totalInsatisGraf_1 = [];
    $semanasInsatisGraf_1 = [];

    $totalNeutralGraf_1 = [];
    $semanasNeutralGraf_1 = [];

    $totalSatisGraf_1 = [];
    $semanasSatisGraf_1 = [];

    $totalMuySatisGraf_1 = [];
    $semanasMuySatisGraf_1 = [];

    // Procesar los resultados
    while ($row = $result->fetch_assoc()) {
        switch ($row['calificacion']) {
            case 1:
                $totalMuyInsatisGraf_1[] = $row['total_calificaciones'];
                $semanasMuyInsatisGraf_1[] = $row['semana'];
                break;
            case 2:
                $totalInsatisGraf_1[] = $row['total_calificaciones'];
                $semanasInsatisGraf_1[] = $row['semana'];
                break;
            case 3:
                $totalNeutralGraf_1[] = $row['total_calificaciones'];
                $semanasNeutralGraf_1[] = $row['semana'];
                break;
            case 4:
                $totalSatisGraf_1[] = $row['total_calificaciones'];
                $semanasSatisGraf_1[] = $row['semana'];
                break;
            case 5:
                $totalMuySatisGraf_1[] = $row['total_calificaciones'];
                $semanasMuySatisGraf_1[] = $row['semana'];
                break;
        }
    }

    // Cerrar la declaración
    $stmt->close();

////////////////////////////////////////////////////////



//////  CONSULTA TARJETAS GRAFICOS #2 - MES y 4 ANTERIORES

    $fechaAct = date('Y-m-d', strtotime("$anio-$mes-31"));
    $fechaAnt = date('Y-m-d', strtotime("$anioMes4-$mes_anterior4-01"));

    $query3 = "SELECT 
        DATE_FORMAT(c.fecha_sys, '%b %Y') AS mes_anio,
        SUM(CASE WHEN c.calificacion = 1 THEN 1 ELSE 0 END) AS calif_1,
        SUM(CASE WHEN c.calificacion = 2 THEN 1 ELSE 0 END) AS calif_2,
        SUM(CASE WHEN c.calificacion = 3 THEN 1 ELSE 0 END) AS calif_3,
        SUM(CASE WHEN c.calificacion = 4 THEN 1 ELSE 0 END) AS calif_4,
        SUM(CASE WHEN c.calificacion = 5 THEN 1 ELSE 0 END) AS calif_5
    FROM calificaciones AS c
    WHERE c.id_entidad = ?
        AND (c.fecha_sys BETWEEN ? AND ?)
    GROUP BY YEAR(c.fecha_sys), MONTH(c.fecha_sys)
    ORDER BY c.fecha_sys ASC;";

        // Inicializar arreglos
        $mesAnio = [];
        $totalMuyInsatisGraf_2 = [];
        $totalInsatisGraf_2 = [];
        $totalNeutralGraf_2 = [];
        $totalSatisGraf_2 = [];
        $totalMuySatisGraf_2 = [];

    if ($stmt = $dbh->prepare($query3)) {
        // Asignar parámetros y ejecutar
        $stmt->bind_param("iss", $entidad, $fechaAnt, $fechaAct);
        $stmt->execute();

        // Vincular resultados de la consulta
        $result = $stmt->get_result();

        // Recorrer resultados y guardar en arreglos
        while ($row = $result->fetch_assoc()) {
            $mesAnio[] = $row['mes_anio'];
            $totalMuyInsatisGraf_2[] = $row['calif_1'];
            $totalInsatisGraf_2[] = $row['calif_2'];
            $totalNeutralGraf_2[] = $row['calif_3'];
            $totalSatisGraf_2[] = $row['calif_4'];
            $totalMuySatisGraf_2[] = $row['calif_5'];
        }

        // Cerrar declaración
        $stmt->close();
    } 

////////////////////////////////////////////////////////


//////  CONSULTA TARJETAS GRAFICOS #3 - POR OFICINAS
    // Consulta preparada
    $query4 = "SELECT
                o.id AS id_oficina,
                COALESCE(SUM(CASE WHEN c.calificacion = 1 THEN 1 ELSE 0 END), 0) AS calif_1,
                COALESCE(SUM(CASE WHEN c.calificacion = 2 THEN 1 ELSE 0 END), 0) AS calif_2,
                COALESCE(SUM(CASE WHEN c.calificacion = 3 THEN 1 ELSE 0 END), 0) AS calif_3,
                COALESCE(SUM(CASE WHEN c.calificacion = 4 THEN 1 ELSE 0 END), 0) AS calif_4,
                COALESCE(SUM(CASE WHEN c.calificacion = 5 THEN 1 ELSE 0 END), 0) AS calif_5,
                SUBSTRING_INDEX(o.Nom_oficina, ' ', 1) AS primera_palabra_nombre
            FROM oficinas AS o
                LEFT JOIN calificaciones AS c 
                    ON c.id_oficina = o.id 
                    AND c.id_entidad = ? 
                    AND MONTH(c.fecha_sys) = ? 
                    AND YEAR(c.fecha_sys) = ?
            GROUP BY o.id, o.Nom_oficina
            ORDER BY o.id";

        // Inicializar arreglos
        $nomOffice = [];
        $totalMuyInsatisGraf_3 = [];
        $totalInsatisGraf_3 = [];
        $totalNeutralGraf_3 = [];
        $totalSatisGraf_3 = [];
        $totalMuySatisGraf_3 = [];

    // Preparar la consulta
    if ($stmt = $dbh->prepare($query4)) {
        // Asignar parámetros y ejecutar
        $stmt->bind_param("iii", $entidad, $mes, $anio);
        $stmt->execute();

        // Vincular resultados de la consulta
        $result = $stmt->get_result();

        // Recorrer resultados y guardar en arreglos
        while ($row = $result->fetch_assoc()) {
            $nomOffice[] = $row['primera_palabra_nombre'];
            $totalMuyInsatisGraf_3[] = $row['calif_1'];
            $totalInsatisGraf_3[] = $row['calif_2'];
            $totalNeutralGraf_3[] = $row['calif_3'];
            $totalSatisGraf_3[] = $row['calif_4'];
            $totalMuySatisGraf_3[] = $row['calif_5'];
        }
        // Cerrar declaración
        $stmt->close();
    }
////////////////////////////////////////////////////////


//////  GRAFICO TASAS DE INSATISFACCION E INSATISFFACION TOTAL EN LOS ULTIMOS 5 MESES

    /*  CALCULAR CANTIDAD DE CALIFICACIONES POR MES */
        $totalMesesAnteriores = [];

        for($i = 0; $i<5; $i++){
            $totalMesesAnteriores[$i] = $totalMuyInsatisGraf_2[$i] + $totalInsatisGraf_2[$i] + $totalNeutralGraf_2[$i] + $totalSatisGraf_2[$i] + $totalMuySatisGraf_2[$i];
        }        
    /********************/

    /**  PORCENTAJES, TOTAL Y TASA DE INSATISFACCION  **/
        // total
            $TotalCalMes = $totalMuyInsatisGraf_2[4] + $totalInsatisGraf_2[4] + $totalNeutralGraf_2[4] + $totalSatisGraf_2[4] + $totalMuySatisGraf_2[4];
        //

        // porcentajes
            $PorcenMuyInsatis = ($totalMuyInsatisGraf_2[4]/$TotalCalMes) * 100;
            $PorcenInsatis = ($totalInsatisGraf_2[4]/$TotalCalMes) * 100;
            $PorcenNeutral = ($totalNeutralGraf_2[4]/$TotalCalMes) * 100;
            $PorcenSatis = ($totalSatisGraf_2[4]/$TotalCalMes) * 100;
            $PorcenMuySatis = ($totalMuySatisGraf_2[4]/$TotalCalMes) * 100;
        //

        // tasa de insatisffacion
            $TotalInsatisfaccionActual = $totalMuyInsatisGraf_2[4] + $totalInsatisGraf_2[4];
            if ($TotalInsatisfaccionActual == 0){
                $TasaInsatisfaccionActual = 0;
            }else{
                $TasaInsatisfaccionActual = ($TotalInsatisfaccionActual/$TotalCalMes) * 100;
            }
           

            $TotalInsatisfaccionMesAnt_1 = $totalMuyInsatisGraf_2[3] + $totalInsatisGraf_2[3];
            if ($TotalInsatisfaccionMesAnt_1 == 0){
                $TasaInsatisfaccionMesAnt_1 = 0;
            }else{
                $TasaInsatisfaccionMesAnt_1 = ($TotalInsatisfaccionMesAnt_1/$totalMesesAnteriores[3]) * 100;
            }

            $TotalInsatisfaccionMesAnt_2 = $totalMuyInsatisGraf_2[2] + $totalInsatisGraf_2[2];
            if ($TotalInsatisfaccionMesAnt_2 == 0){
                $TasaInsatisfaccionMesAnt_2 = 0;
            }else{
                $TasaInsatisfaccionMesAnt_2 = ($TotalInsatisfaccionMesAnt_2/$totalMesesAnteriores[2]) * 100;
            }
            
            $TotalInsatisfaccionMesAnt_3 = $totalMuyInsatisGraf_2[1] + $totalInsatisGraf_2[1];
            if ($TotalInsatisfaccionMesAnt_3 == 0){
                $TasaInsatisfaccionMesAnt_3 = 0;
            }else{
                $TasaInsatisfaccionMesAnt_3 = ($TotalInsatisfaccionMesAnt_3/$totalMesesAnteriores[1]) * 100;
            }

            $TotalInsatisfaccionMesAnt_4 = $totalMuyInsatisGraf_2[0] + $totalInsatisGraf_2[0];
            if ($TotalInsatisfaccionMesAnt_4 == 0){
                $TasaInsatisfaccionMesAnt_4 = 0;
            }else{
                $TasaInsatisfaccionMesAnt_4 = ($TotalInsatisfaccionMesAnt_4/$totalMesesAnteriores[0]) * 100;
            }
       //

        // Sube o Baja respecto al mes anterior
            $TasaSubeBaja = (($TasaInsatisfaccionActual - $TasaInsatisfaccionMesAnt_1)/$TasaInsatisfaccionMesAnt_1)*100;
            $SubeBajavalor = round($TasaSubeBaja, 1);
            if($TasaSubeBaja < 0){
                $ConstructorTasa = '
                <div class="percentage">
                    <h3 style="color: var(--Color3);">¡LA TASA BAJÓ!</h3>
                    <img src="https://klificamefisico.comunisoft.com/sources/img/insatis_baja.png" alt="insatisfacción Bajo" class="InsatisEvoluImg baja">
                    <p class="percentageP" style="color: var(--Color5);">'.abs($SubeBajavalor).'%</p>
                </div>
                ';
            }else{
                $ConstructorTasa = '
                <div class="percentage">
                    <h3 style="color: var(--Color1);">¡LA TASA SUBIO!</h3>
                    <img src="https://klificamefisico.comunisoft.com/sources/img/insatis_sube.png" alt="insatisfacción Bajo" class="InsatisEvoluImg sube">
                    <p class="percentageP" style="color: var(--Color2);">'.abs($SubeBajavalor).'%</p>
                </div>
                ';
            }
        //
    /*  **************  */

    /*  CONSULTA CANTIDAD MESES */
// Preparar la consulta SQL
    $grafCantidadDias = "SELECT 
                    DATE_FORMAT(c.fecha_sys, '%b %e') AS dia_mes,
                        COUNT(c.id) AS total_calificaciones
                    FROM calificaciones AS c
                    WHERE c.id_entidad = ? AND MONTH(c.fecha_sys) = ? AND YEAR(c.fecha_sys) = ?
                    GROUP BY dia_mes
                    ORDER BY c.fecha_sys";

    // Preparar la consulta
    $stmt = $dbh->prepare($grafCantidadDias);

    // Ejecutar la consulta
    $stmt->bind_param("iii", $entidad, $mes, $anio);
    $stmt->execute();

    // Obtener los resultados
    $infoGrafCantDias = $stmt->get_result();

    // Inicializar arrays para almacenar los resultados
    $totalDias = array();
    $nomDias = array();

    // Recorrer los resultados
    while ($fila = $infoGrafCantDias->fetch_assoc()) {
        $totalDias[] = $fila['total_calificaciones'];
        $nomDias[] = $fila['dia_mes'];
    }

    // Cerrar la consulta
    $stmt->close();
    /********************/

    /** PROMEDIO ETC **/
        $PromCompleto = 0;
        $ContDias = 0;
        $Dias = 0;

        if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) {
            foreach ($totalDias as $valor) {
                $ContCal += $valor;
                $ContDias += 1;
            }
            $Dias = 31;
            $PromCompleto = $ContCal / 31;
            $PromDiaCal = $ContCal/$ContDias;
        } else if ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {
            foreach ($totalDias as $valor) {
                $ContCal += $valor;
                $ContDias += 1;
            }
            $Dias = 30;
            $PromCompleto = $ContCal / 30;
            $PromDiaCal = $ContCal/$ContDias;
        } else if ($mes == 2) {
            foreach ($totalDias as $valor) {
                $ContCal += $valor;
                $ContDias += 1;
            }
            if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) {
                $PromCompleto = $ContCal / 29; // Año bisiesto
                $Dias = 29;
            } else {
                $PromCompleto = $ContCal / 28; // Año no bisiesto
                $Dias = 28;
            }
            $PromDiaCal = $ContCal/$ContDias;
        }

        $maximo = max($totalDias);
        $posicion = array_search($maximo, $totalDias);

    /********************/

////////////////////////////////////////////////////////
// Cerrar la conexión
$dbh->close();
?>