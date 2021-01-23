@include ('header')
@include('sidebar-search')

@php
$table1=session()->get('current_table');
@endphp

<div class="content">
	<table class="change-table">

		<tr class="change-table__string">
			<th class="change-table__cell">Столбец</th>
			<th class="change-table__cell">Значение</th>
		</tr>

		@foreach ($headers as $header)
		<tr class="change-table__string">
			<td class="change-table__cell">{{$header}}</td>
			<td class="change-table__cell"><input class="change-data" type="text" name="{{$header}}" value=""></td>
		</tr>
		@endforeach

	</table>

	<a href="/find/{{$table}}" class="apply-update__btn">Найти</a>

</div>

@include ('footer')