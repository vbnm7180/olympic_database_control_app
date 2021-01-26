require('./bootstrap');

document.querySelector('body').addEventListener('click', function click1(e) {
    console.log(e.target.className);
    if (e.target.className === 'apply-update__btn') {

        e.preventDefault();

        let reg = /\d/;
        let table = e.target.href.match(reg)[0];
        let data = document.querySelectorAll('.change-data');
        let url_string = document.querySelector('.apply-update__btn').href;
        let url = new URL(url_string);
        for (value of data) {
            url.searchParams.set(value.name, value.value);
        }

        fetch(url).then(window.location.href = '/select/' + table);
    }

    if (e.target.className === 'apply-create__btn') {
        e.preventDefault();

        let reg = /\d/;
        let table = e.target.href.match(reg)[0];
        let data = document.querySelectorAll('.change-data');
        let url_string = e.target.closest('.apply-create__btn').href;
        let url = new URL(url_string);
        for (value of data) {
            url.searchParams.set(value.name, value.value);
        }

        fetch(url).then(window.location.href = '/select/' + table);
    }

    if (e.target.className === 'find__btn') {
        e.preventDefault();

        let data = document.querySelectorAll('.search-data');
        let url_string = e.target.closest('.find__btn').href;
        let url = new URL(url_string);

        for (param of data) {
            if (param.value !== '') {
                url.searchParams.set(param.name, param.value);
            }
        }

        fetch(url).then(response => response.json()).then(data => {
            document.querySelector('.main').innerHTML = data.html;
        });
    }


});