<?php
if (!isset($contexto)) {
    $contexto = 'default';
}
if($contexto === 'home'){
    require_once "env.php";
}
else if($contexto === 'novedades' || $contexto === 'descarga' || $contexto === 'Login' || $contexto === 'default'){
    require_once '../env.php';
}
else if($contexto === 'wiki'){
    require_once '../../env.php';
}
session_reset();
session_start();
if(isset($_POST['comprobar']) && $_POST['comprobar'] != null){
    switch($_POST['comprobar']){
        case 'ingresar':
            $mail = $_POST['mail'];
            $user = $_POST['usuario'];
            $pass = $_POST['password'];

            $comprobar_user = "SELECT * FROM `usuarios` WHERE `Nombre_usuario` = '$user'";
            $comprobar_mail = "SELECT * FROM `usuarios` WHERE `Correo_electronico` = '$mail'";
            $extraer_pass = "SELECT Contraseña FROM `usuarios` WHERE `Nombre_usuario` = '$user'";
            $extraer_mail = "SELECT Correo_electronico FROM `usuarios` WHERE `Nombre_usuario` = '$user'";
            
            $result_01 = mysqli_query($con, $comprobar_user);
            $result_02 = mysqli_query($con, $comprobar_mail);
            $result_03 = mysqli_query($con, $extraer_pass);
            $result_04 = mysqli_query($con, $extraer_mail);

            $result_03_01 = mysqli_fetch_assoc($result_03);
            $result_03_02 = $result_03_01['Contraseña'];

            $result_04_01 = mysqli_fetch_assoc($result_04);
            $result_04_02 = $result_04_01['Correo_electronico'];

            $ingresar = ["error" => "0"];
            if(mysqli_num_rows($result_01) != "1"){
                $ingresar['error'] = "1";
            }
            else if(mysqli_num_rows($result_02) != "1"){
                $ingresar['error'] = "2";
            }
            else if($mail != $result_04_02){
                $ingresar['error'] = "3";
            }
            else if(!password_verify($pass, $result_03_02)){
                $ingresar['error'] = "4";
            }
            else if($ingresar['error'] == "0"){
                $extraer_cuenta = "SELECT * FROM `usuarios` WHERE `Nombre_usuario` = '$user'";
                $result_05 = mysqli_query($con, $extraer_cuenta);
                if(mysqli_connect_error()){
                    $ingresar['error'] = "5";
                    echo ("Error en la conexión a MySQL: " . mysqli_connect_error());
                    exit();
                }
                else{
                    $result_05_01 = mysqli_fetch_assoc($result_05);
                    $name = $result_05_01['Nombre'];
                    $lastname = $result_05_01['Apellido'];
                    $user = $result_05_01['Nombre_usuario'];
                    $mail = $result_05_01['Correo_electronico'];

                    $_SESSION['loggedin'] = true;
                    $_SESSION['name'] = $name;
                    $_SESSION['lastname'] = $lastname;
                    $_SESSION['user'] = $user;
                    $_SESSION['mail'] = $mail;
                }
            }
            ob_end_clean();
            echo json_encode($ingresar);
            break;
        }
    }
    else{
        $ingresar['error'] = "6";
        ob_end_clean();
        echo json_encode($ingresar);
    }
?>