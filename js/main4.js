$('#create').on('click', function (e) {

    var login = $('input[name=login]').val();
    var passwd = $('input[name=pass1]').val();
    var passwd_again = $('input[name=pass2]').val();

    if (login == 0 || passwd == 0 || passwd_again == 0) {
        alert("Заполните все поля!");
    }

    else if (login.length < 5) {
        alert("Логин слишком короткий!");
    }
    else if (passwd.length < 8) {
        alert("Пароль слишком короткий!");
    }
    else if (passwd != passwd_again) {
        alert("Пароли не совпадают!");
    }


    else {
        $.ajax({
            url: 'admin/create',
            method: 'POST', //отправляем данные методом пост
            data: {
                login: login,
                passwd: passwd
            }
        }).done(function (data) {//ответ от формы

            var answer = JSON.parse(data);


            if (answer == 1) {
                alert('Такой пользователь уже есть, пожалуйста, выберите другой логин');
                $("#registr_form").trigger('reset');
            }
            //vot tut somnitelno
            else {

                //if result
                alert("Вы успешно создали пользователя");
                $("#registr_form").trigger('reset');

            }
        });

    }
});


$('#avtorization_button').on('click', function (e) {

    var login = $('input[name=inputEmail3]').val();
    var passwd = $('input[name=inputPassword3]').val();

    if (login == 0 || passwd == 0) {
        alert("Заполните все поля!");
    }

    else if (login.length < 5) {
        alert("Логин слишком короткий!");
    }
    else if (passwd.length < 8) {
        alert("Пароль слишком короткий!");
    }

    else {
        $.ajax({
            url: 'autorization/autorzation',
            method: 'POST', //отправляем данные методом пост
            data: {
                login: login,
                passwd: passwd
            }
        }).done(function (data) {//ответ от формы
            var answer = JSON.parse(data);
            if (answer == 1) {
                alert('Вы успешно авторизировались');
                $("#avtor_form").trigger('reset');
                // location.reload();
            }
            else if (answer == 0) {
                alert("Такого пользователя нет!");
                $("#avtor_form").trigger('reset');
            }
            else {
                alert("Пароль неверный!");
            }
        });
    }
});


$("form[name='uploader']").submit(function (e) {
    var formData = new FormData($(this)[0]); //все данные из формы
    var username = $('input[name=username]').val();
    var birthday = $('input[name=birthday]').val();
    var description = $('input[name=description]').val();

    if (username == 0 || birthday == 0 || description == 0) {
        alert("Заполните все поля!");
    }

    else if (birthday.length > 4) {
        alert("Возраст введен некоректно");
    }

    else if (document.getElementById("userfile").files.length == 0) { // проверяем инпут с картинкой на пустоту
        alert("Вы забыли загрузить картинку!");
    }
    else {

        $.ajax({
            url: 'users/save',
            type: "POST",
            data: formData,
            async: false,
            success: function (msg) {
                if (msg == 1) {
                    alert("Картинка корректна и была успешно загружена");//сделать по всем данным
                    location.reload();
                }
                if (msg == 2) {
                    alert("Картинка не загружена");//сделать по всем данным
                }
                if (msg == 0) {
                    alert("Картинка не загружена, попробуйте другой формат");//сделать по всем данным
                }
            },
            error: function (msg) {
                alert("Произошла ошибка!");
                // location.reload();
            },
            cache: false,
            contentType: false,
            processData: false
        });
        e.preventDefault();

    }


});


$('#registration_button').on('click', function (e) {

    var login = $('input[name=inputEmail3]').val();
    var passwd = $('input[name=inputPassword3]').val();
    var passwd_again = $('input[name=inputPassword4]').val();

    if (login == 0 || passwd == 0 || passwd_again == 0) {
        alert("Заполните все поля!");
    }

    else if (login.length < 5) {
        alert("Логин слишком короткий!");
    }
    else if (passwd.length < 8) {
        alert("Пароль слишком короткий!");
    }
    else if (passwd != passwd_again) {
        alert("Пароли не совпадают!");
    }


    else {
        $.ajax({
            url: 'registration/registration',
            method: 'POST', //отправляем данные методом пост
            data: {
                login: login,
                passwd: passwd
            }
        }).done(function (data) {//ответ от формы

            var answer = JSON.parse(data);


            if (answer == 1) {
                alert('Такой пользователь уже есть, пожалуйста, выберите другой логин');
                $("#registr_form").trigger('reset');
            }
            //vot tut somnitelno
            else {

                //if result
                alert("Вы успешно зарегистрировались, тепер нужно авторизироваться");
                $("#registr_form").trigger('reset');

            }
        });

    }
});




// Вешаем функцию на событие
// Получим данные файлов и добавим их в переменную

//$('#userphoto').change(function() {
//$("img").bind("click", function() {
$('#change_img').on('click', function (e) {
    //  var formData = new FormData($(this)[0]);
    var id = $(this).closest('tr').find('td:first').text();

    $.ajax({
        url: 'users/changePhoto',
        method: 'POST', //отправляем данные методом пост
        data: {
            id: id
        }
    }).done(function (data) {//ответ от формы

        var answer = JSON.parse(data);

    });

});