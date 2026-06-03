<?php
    session_start();
    include_once "../includes/sessionVarify.php";
    if ($_SESSION['rol'] != 4){
        echo '<script> window.location.href = "https://klificamefisico.comunisoft.com/pages/index.php"; </script>';
    }
    include_once "../sources/php/adminSurvey.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../includes/link.html"; ?>
    <link rel="stylesheet" href="https://klificamefisico.comunisoft.com/sources/css/adminSurvey.css">
    <script src="https://klificamefisico.comunisoft.com/lib/sweetalert2@11.js"></script>

    <title>Admin. Encuestas</title>
</head>
<header>
    <?php include_once "../includes/nav.html"; 
        include_once "../includes/accessMenu.html";
        include_once "../includes/menu.php";
    ?>
</header>
<body>

    <main>
        <?php echo $constructor; ?>
    </main>
    <!-- FIN DEL HTML -->

    <script src="https://klificamefisico.comunisoft.com/sources/js/adminSurvey.js"></script>
    <!-- COMIENZA EL FOOTER -->
    <?php include_once "../includes/footer.html"; ?>
</body>
<?php
// Cerrar la conexion
    $dbh->close();
?>
</html>