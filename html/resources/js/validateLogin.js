function validateLogin() {
    let x = document.forms["formulario"]["name"].value;
    if (x == "") {
        alert("Por favor, introduzca su nombre");
        return false;
    }
    let z = document.forms["formulario"]["email"].value;
    const validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (z == "") {
        alert("Por favor, introduzca su email");
        return false;
    } else if (!z.match(validRegex)) {
        alert("Formato de email no válido")
        return false;
    }
    let r = document.forms["formulario"]["password"].value;
    const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    if (!r.match(passwordRegex)) {
        alert("La contraseña debe tener al menos una mayúscula, una minúscula, un número y un carácter especial. Además debe contener entre 8 y 15 caracteres.");
        return false;
    }
}

