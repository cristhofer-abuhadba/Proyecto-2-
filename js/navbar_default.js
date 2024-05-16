function novedades(){
    var pagina = "<?php echo basename($_SERVER['PHP_SELF']); ?>";
    if(pagina == "home.php"){
        window.location.href = "novedades/novedades.php";
    }
    else if(pagina == "wiki/EntidadesHostiles/hostiles.php"){
        window.location.href = "../../novedades/novedades.php";
    }
    else(
        window.location.href = novedades.php
    )
}