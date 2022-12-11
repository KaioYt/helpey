const firstname = document.getElementById('firstname');
const lastname = document.getElementById('lastname');
const email = document.getElementById('email');
const number = document.getElementById('number');
const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirmPassword');


function validate(item){
  item.setCustomValidity('');
  item.checkValidity();

  if (item == confirmPassword){
    if (item.value == password.value) item.setCustomValidity('');

    else item.setCustomValidity('As Senhas Digitadas não são Iguais.')
  }
}


firstname.addEventListener('input', function () {validate(firstname)})
lastname.addEventListener('input', function () {validate(lastname)})
email.addEventListener('input', function () {validate(email)})
number.addEventListener('input', function () {maskTel(number)})
password.addEventListener('input', function () {validate(password)})
confirmPassword.addEventListener('input', function () {validate(confirmPassword)})