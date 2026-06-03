<?php

    include "../config/Conexion.php";
    setlocale(LC_TIME, 'es_ES.utf8');

    $sql = "SET lc_time_names = 'es_ES';";
    $dbh->query($sql);

?>