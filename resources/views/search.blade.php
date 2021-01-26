@include ('header')
@include('sidebar-search')

<div class="content">
	<table class="search-table">

	    <--Шапка формы-->
		<tr class="search-table__string">
			<th class="search-table__cell">Столбец</th>
			<th class="search-table__cell">Значение</th>
		</tr>

		<--Строки таблицы-->
		@foreach ($headers as $header)
		<tr class="search-table__string">
			<td class="search-table__cell">{{$header}}</td>
			<td class="search-table__cell"><input class="search-data" type="text" name="{{$header}}" value=""></td>
		</tr>
		@endforeach

	</table>

	<a href="/find/{{$table}}" class="find__btn">Найти</a>

</div>

@include ('footer')