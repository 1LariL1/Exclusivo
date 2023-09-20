let btn = document.querySelector('.heading__button'), //кнопка отвечает за открытие окна
    blockHidden = document.querySelector('.heading__login'), //кнопка отвечает за скрытый блок авторизации
    btnClose = document.querySelector('.form__close'), //кнопка отвечает за закрытие формы авторизации
    regBtn = document.querySelector('.form__reg'), //кнопка переводит нас на фомру регистрации
    logBtn = document.querySelector('.form__log'), //кнопка переводит на на форму авторизации
    btnVhod = document.querySelector('.login__button'), //войти в аккаунт
    regHidden = document.querySelector('.heading__reg'), //кнопка отвечает за скрытый блок регистрации
    createAcc = document.querySelector('.login__reg'), //кнопка переводит нас на фомру регистрации
    haveAcc = document.querySelector('.reg__login'),//кнопка переводит на на форму авторизации
    btnCloseTwo = document.querySelector('.form__close-reg'); //кнопка отвечает за закрытие формы регистрации


function showBlock() { //функция показать блок
    blockHidden.classList.add('b__show'); //при нажатии на кнопку добавляется новый класс
    regHidden.classList.remove('b__show-two'); //при нажатии на кнопку убирается класс
}

function hideBlock(){ //функция скрыть блок
    blockHidden.classList.remove('b__show'); //при нажатии на кнопку убирается класс
}
    
function showReg() { //функция показать форму регистрации
    regHidden.classList.add('b__show-two'); //при нажатии на кнопку добавляется новый класс
    blockHidden.classList.remove('b__show'); //при нажатии на кнопку убирается класс
}

function showVhod() { //функция показать форму авторизации
    blockHidden.classList.add('b__show'); //при нажатии на кнопку добавляется новый класс
    regHidden.classList.remove('b__show-two'); //при нажатии на кнопку убирается класс
}

function hideBlockTwo(){ //функция скрыть блок
    regHidden.classList.remove('b__show-two'); //при нажатии на кнопку убирается класс
}


console.log(regBtn)  
btn.addEventListener('click', showBlock);              //далее: функции срабатывают при нажатии на определенные кнопки
btnClose.addEventListener('click', hideBlock);
regBtn.addEventListener('click', showReg);
logBtn.addEventListener('click', showVhod);
btnVhod.addEventListener('click', showVhod);
btnCloseTwo.addEventListener('click',  hideBlockTwo);
createAcc.addEventListener('click',  showReg);
haveAcc.addEventListener('click',  showVhod); 



// Существуют разные способы получить DOM-узел; здесь мы определяем саму форму и
// поле ввода email и элемент span, в который поместим сообщение об ошибке
const formLog  = document.getElementsByTagName('form')[0];
const formReg = document.getElementsByTagName('form')[1];

const email = document.getElementById('emailInput');
const emailError = document.querySelector('#emailInput + span.error-email');
const pass = document.getElementById('passwordInput');
const passError = document.querySelector('#passwordInput + span.error-password');

const emailReg = document.getElementById('emailInputReg');
const emailErrorReg = document.querySelector('#emailInputReg + span.error-email');
const nameReg = document.getElementById('fioInput');
const nameRegError = document.querySelector('#fioInput + span.error-name');
const passReg = document.getElementById('passRegInput');
const passRegError = document.querySelector('#passRegInput + span.error-pass');
const passConfirmReg = document.getElementById('passConfirmRegInput');
const passConfirmRegError = document.querySelector('#passConfirmRegInput + span.error-passConfirm');



email.addEventListener('input', function (event) {
  // Каждый раз, когда пользователь что-то вводит,
  // мы проверяем, являются ли поля формы валидными

  if (email.validity.valid) {
    // Если на момент валидации какое-то сообщение об ошибке уже отображается,
    // если поле валидно, удаляем сообщение
    emailError.textContent = ''; // Сбросить содержимое сообщения
    emailError.className = 'error-email'; // Сбросить визуальное состояние сообщения
  } else {
    // Если поле не валидно, показываем правильную ошибку
    showErrorEmail();
  }
});

pass.addEventListener('input', function (event) {
    // Каждый раз, когда пользователь что-то вводит,
    // мы проверяем, являются ли поля формы валидными
  
    if (pass.validity.valid) {
      // Если на момент валидации какое-то сообщение об ошибке уже отображается,
      // если поле валидно, удаляем сообщение
      passError.textContent = ''; // Сбросить содержимое сообщения
      passError.className = 'error-password'; // Сбросить визуальное состояние сообщения
    } else {
      // Если поле не валидно, показываем правильную ошибку
      showErrorPassword();
    }
  });







  emailReg.addEventListener('input', function (event) {
    // Каждый раз, когда пользователь что-то вводит,
    // мы проверяем, являются ли поля формы валидными
  
    if (emailReg.validity.valid) {
      // Если на момент валидации какое-то сообщение об ошибке уже отображается,
      // если поле валидно, удаляем сообщение
      emailErrorReg.textContent = ''; // Сбросить содержимое сообщения
      emailErrorReg.className = 'error-email'; // Сбросить визуальное состояние сообщения
    } else {
      // Если поле не валидно, показываем правильную ошибку
      showErrorEmailReg();
    }
  });

  nameReg.addEventListener('input', function (event) {
    // Каждый раз, когда пользователь что-то вводит,
    // мы проверяем, являются ли поля формы валидными
  
    if (nameReg.validity.valid) {
      // Если на момент валидации какое-то сообщение об ошибке уже отображается,
      // если поле валидно, удаляем сообщение
      nameRegError.textContent = ''; // Сбросить содержимое сообщения
      nameRegError.className = 'error-name'; // Сбросить визуальное состояние сообщения
    } else {
      // Если поле не валидно, показываем правильную ошибку
      showErrorNameReg();
    }
  });

  passReg.addEventListener('input', function (event) {
    // Каждый раз, когда пользователь что-то вводит,
    // мы проверяем, являются ли поля формы валидными
  
    if (passReg.validity.valid) {
      // Если на момент валидации какое-то сообщение об ошибке уже отображается,
      // если поле валидно, удаляем сообщение
      passRegError.textContent = ''; // Сбросить содержимое сообщения
      passRegError.className = 'error-pass'; // Сбросить визуальное состояние сообщения
    } else {
      // Если поле не валидно, показываем правильную ошибку
      showErrorPassReg();
    }
  });

  passConfirmReg.addEventListener('input', function (event) {

    if (passReg.length != 0) {
        if (passReg.value == passConfirmReg.value) {
            passConfirmRegError.textContent = '';
            passConfirmRegError.className = 'error-passConfirm';
        }
        else {
            passConfirmRegError.textContent = 'Пароли не совпадают';
            passConfirmRegError.className = 'error-passConfirm active';
        }
    }
    else {
        passConfirmRegError.textContent = 'Поле не может быть пустым';
    }
  });





  

formLog.addEventListener('submit', function (event) {
  // Если поле email валдно, позволяем форме отправляться

  if(!email.validity.valid) {
    // Если поле email не валидно, отображаем соответствующее сообщение об ошибке
    showErrorEmail();
    // Затем предотвращаем стандартное событие отправки формы
    event.preventDefault();
  } else if (!pass.validity.valid) {
    // Если поле email не валидно, отображаем соответствующее сообщение об ошибке
    showErrorPassword();
    // Затем предотвращаем стандартное событие отправки формы
    event.preventDefault();
  } 
});

formReg.addEventListener('submit', function (event) {
    // Если поле email валдно, позволяем форме отправляться
  
    if(!emailReg.validity.valid) {
      // Если поле email не валидно, отображаем соответствующее сообщение об ошибке
      showErrorEmailReg();
      // Затем предотвращаем стандартное событие отправки формы
      event.preventDefault();
    } else if (!nameReg.validity.valid) {
        // Если поле email не валидно, отображаем соответствующее сообщение об ошибке
        showErrorNameReg();
        // Затем предотвращаем стандартное событие отправки формы
        event.preventDefault();

    } else if (!passReg.validity.valid) {
        // Если поле email не валидно, отображаем соответствующее сообщение об ошибке
        showErrorPassReg();
        // Затем предотвращаем стандартное событие отправки формы
        event.preventDefault();
    } else if (passConfirmReg.value !== passReg.value) {

        event.preventDefault();

    } else if (passConfirmReg == 0) {
        event.preventDefault();
    }
});






function showErrorEmail() {
  if(email.validity.valueMissing) {
    // Если поле пустое,
    // отображаем следующее сообщение об ошибке
    emailError.textContent = 'Это поле не может быть пустым';
  } else if(email.validity.typeMismatch) {
    // Если поле содержит не email-адрес,
    // отображаем следующее сообщение об ошибке
    emailError.textContent = 'Адрес электронной почты должен содержать знак "@"';



  // Задаём соответствующую стилизацию
  emailError.className = 'error-email active';
  }
}

function showErrorPassword() {
    if(pass.validity.valueMissing) {
        // Если поле пустое,
        // отображаем следующее сообщение об ошибке
        passError.textContent = 'Это поле не может быть пустым';
    }
    else if(pass.validity.tooShort) {
      // Если содержимое слишком короткое,
      // отображаем следующее сообщение об ошибке
      passError.textContent = 'Пароль должен содержать как минимум 8 символов';
    }
  
  
    // Задаём соответствующую стилизацию

    passError.className = 'error-password active';
  }








  function showErrorEmailReg() {
    if(emailReg.validity.valueMissing) {
      // Если поле пустое,
      // отображаем следующее сообщение об ошибке
      emailErrorReg.textContent = 'Это поле не может быть пустым';
    } else if(emailReg.validity.typeMismatch) {
      // Если поле содержит не email-адрес,
      // отображаем следующее сообщение об ошибке
      emailErrorReg.textContent = 'Адрес электронной почты должен содержать знак "@"';
  
  
  
    // Задаём соответствующую стилизацию
    emailErrorReg.className = 'error-email active';
    }
  }

  function showErrorNameReg() {
    if(nameReg.validity.valueMissing) {
      // Если поле пустое,
      // отображаем следующее сообщение об ошибке
      nameRegError.textContent = 'Это поле не может быть пустым';
    } else if (nameReg.validity.tooShort) {
        // Если содержимое слишком короткое,
        // отображаем следующее сообщение об ошибке
        nameRegError.textContent = 'Поле должно содержать как минимум 8 символов';
    }
  
  
  
    // Задаём соответствующую стилизацию
    nameRegError.className = 'error-name active';
    }




    function showErrorPassReg() {
        if(passReg.validity.valueMissing) {
          // Если поле пустое,
          // отображаем следующее сообщение об ошибке
          passRegError.textContent = 'Это поле не может быть пустым';
        } else if (passReg.validity.tooShort) {
            // Если содержимое слишком короткое,
            // отображаем следующее сообщение об ошибке
            passRegError.textContent = 'Пароль должен содержать как минимум 8 символов';
        }
      
      
      
        // Задаём соответствующую стилизацию
        passRegError.className = 'error-pass active';
        }

