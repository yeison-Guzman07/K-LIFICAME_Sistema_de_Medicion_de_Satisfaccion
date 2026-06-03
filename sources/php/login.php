<?php
include "config/Conexion.php";

if (!empty($_POST['BtnIngresar'])) {
    if (!empty($_POST['mail']) && !empty($_POST['pass'])) {
        $mail = mysqli_real_escape_string($dbh, $_POST['mail']); // Sanitiza el correo
        $pass = mysqli_real_escape_string($dbh, $_POST['pass']); // Sanitiza la contraseña

        $fila = consultUser($dbh, $mail);

        if (!$fila) {
            echo '<script>
                    Swal.fire({
                        icon: "warning",
                        title: "El Correo Ingresado No Existe",
                        text: "Verifica Bien Los Datos.",
                        confirmButtonColor: "#00C201"
                    });
                </script>';
        } else {
            verifyInfo($fila, $pass);
        }
    } else {
        echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Debe Llenar Todos Los Datos.",
                    confirmButtonColor: "#00C201"
                });
            </script>';
    }
}

function consultUser($dbh, $mail)
{
    $sql = 'SELECT u.id, u.usuario, u.correo, u.contrasena, u.id_rol, bu.id_entidad 
            FROM usuarios u
            LEFT JOIN usuarios_negocios bu ON u.id = bu.id_usuario
            WHERE u.correo = ?';

    $stmt = $dbh->prepare($sql);

    if (!$stmt) {
        die("Error al preparar la consulta: " . $dbh->error);
    }

    $stmt->bind_param("s", $mail);
    // Ejecutar consuta
    if ($stmt->execute()) {
        $result = $stmt->get_result();

        //Verificar si se encontró un usuario
        if ($result->num_rows === 1) {
            $fila = $result->fetch_assoc();
            return $fila;
        } else {
            return false;
        }
    } else {
        echo "Error al ejecutar la consulta: " . $stmt->error;
    }
    // Cerrar declaración
    $stmt->close();
    $dbh->close();
}

function verifyInfo($fila, $pass)
{
    $hashpass = $fila['contrasena']; //contraseña hasheada en la bd

    if (password_verify($pass, $hashpass)) {
        // Inicializar datos a tener en cuenta dentro de la plataforma
        $_SESSION['id_user'] = $fila['id'];
        $_SESSION['user'] = $fila['usuario'];
        $_SESSION['entity'] = $fila['id_entidad'];
        $_SESSION['rol'] = $fila['id_rol'];

        //header("Location: pages/");
        echo '<script>window.location.href = "pages/";</script>';
    } else {
        echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Contraseña Incorrecta",
                    text: "Verifica Bien Los Datos.",
                    confirmButtonColor: "#00C201"
                });
            </script>';
    }
}
