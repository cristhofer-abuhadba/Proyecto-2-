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
if(isset($_POST['comprobar']) && $_POST['comprobar'] != null){
    switch($_POST['comprobar']){
        case 'subir':
            $name = $_POST['nombre'];
            $lastname = $_POST['apellido'];
            $user = $_POST['usuario'];
            $mail = $_POST['mail'];
            $pass = $_POST['password'];

            $hash = password_hash($pass, PASSWORD_BCRYPT);

            $comprobar_user = "SELECT * FROM `usuarios` WHERE `Nombre_usuario` = '$user'";
            $comprobar_mail = "SELECT * FROM `usuarios` WHERE `Correo_electronico` = '$mail'";

            $result_01 = mysqli_query($con, $comprobar_user);
            $result_02 = mysqli_query($con, $comprobar_mail);

            $registro = ["error" => "0"];
            if(mysqli_num_rows($result_01) != 0){
                $registro["error"] = "1";
            }
            else if(mysqli_num_rows($result_02) != 0){
                $registro["error"] = "2";
            }
            else if($registro["error"] == "0"){
                $crear_cuenta = "INSERT INTO `usuarios` VALUES (NULL, '$name', '$lastname', '$user', '$mail', '$hash');";
                $result_03 = mysqli_query($con, $crear_cuenta);
                if(mysqli_connect_error()){
                    $registro["error"] = "3";
                    echo ("Error en la conexión a MySQL: " . mysqli_connect_error());
                    exit();
                }
                else{
                    $_SESSION['loggedin'] = true;
                    $_SESSION['name'] = $name;
                    $_SESSION['lastname'] = $lastname;
                    $_SESSION['user'] = $user;
                    $_SESSION['mail'] = $mail;
                }
            }
            ob_end_clean();
            echo json_encode($registro);
            break; 

        case 'cerrar':
            if($_SESSION == true){
                session_destroy();
            }
            break;
        }
    }
else{
    
    $session_data = $_SESSION;
    $session_json = json_encode($session_data);
    echo "<script>var sessionData = $session_json;</script>";
}
?>