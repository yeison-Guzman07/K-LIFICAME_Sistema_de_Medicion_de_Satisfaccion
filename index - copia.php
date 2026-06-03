<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-LIFICAME</title>
    <?php include "includes/link.html"; ?>
    <link rel="stylesheet" href="https://klificamefisico.comunisoft.com/sources/css/login.css">
    <script src="lib/cdn.jsdelivr.net_npm_sweetalert2@9.js"></script>
</head>
<header>
    <?php include "includes/navSimple.html"; ?>
    <?php include "includes/accessMenu.html"; ?>
        <!--MENU NORMAL-->
    <div class="true-menu" id="menu">
        <div class="menu-img">
            <img src="https://klificamefisico.comunisoft.com/sources/img/Klificame Isotipo Blanco.png" alt="ISOTIPO K-LIFICAME" class="img_navigation">
            <h1>Menú Principal</h1><br>
        </div>
        <div class="menu-options">
            <a href="index.php"><i class="fa-solid fa-house"></i> Login </a>
            <a href="pages/Info.php"><i class="fa-solid fa-house"></i> Sobre Nosotros </a>
        </div>
    </div>
    <div class="background" id="bg_menu">
    </div>
    <!--FIN MENU-->
</header>
<body>
    <?php
        include "sources/php/login.php"; //INCLUDE DEL CONTROLADOR DE LOGIN
        include "sources/php/signup.php";
    ?>
    <!-- CUERPO DEL HTML -->
    <main>
        <div class="formContainer">
            <div class="img" id="formChange">
                <img src="sources/img/imagotipo_Light.png" alt="Imagotipo Klificame">
                <button class="formChangeButton"><i class="fa-solid fa-rotate"></i></button>
            </div>
            <!-- FORM 1 -->
            <div class="form2" id="formSign">
                <div class="form">
                    <h1>REGISTRARSE</h1>
                    <form action="" method="post"> <!--Action Del FORM-->
                        <div class="inputs">
                            <div class="inputDiv">
                                <input type="text" placeholder="Correo" name="mailRegis" require>
                            </div>    

                            <div class="inputDiv">
                                <input type="text" placeholder="Usuario" name="userRegis" require>
                            </div>  
                            
                            <div class="inputDiv">
                                <input type="password" placeholder="Contraseña" name="passRegis" id="password1" require>
                                <i class="fa-solid fa-eye" id="togglePassword1"></i>
                            </div>
                            <div class="inputDiv">
                            <input type="password" placeholder="Confirmar Contraseña" name="ConfirmPassRegis" id="password2" require>
                                <i class="fa-solid fa-eye" id="togglePassword2"></i>
                            </div>
                        </div>
                        <button type="submit" name="BtnRegistrar" value="BtnRegistrar">Ingresar</button>
                    </form>
                    <p>¿Quieres Una Cuenta De Negocios? Haz clic <a href="pages/Info.html">aqui</a> para ver toda la información sobre K-LIFICAME.</p>
                </div>
            </div>
            <!-- FORM 2 -->
            <div class="form1" id="formLogin">
                <div class="form">
                    <h1>BIENVENIDO</h1>
                    <form action="" method="post"> <!--Action Del FORM-->        
                        <div class="inputs">
                            <div class="inputDiv">
                                <input type="mail" placeholder="Correo" name="mail" require>
                            </div>    
                            <div class="inputDiv">
                                <input type="password" placeholder="Contraseña" name="pass" id="password3" require>
                                <i class="fa-solid fa-eye" id="togglePassword3"></i>
                            </div>
                        </div>
                        <button type="submit" name="BtnIngresar" value="BtnIngresar">Ingresar</button>
                    </form>
                    <p>¿Haz olvidado tu contraseña? Haz clic <a href="#">aqui</a> para restaurarla</p>
                </div>
            </div>
        </div>
    </main>
    <!-- FIN DEL HTML -->
    <?php include "includes/footer.html"; ?>
</body>
</html>