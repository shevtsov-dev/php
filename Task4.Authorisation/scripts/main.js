function validatePassword() {
    const password1 = document.getElementById('password1').value;
    const password2 = document.getElementById('password2').value;
    const passwordPattern = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    let message = '';

    if (!passwordPattern.test(password1)) {
        message = 'Пароль должен содержать хотя бы одну заглавную букву, одну строчную букву, одну цифру, один специальный символ и быть длиной не менее 8 символов.';
    } else if (password1 !== password2) {
        message = 'Пароли не совпадают.';
    }

    if (message) {
        alert(message);
        return false;
    }
    return true;
}

function validateName(name) {
    const namePattern = /^[A-Za-zА-Яа-яЁё]+$/;
    return namePattern.test(name);
}

function validateLogin() {
    const login = document.getElementById('login').value;
    // Проверка, что логин начинается с буквы и содержит только буквы и цифры
    const loginPattern = /^[A-Za-z][A-Za-z0-9]*$/;

    if (!loginPattern.test(login)) {
        alert('Логин должен начинаться с буквы и содержать только буквы и цифры.');
        return false;
    }

    return true;
}

function validateForm() {
    const firstName = document.getElementById('firstName').value;
    const secondName = document.getElementById('secondName').value;

    // Проверка имени и фамилии
    if (!validateName(firstName) || !validateName(secondName)) {
        alert('Имя и фамилия должны содержать только буквы.');
        return false;
    }

    // Проверка логина
    if (!validateLogin()) {
        alert('Имя и фамилия должны содержать только буквы.');
        return false;
    }

    // Проверка пароля
    return validatePassword();
}