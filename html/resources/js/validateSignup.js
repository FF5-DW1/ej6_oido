function validateSignup() {
    let x = document.forms["form"]["name"].value;
    if (x == "") {
        alert("Por favor, introduzca su nombre");
        return false;
    }
    let y = document.forms["form"]["fname"].value;
    if (y == "") {
        alert("Por favor, introduzca su apellido");
        return false;
    }
    let v = document.forms["form"]["username"].value;
    if (v == "") {
        alert("Por favor, escoja un nombre de usuario");
        return false;
    }
    let z = document.forms["form"]["email"].value;
    const validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (z == "") {
        alert("Por favor, introduzca su email");
        return false;
    } else if (!z.match(validRegex)) {
        alert("Formato de email no válido")
        return false;
    }
    let a = document.forms["form"]["emailconf"].value;
    if (a != z) {
        alert("Por favor, confirma el mail correctamente");
        return false;
    } 
    let r = document.forms["form"]["password"].value;
    const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    if (!r.match(passwordRegex)) {
        alert("La contraseña debe tener al menos una mayúscula, una minúscula, un número y un carácter especial. Además debe contener entre 8 y 15 caracteres.");
        return false;
    }
    let b = document.forms["form"]["passwordconf"].value;
    if (b != r) {
        alert("Por favor, confirma la contraseña correctamente");
        return false;
    } 
}
