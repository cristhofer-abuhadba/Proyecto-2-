<?php
define("HOST", "");
define("BD", "");
define("USER", "");
define("PASSWORD", "");

$con = mysqli_connect(HOST, USER, PASSWORD, BD);
/*
para el host, se va a requerir el nombre del servidor del SQLserver
para la base de datos, se va a requerir el nombre de la base de datos del servidor del SQLserver
para el usuario, se va a requerir el User_name del servidor del SQLserver
para la contraseña, se va a requerir la contraseña del servidor del SQLserver
*/