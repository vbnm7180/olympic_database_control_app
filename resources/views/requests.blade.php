@include('header')
@include('sidebar-crud')

<div class="content">
	<div class="request1">Запрос 1. Вывести количество медалей для каждой страны.</div>
	<a href="/request/1" class="request1__btn">Выполнить запрос 1</a>
	<div class="request2">Запрос 2. Вывести результаты всех спортсменов.</div>
	<a href="/request/2" class="request2__btn">Выполнить запрос 2</a>
	<div class="request3">Запрос 3. Вывести средний возраст спортсменов для каждой страны.</div>
	<a href="/request/3" class="request3__btn">Выполнить запрос 3</a>
</div>


@include('footer')