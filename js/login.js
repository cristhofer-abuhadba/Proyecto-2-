function verificar_campo(user, mail, pass){
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

    }
}