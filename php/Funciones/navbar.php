<?php

require_once("register.php");

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    if($contexto === 'home'){
        include 'navbars/navbar_logueado.php';
        ?>
        <link rel="stylesheet" href="../css/navbar_logueado.css">
        <script src="../js/navbar_logueado.js"></script>
        <?php
    }
    else if($contexto === 'novedades' || $contexto === 'descarga'){
        include '../navbars/navbar_logueado.php';
        ?>
        <link rel="stylesheet" href="../../css/navbar_logueado.css">
        <script src="../../js/navbar_logueado.js"></script>
        <?php
    }
    else if($contexto === 'wiki'){
        include '../../navbars/navbar_logueado.php';
        ?>
        <link rel="stylesheet" href="../../../css/navbar_logueado.css">
        <script src="../../../js/navbar_logueado.js"></script>
        <?php
    }
}
else{
    if($contexto === 'home'){
        include 'navbars/navbar_default.php';
        ?>
        <link rel="stylesheet" href="../css/navbar_default.css">
        <script src="../js/navbar_default.js"></script>
        <?php
    }
    else if($contexto === 'novedades' || $contexto === 'descarga'){
        include '../navbars/navbar_default.php';
        ?>
        <link rel="stylesheet" href="../../css/navbar_default.css">
        <script src="../../js/navbar_default.js"></script>
        <?php
    }
    else if($contexto === 'wiki'){
        include '../../navbars/navbar_default.php';
        ?>
        <link rel="stylesheet" href="../../../css/navbar_default.css">
        <script src="../../../js/navbar_default.js"></script>
        <?php
    }
}   
?>