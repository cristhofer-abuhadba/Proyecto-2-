function verificar_campo(mail, user, pass){
    error = false;
    if(user.trim() === ""){
        error = true;
        alert("Por favor complete el campo de nombre de usuario.");
    }
    else if(!/^[A-Za-z0-9]/.test(user)){
        error = true;
        alert("No se permiten caracteres especiales.");
    }
    else if(mail.trim() === ""){
        error = true;
        alert("Por favor complete el campo de correo electronico.");
    }
    else if(!mail.includes('@gmail.com') && !mail.includes('@hotmail.com') && !mail.includes('@outlook.com')){
        error = true;
        alert("Ingrese un dominio valido.");
    }
    else if(pass.trim() === ""){
        error = true;
        alert("Por favor complete el campo de contraseña.");
    }
    else if(pass.length < 6){
        error = true;
        alert("Ingrese un minimo de 6 caracteres.");
    }
    else if(!/^[0-9A-Za-z]+$/.test(pass)){
        error = true;
        alert("No se permiten caranteres especiales.");
    }
    if(error){
        return false;
    }
    else{
        return true;
    }
}
function ingresar(mail, user, pass){
    $.ajax({
        url: "../Funciones/register.php",
        data: { 'comprobar': 'ingresar', 'mail': mail, 'usuario': user , 'password': pass },
        type: "POST",
        dataType: "json",
        success: function (data) {
            console.log("AJAX success", data);
            if(data.error === "1") {
                alert("El nombre de usuario no esta registrado");
            }
            else if(data.error === "2") {
                alert("El correo electronico no esta registrado");
            }
            else if(data.error === "3") {
                alert("La contraseña es incorrecta");
            }
            else if(data.error === "4") {
                alert("Hubo una falla con la query");
            }
            else if(data.error === "0") {
                alert("Usted se ha logrado ingresar a...");
                window.location.href = "../home.php";
            }
        }
    });
}

function ingreso(mail, user, pass){
    if(verificar_campo(mail, user, pass)){
        ingresar(mail, user, pass)
    }
}