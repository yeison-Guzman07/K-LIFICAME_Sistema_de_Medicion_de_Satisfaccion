<?php
include "config/Conexion.php";

if (!empty($_POST['BtnRegistrar'])){
    if (!empty($_POST['mailRegis']) && !empty($_POST['passRegis']) && !empty($_POST['userRegis']) && !empty($_POST['ConfirmPassRegis'])){
        $mail = mysqli_real_escape_string($dbh, $_POST['mailRegis']);
        $pass = mysqli_real_escape_string($dbh, $_POST['passRegis']);
        $user = mysqli_real_escape_string($dbh, $_POST['userRegis']);
        $pass2 = mysqli_real_escape_string($dbh, $_POST['ConfirmPassRegis']);
        $rol = 4;

        // Validar formato de correo electrónico
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "El formato del correo electrónico no es válido.",
                    confirmButtonColor: "#00C201"
                });
            </script>';
        } else {
            $verify = verifyMail($dbh, $mail);

            if($verify){
                echo '<script>
                    Swal.fire({
                        icon: "warning",
                        title: "Usuario Ya Registrado",
                        text: "El Correo Ingresado Ya Se Encuentra Registrado.",
                        confirmButtonColor: "#00C201"
                    });
                </script>';
            }else{
                if($pass != $pass2){
                    echo '<script>
                        Swal.fire({
                            icon: "warning",
                            title: "Error Al Confirmar Contraseña",
                            text: "Segurece de confirmar correctamente la contraseña.",
                            confirmButtonColor: "#00C201"
                        });
                    </script>';
                }else{
                    insertUser($dbh, $mail, $pass, $user, $rol);
                }
            }
        }
    }else{
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

function verifyMail($dbh, $mail){
    $sql = "SELECT * FROM usuarios WHERE correo = ?";
    $stmt = $dbh->prepare($sql);

    if(!$stmt){
        die("Error al preparar la consulta: ". $dbh->error);
    }

    $stmt->bind_param("s", $mail);
    // Ejecutar consulta
    if($stmt->execute()){
        $result = $stmt->get_result();

        //Verificar si se encontró un usuario
        if($result->num_rows === 1){
            return true;
        }else{
            return false;
        }
    } else{
        echo "Error al ejecutar la consulta: " . $stmt->error;
    }
    // Cerrar declaración
    $stmt->close();
}

function insertUser($dbh, $mail, $pass, $user, $rol){
    $hashpass = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 12]); //le aplica un hash a la contraseña

    $sql = "INSERT INTO usuarios(id_rol, usuario, correo, contrasena) VALUES (?,?,?,?)";

    $stmt = $dbh->prepare($sql);

    if (!$stmt) {
        die("Error al preparar la consulta: " . $dbh->error);
    }
    // Vincular parámetros
    $stmt->bind_param("isss", $rol, $user, $mail, $hashpass);

    // Ejecutar la consulta preparada
    if ($stmt->execute()) {
        echo '<script>
            Swal.fire({
                icon: "success",
                title: "¡Todo Listo!",
                text: "El Usuario Se Registró Correctamente.",
                confirmButtonColor: "#00C201"
            });
        </script>';
    } else {
        echo "Error al crear el registro: " . $stmt->error;
    }
    // Cerrar declaración
    $stmt->close();
    $dbh->close();
}
?>