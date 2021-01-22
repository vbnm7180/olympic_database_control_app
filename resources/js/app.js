require('./bootstrap');

document.querySelector('.apply-update__btn').onclick = function(e) {
    e.preventDefault();

    let reg = /\d/;

    let table = this.href.match(reg)[0];

    let data = document.querySelectorAll('.change-data');
    let url_string = document.querySelector('.apply-update__btn').href;
    let url = new URL(url_string);
    for (value of data) {

        console.log(value.name);
        console.log(value.value);

        url.searchParams.set(value.name, value.value);

    }

    fetch(url).then(window.location.href = '/select/' + table);
}