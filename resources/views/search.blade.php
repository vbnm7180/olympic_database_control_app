@include ('header')
@include('sidebar-search')

{{-- Форма поиска по бд --}}
<div class="content">
	<table class="table">

		{{-- Шапка формы --}}
		<tr class="table__string">
			<th class="cell">Столбец</th>
			<th class="cell">Значение</th>
		</tr>

		{{-- Строки таблицы --}}
		@foreach ($headers as $header)
		<tr class="table__string">
			<td class="cell">{{$header}}</td>
			<td class="cell"><input class="search-data" type="text" name="{{$header}}" value=""></td>
		</tr>
		@endforeach

	</table>

	<a href="/find/{{$table}}" class="find__btn">Найти</a>

</div>

@include ('footer')