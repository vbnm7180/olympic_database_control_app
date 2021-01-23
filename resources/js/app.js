require('./bootstrap');

/*
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
*/

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

            console.log(value.name);
            console.log(value.value);

            url.searchParams.set(value.name, value.value);

        }

        //fetch(url).then(window.location.href = '/select/' + table).then(location.reload());
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

            console.log(value.name);
            console.log(value.value);

            url.searchParams.set(value.name, value.value);

        }

        fetch(url).then(window.location.href = '/select/' + table);
    }
});

/*
document.querySelector('body').addEventListener('click', function click2(e) {

    if (e.target.className === 'apply-create__btn') {
        e.target.preventDefault();

        let reg = /\d/;

        let table = this.href.match(reg)[0];

        let data = document.querySelectorAll('.change-data');
        let url_string = e.target.closest('.apply-create__btn').href;
        let url = new URL(url_string);
        for (value of data) {

            console.log(value.name);
            console.log(value.value);

            url.searchParams.set(value.name, value.value);

        }

        fetch(url).then(window.location.href = '/select/' + table);
    }
});
*/


/*
document.querySelector('.apply-create__btn').onclick = function(e) {
    console.log(1);
    e.preventDefault();
    /*
        let reg = /\d/;

        let table = this.href.match(reg)[0];

        let data = document.querySelectorAll('.change-data');
        let url_string = document.querySelector('.apply-create__btn').href;
        let url = new URL(url_string);
        for (value of data) {

            console.log(value.name);
            console.log(value.value);

            url.searchParams.set(value.name, value.value);

        }

        fetch(url).then(window.location.href = '/select/' + table);
        
}

*/