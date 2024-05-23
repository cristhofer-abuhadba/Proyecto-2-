document.addEventListener("DOMContentLoaded", function(){
    console.log("oasjoisjaojdsoqajo")
    var img = document.getElementById("img");
    var path = window.location.pathname;
    var basepath = "";

    if(path.includes("home")){
        basepath = "../img/profile-user.png"
    }
    else if(path.includes("novedades") || path.includes("descarga")){
        basepath = "../../img/profile-user.png"
    }
    else if(path.includes("wiki")){
        basepath = "../../../img/profile-user.png"
    }

    img.src = basepath
})

function home(pagina) {
    if (pagina == "descarga.php"){
        window.location.href = "../home.php";
    }
    else if (pagina == "ehostiles.php") {
        window.location.href = "../../home.php";
    }
    else if (pagina == "eneutrales.php") {
        window.location.href = "../../home.php";
    }
    else if (pagina == "jefes.php") {
        window.location.href = "../../home.php";
    }
    else if (pagina == "objetos.php") {
        window.location.href = "../../home.php";
    }
    else if (pagina == "razas.php") {
        window.location.href = "../../home.php";
    }
    else if (pagina == "roles.php") {
        window.location.href = "../../home.php";
    }
    else if (pagina == "terrenos.php"){
        window.location.href = "../../home.php";
    }
    else if (pagina == "novedades.php"){
        window.location.href = "../home.php";
    }
    else{

    }
}

function descarga(pagina) {
    if (pagina == "home.php") {
        window.location.href = "descarga/descarga.php";
    }
    else if (pagina == "ehostiles.php") {
        window.location.href = "../../descarga/descarga.php";
    }
    else if (pagina == "eneutrales.php") {
        window.location.href = "../../descarga/descarga.php";
    }
    else if (pagina == "jefes.php") {
        window.location.href = "../../descarga/descarga.php";
    }
    else if (pagina == "objetos.php") {
        window.location.href = "../../descarga/descarga.php";
    }
    else if (pagina == "razas.php") {
        window.location.href = "../../descarga/descarga.php";
    }
    else if (pagina == "roles.php") {
        window.location.href = "../../descarga/descarga.php";
    }
    else if (pagina == "terrenos.php"){
        window.location.href = "../../descarga/descarga.php";
    }
    else if (pagina == "novedades.php"){
        window.location.href = "../descarga/descarga.php";
    }
    else {
    }
}

function hostiles(pagina) {
    if (pagina == "home.php") {
        window.location.href = "wiki/EntidadesHostiles/ehostiles.php";
    }
    else if (pagina == "descarga.php"){
        window.location.href = "../wiki/EntidadesHostiles/ehostiles.php";
    }
    else if (pagina == "eneutrales.php") {
        window.location.href = "../EntidadesHostiles/ehostiles.php";
    }
    else if (pagina == "jefes.php") {
        window.location.href = "../EntidadesHostiles/ehostiles.php";
    }
    else if (pagina == "objetos.php"){
        window.location.href = "../EntidadesHostiles/ehostiles.php"
    }
    else if (pagina == "razas.php") {
        window.location.href = "../EntidadesHostiles/ehostiles.php";
    }
    else if (pagina == "roles.php") {
        window.location.href = "../EntidadesHostiles/ehostiles.php";
    }
    else if (pagina == "terrenos.php"){
        window.location.href = "../Terrenos/terrenos.php";
    }
    else if (pagina == "novedades.php"){
        window.location.href = "../wiki/EntidadesHostiles/ehostiles.php";
    }
    else {
    }
}

function neutrales(pagina) {
    if (pagina == "home.php") {
        window.location.href = "wiki/EntidadesNeutrales/eneutrales.php";
    }
    else if (pagina == "descarga.php"){
        window.location.href = "../wiki/EntidadesNeutrales/eneutrales.php";
    }
    else if (pagina == "ehostiles.php"){
        window.location.href = "../EntidadesNeutrales/eneutrales.php"
    }
    else if (pagina == "jefes.php") {
        window.location.href = "../EntidadesNeutrales/eneutrales.php";
    }
    else if (pagina == "objetos.php") {
        window.location.href = "../EntidadesNeutrales/eneutrales.php";
    }
    else if (pagina == "razas.php") {
        window.location.href = "../EntidadesNeutrales/eneutrales.php";
    }
    else if (pagina == "roles.php") {
        window.location.href = "../EntidadesNeutrales/eneutrales.php";
    }
    else if (pagina == "terrenos.php"){
        window.location.href = "../Terrenos/terrenos.php";
    }
    else if (pagina == "novedades.php"){
        window.location.href = "../wiki/EntidadesNeutrales/eneutrales.php";
    }
    else {
    }
}

function jefes(pagina) {
    if (pagina == "home.php") {
        window.location.href = "wiki/Jefes/jefes.php";
    }
    else if (pagina == "descarga.php"){
        window.location.href = "../wiki/jefes/jefes.php";
    }
    else if (pagina == "ehostiles.php") {
        window.location.href = "../Jefes/jefes.php";
    }
    else if (pagina == "eneutrales.php") {
        window.location.href = "../Jefes/jefes.php";
    }
    else if (pagina == "objetos.php") {
        window.location.href = "../Jefes/jefes.php";
    }
    else if (pagina == "razas.php") {
        window.location.href = "../Jefes/jefes.php";
    }
    else if (pagina == "roles.php") {
        window.location.href = "../Jefes/jefes.php";
    }
    else if (pagina == "terrenos.php"){
        window.location.href = "../Terrenos/terrenos.php";
    }
    else if (pagina == "novedades.php"){
        window.location.href = "../wiki/Jefes/jefes.php";
    }
    else {
    }
}

function objetos(pagina) {
    if (pagina == "home.php") {
        window.location.href = "wiki/Objetos/objetos.php";
    }
    else if (pagina == "descarga.php"){
        window.location.href = "../wiki/Objetos/objetos.php";
    }
    else if (pagina == "ehostiles.php") {
        window.location.href = "../Objetos/objetos.php";
    }
    else if (pagina == "eneutrales.php") {
        window.location.href = "../Objetos/objetos.php";
    }
    else if (pagina == "jefes.php") {
        window.location.href = "../Objetos/objetos.php";
    }
    else if (pagina == "razas.php") {
        window.location.href = "../Objetos/objetos.php";
    }
    else if (pagina == "roles.php") {
        window.location.href = "../Objetos/objetos.php";
    }
    else if (pagina == "terrenos.php"){
        window.location.href = "../Objetos/objetos.php";
    }
    else if (pagina == "novedades.php"){
        window.location.href = "../wiki/Objetos/objetos.php";
    }
    else {
    }
}

function razas(pagina) {
    if (pagina == "home.php") {
        window.location.href = "wiki/Razas/razas.php";
    }
    else if (pagina == "descarga.php"){
        window.location.href = "../wiki/Razas/razas.php";
    }
    else if (pagina == "ehostiles.php") {
        window.location.href = "../Razas/razas.php";
    }
    else if (pagina == "eneutrales.php") {
        window.location.href = "../Razas/razas.php";
    }
    else if (pagina == "jefes.php") {
        window.location.href = "../Razas/razas.php";
    }
    else if (pagina == "objetos.php") {
        window.location.href = "../Razas/razas.php";
    }
    else if (pagina == "roles.php") {
        window.location.href = "../Razas/razas.php";
    }
    else if (pagina == "terrenos.php"){
        window.location.href = "../Terrenos/terrenos.php";
    }
    else if (pagina == "novedades.php"){
        window.location.href = "../wiki/Razas/razas.php";
    }
    else {
    }
}

function roles(pagina) {
    if (pagina == "home.php") {
        window.location.href = "wiki/Roles/roles.php";
    }
    else if (pagina == "descarga.php"){
        window.location.href = "../wiki/Roles/roles.php";
    }
    else if (pagina == "ehostiles.php") {
        window.location.href = "../Roles/roles.php";
    }
    else if (pagina == "eneutrales.php") {
        window.location.href = "../Roles/roles.php";
    }
    else if (pagina == "jefes.php") {
        window.location.href = "../Roles/roles.php";
    }
    else if (pagina == "objetos.php") {
        window.location.href = "../Roles/roles.php";
    }
    else if (pagina == "razas.php") {
        window.location.href = "../Roles/roles.php";
    }
    else if (pagina == "terrenos.php"){
        window.location.href = "../Terrenos/terrenos.php";
    }
    else if (pagina == "novedades.php") {
        window.location.href = "../wiki/Roles/roles.php";
    }
    else {
    }
}

function truco(pagina) {
    if (pagina == "home.php") {
        window.location.href = "wiki/Terrenos/terrrenos.php";
    }
    else if (pagina == "descarga.php"){
        window.location.href = "../wiki/Terrenos/terrenos.php";
    }
    else if (pagina == "ehostiles.php") {
        window.location.href = "../Terrenos/terrenos.php";
    }
    else if (pagina == "eneutrales.php") {
        window.location.href = "../Terrenos/terrenos.php";
    }
    else if (pagina == "jefes.php") {
        window.location.href = "../Terrenos/terrenos.php";
    }
    else if (pagina == "objetos.php") {
        window.location.href = "../Terrenos/terrenos.php";
    }
    else if (pagina == "razas.php") {
        window.location.href = "../Terrenos/terrenos.php";
    }
    else if (pagina == "roles.php"){
        window.location.href = "../Terrenos/terrenos.php";
    }
    else if (pagina == "novedades.php") {
        window.location.href = "../wiki/Terrenos/terrenos.php";
    }
    else {
    }
}

function novedades(pagina) {
    if (pagina == "home.php") {
        window.location.href = "novedades/novedades.php";
    }
    else if (pagina == "descarga.php"){
        window.location.href = "../novedades/novedades.php";
    }
    else if (pagina == "ehostiles.php") {
        window.location.href = "../../novedades/novedades.php";
    }
    else if (pagina == "eneutrales.php") {
        window.location.href = "../../novedades/novedades.php";
    }
    else if (pagina == "jefes.php") {
        window.location.href = "../../novedades/novedades.php";
    }
    else if (pagina == "objetos.php") {
        window.location.href = "../../novedades/novedades.php";
    }
    else if (pagina == "razas.php") {
        window.location.href = "../../novedades/novedades.php";
    }
    else if (pagina == "roles.php") {
        window.location.href = "../../novedades/novedades.php";
    }
    else if (pagina == "terrenos.php"){
        window.location.href = "../../novedades/novedades.php";
    }
    else {
    }
}

function informacion(){
    //Obetener la ruta de la URL actual
    var path = window.location.pathname;
    //Define la ruta base
    var baseURL = "funciones/register.php";

    if (path.includes("home")) {
        baseURL = "funciones/register.php";
    } else if (path.includes("novedades") || path.includes("descarga")) {
        baseURL = "../funciones/register.php";
    } else if (path.includes("wiki")) {
        baseURL = "../../funciones/register.php";
    }
    $.ajax({
        url: baseURL,
        type: "POST",
        dataType: "html",
        success: function(data){
            var scriptTag = document.createElement("script");
            scriptTag.textContent = data;
            document.head.appendChild(scriptTag);
            console.log(sessionData.name);

            user_00 = sessionData.user;
            name_00 = sessionData.name;
            lastname_00 = sessionData.lastname;
            mail_00 = sessionData.mail;

            $("#user").html("Datos del usuario " + user_00);
            $('#name').html("Nombre: " + name_00);
            $('#lastname').html("Apellido: " + lastname_00);
            $('#mail').html("Correo electronico: " + mail_00);

        }
    })
}
function cerrar_cuenta(){
    //Obetener la ruta de la URL actual
    var path = window.location.pathname;
    //Define la ruta base
    var baseURL = "funciones/register.php";
    //Define la ruta ida
    var URL = "home.php";

    if (path.includes("home")) {
        baseURL = "funciones/register.php";
        URL = "home.php"
    } else if (path.includes("novedades") || path.includes("descarga")) {
        baseURL = "../funciones/register.php";
        URL = "../home.php"
    } else if (path.includes("wiki")) {
        baseURL = "../../funciones/register.php";
        URL = "../../home.php"
    }
    $.ajax({
        url: baseURL,
        data:{ 'comprobar': 'cerrar'},
        type: "POST",
        dataType: "html",
        success: function(data){
            console.log("se cerro la cuenta");
            window.location.href = URL;
        }
    })
}