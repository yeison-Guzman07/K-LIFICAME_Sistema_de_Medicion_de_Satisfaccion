<?php

    $survey_id = $_GET['survey'];
    echo "<center>";


    $idDB = 'i4Cq$04IXLY5IKsWt8 XlP GXCMr2H8txIiFdo0Ji-P5qprwEKLF57-wVmZROY_Q';
    
    function generateLongUUID($length = 128) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_#$+';
        $charactersLength = strlen($characters);
        $randomString = '';
        
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        
        return $randomString;
    }
    
    $uuidLONG = generateLongUUID();
    
    echo "<br><br><br><br><br><br><br><h1>". $uuidLONG."</h1";
?>