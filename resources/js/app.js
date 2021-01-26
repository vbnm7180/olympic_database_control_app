require('./bootstrap');

document.querySelector('body').addEventListener('click', function(e) {

    //Кнопка Изменить данные строки
    if (e.target.className === 'apply-update__btn') {

        e.preventDefault();

        let reg = /\d/;
        let table = e.target.href.match(reg)[0];
        //Выбираем все input
        let data = document.querySelectorAll('.change-data');
        //Выбираем ссылку кнопки
        let url_string = document.querySelector('.apply-update__btn').href;
        //Создаем объект URL и передаем в него параметры
        let url = new URL(url_string);
        for (value of data) {
            url.searchParams.set(value.name, value.value);
        }
        //Делаем ajax запрос и перенаправление
        fetch(url).then(window.location.href = '/select/' + table);
    }

    //Кнопка Добавить сторку
    if (e.target.className === 'apply-create__btn') {
        e.preventDefault();

        let reg = /\d/;
        let table = e.target.href.match(reg)[0];
        //Выбираем все input
        let data = document.querySelectorAll('.change-data');
        //Выбираем ссылку кнопки
        let url_string = e.target.closest('.apply-create__btn').href;
        //Создаем объект URL и передаем в него параметры
        let url = new URL(url_string);
        for (value of data) {
            url.searchParams.set(value.name, value.value);
        }
        //Делаем ajax запрос и перенаправление
        fetch(url).then(window.location.href = '/select/' + table);
    }

    //Кнопка найти строки
    if (e.target.className === 'find__btn') {
        e.preventDefault();

        //Выбираем все input
        let data = document.querySelectorAll('.search-data');
        //Выбираем ссылку кнопки
        let url_string = e.target.closest('.find__btn').href;
        //Создаем объект URL и передаем в него параметры
        let url = new URL(url_string);
        for (param of data) {
            if (param.value !== '') {
                url.searchParams.set(param.name, param.value);
            }
        }
        //Делаем ajax запрос и перенаправление
        fetch(url).then(response => response.json()).then(data => {
            document.querySelector('.main').innerHTML = data.html;
        });
    }
});