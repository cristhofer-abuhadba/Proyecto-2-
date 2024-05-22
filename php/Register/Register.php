<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../../js/register.js"></script>
</head>

<body>
    <?php
        $contexto = 'registro';
        require_once("../Funciones/register.php");
    ?>
    <div id="content_01">
        <div id="content_02">
            <h2>Registro de usuario</h2>
            <form action="">
                <div id="content_03">
                    <div id="content_05">
                        <div class="content_05a">
                            <label for="name">
                                <h4>Nombre:</h4>
                            </label>
                            <input placeholder="Name" type="text" id="name" class="input_01" name="user" required>
                        </div>
                        <div class="content_05b">
                            <label for="name">
                                <h4>Apellido:</h4>
                            </label>
                            <input placeholder="Lastname" type="text" id="lastname" class="input_01" name="user" required>
                        </div>
                    </div>
                    <div id="content_04">
                        <div class="content_04">
                            <label for="name">
                                <h4>Nombre de usuario:</h4>
                            </label>
                            <input placeholder="User" type="text" id="user" class="input_02" name="user" required>
                        </div>
                    </div>
                    <div id="content_04">
                        <div class="content_04">
                            <label for="email">
                                <h4>Correo electrónico:</h4>
                            </label>
                            <input placeholder="Ejemplo123@mail.com" type="email" id="mail" class="input_02" name="mail" required>
                        </div>
                    </div>
                    <div id="content_04">
                        <div class="content_04">
                            <label for="password">
                                <h4>Contraseña:</h4>
                            </label>
                            <input placeholder="Contraseña" type="password" id="pass" class="input_02" name="password" required>
                        </div>
                    </div>
                    <div id="content_button">
                        <ul class="ul_00">
                            <li class="li_00">
                                <a class="" id="" href="../home.php">Volver al inicio</a>
                            </li>
                        </ul>
                        <div id="none"></div>
                        <input type="button" id="button_00" onclick="
                            registro(
                                document.getElementById('name').value,
                                document.getElementById('lastname').value,
                                document.getElementById('user').value,
                                document.getElementById('mail').value,
                                document.getElementById('pass').value
                            )" value="Crear">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>