<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <style>
        *{
            font-family: sans-serif;
        }
    </style>    
    </head>
    <body>
<?php
    include "../../config/Conexion.php";
    echo '<script src="../../lib/cdn.jsdelivr.net_npm_sweetalert2@9.js"></script>';

    $dbh->set_charset("utf8mb4");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        //GENERA LA ID
        function generateLongUUID($length = 128) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            
            return $randomString;
        }
        
        $idSurvey = generateLongUUID();

        // Obtener los datos del formulario
        $userId = $_SESSION['id_user'];
        $title = mysqli_real_escape_string($dbh, $_POST['title']); // Sanitiza el titulo
        $description = mysqli_real_escape_string($dbh, $_POST['description']); // Sanitiza la descripcion
        $questions = $_POST['questions']; // Sanitiza las preguntas

        $rol = $_SESSION['rol'];

        if ($rol != 3){
            $esNegocio = 0;
        }else{
            $esNegocio = 1;
        }
    
        // Insertar los datos en la tabla encuestas
        $stmt = $dbh->prepare("INSERT INTO encuestas (id_usuario, id, titulo, descripcion, es_negocio, fecha_creacion) VALUES (?, ?, ?, ?, ?, NOW())");
        $stmt->bind_param("issss", $userId, $idSurvey, $title, $description, $esNegocio);
        $stmt->execute();
        $stmt->close();

        // Insertar las preguntas en la tabla preguntas
        $stmt = $dbh->prepare("INSERT INTO preguntas (id_encuesta, texto_pregunta) VALUES (?, ?)");
        foreach ($questions as $question) {
            $stmt->bind_param("ss", $idSurvey, $question['text']);
            $stmt->execute();
        }
        $stmt->close();
    
        echo '<script>
            // Mostrar SweetAlert
            Swal.fire({
            title: "Guardado Existoso",
            text: "La encuesta ha sido registrada correctamente",
            icon: "success",
            confirmButtonColor: "#00C201",
            confirmButtonText: "Volver al administrador de encuestas",
            }).then((result) => {
            // Si el usuario hace clic en "Sí"
            if (result.isConfirmed) {
                // Redirigir a otra página
                window.location.href = "../../pages/adminSurvey.php"; // Cambia esta URL por la que desees
            }
            });
        </script>';
    }
?>
</body>
</html