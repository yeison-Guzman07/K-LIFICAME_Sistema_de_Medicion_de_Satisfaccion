<?php
    if (isset($_GET['encuesta'])) {
        $idSurvey = $_GET['encuesta'];
    }

    include_once "../sources/php/surveyController.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Encuesta</title>
    <?php include "../includes/link.html"; ?>

    <link rel="stylesheet" href="https://klificamefisico.comunisoft.com/sources/css/survey.css">
    <script src="https://klificamefisico.comunisoft.com/lib/sweetalert2@11.js"></script>
</head>
<header>
    <?php include "../includes/navSimple.html"; ?>
    <?php include "../includes/accessMenu.html"; ?>
    <!--MENU NORMAL-->
    <div class="true-menu" id="menu">
        <div class="menu-img">
            <img src="https://klificamefisico.comunisoft.com/sources/img/Klificame Isotipo Blanco.png" alt="ISOTIPO K-LIFICAME" class="img_navigation">
            <h1>Menú Principal</h1><br>
        </div>
        <div class="menu-options">
                <a href="https://klificamefisico.comunisoft.com"><i class="fa-solid fa-house"></i> Login </a>
                <a href="Info.php"><i class="fa-solid fa-house"></i> Sobre Nosotros </a>
        </div>
    </div>
    <div class="background" id="bg_menu">
    </div>
    <!--FIN MENU-->
</header>
<body>
    <main>
        <form method="post" action="">
            <?php echo $constructor; ?>
            <div class="comentary">
                <textarea name="comentary" placeholder="Escribe un comentario anonimo (opcional)"></textarea>
            </div>
            <label for="enviarRespuesta"><button>K-LIFICAR</button></label>
            <input type="submit" id="enviarRespuesta" name="enviarRespuesta" value="enviarRespuesta">
        </form>
        <?php 
        include "../sources/php/insertSurveyRating.php"; ?>
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const questionSections = document.querySelectorAll('.question');

            questionSections.forEach(section => {
                const options = section.querySelectorAll('.optionContent');
                options.forEach(option => {
                    option.addEventListener('click', function () {
                        options.forEach(opt => opt.classList.remove('active'));
                        this.classList.add('active');
                    });
                });
            });
        });
    </script>
    <?php include "../includes/footer.html"; ?>
</body>
</html>