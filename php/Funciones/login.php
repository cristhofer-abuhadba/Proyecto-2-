<?php
if (!isset($contexto)) {
    $contexto = 'default';
}
if($contexto === 'home'){
    require_once "env.php";
}
else if($contexto === 'novedades' || $contexto === 'descarga' || $contexto === 'registro' || $contexto === 'default'){
    require_once '../env.php';
}
else if($contexto === 'wiki'){
    require_once '../../env.php';
}
session_reset();
session_start();
    switch($_POST['comprobar']){
        case 'ingresar':
            $mail = $_POST['mail'];
            $user = $_POST['usuario'];
            $pass = $_POST['password'];

            $comprobar_user = "SELECT * FROM `usuarios` WHERE `Nombre_usuario` = '$user'";
            $comprobar_mail = "SELECT * FROM `usuarios` WHERE `Correo_electronico` = '$mail'";
            $extraer_pass = "SELECT Contraseña FROM `usuarios` WHERE `Nombre_usuario` = '$user'";
            
            $result_01 = mysqli_query($con, $comprobar_user);
            $result_02 = mysqli_query($con, $comprobar_mail);
            $result_03 = mysqli_query($con, $extraer_pass);
            $result_03_01 = mysqli_fetch_assoc($result_03);
            $result_03_02 = $result_03_01['Contraseña'];

            $ingresar = ["error" => "0"];
            if(mysqli_num_rows($result_01) != "1"){
                $ingresar['error'] = "1";
            }
            else if(mysqli_num_rows($result_02) != "1"){
                $ingresar['error'] = "2";
            }
            else if(!password_verify($pass, $result_03_02)){
                $ingresar['error'] = "3";
            }
            else if($ingresar['error'] == "0"){
                $extraer_cuenta = "SELECT * FROM `usuarios`";
                $result_04 = mysqli_query($con, $extraer_cuenta);
                if(mysqli_connect_error()){
                    $ingresar['error'] = "4";
                    echo ("Error en la conexión a MySQL: " . mysqli_connect_error());
                    exit();
                }
                else{
                    $result_04_01 = mysqli_fetch_assoc($result_04);
                    $name = $result_04_01['Nombre'];
                    $lastname = $result_04_01['Apellido'];
                    $user = $result_04_01['Nombre_usuario'];
                    $mail = $result_04_01['Correo_electronico'];

                    $_SESSION['loggedin'] = true;
                    $_SESSION['name'] = $name;
                    $_SESSION['lastname'] = $lastname;
                    $_SESSION['user'] = $user;
                    $_SESSION['mail'] = $mail;
                }
            }
            break;
    }
echo json_encode($ingresar);
?>