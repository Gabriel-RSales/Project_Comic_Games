var form = document.querySelector('.validation');
var inputForms = document.querySelectorAll('input');
var invalid = document.querySelectorAll('.invalid-feedback');
var password = document.querySelector('.divPassword').querySelector('input');
var invalidPassword = document.querySelector('.divPassword').querySelector('div');

class IpatternSenha {
    numero = /[0-9]/g;
    letrasMaiusculas = /[A-Z]/g;
    caracteresEspeciais = /[!|@|#|$|%|^|&|*|(|)|-|_]/g;
}

form.addEventListener('submit', function(event){
    let i = 0;
    for(const inputFormCheck of inputForms) {
        if (inputFormCheck.value == ""){
            invalid[i].textContent = "Espaço em branco!";
        }
        i++;
    }

    if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation(); 
    }

    form.classList.add('was-validated');
}); 

password.oninput = () => {
    const patterns = new IpatternSenha;

    if(!(patterns.numero.test(password.value) && patterns.letrasMaiusculas.test(password.value) && patterns.caracteresEspeciais.test(password.value) && password.value.length >= 6)) {
        password.setCustomValidity(" ");
        password.classList.add('is-invalid');
        invalidPassword.textContent = "A senha deve ter pelo menos 6 letras, 1 letra maiúscula, 1 número e 1 caracter especial.";
    } else{
        password.setCustomValidity("");
        password.classList.remove('is-invalid');
    } 
};