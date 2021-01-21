@include ('header')

@php
$table1=session()->get('current_table');
@endphp


<table class="change-table">

	<tr class="change-table__string">
		<th class="change-table__cell">Столбец</th>
		<th class="change-table__cell">Значение</th>
	</tr>



	@foreach ($table1[0] as $key=>$value)
	<tr class="change-table__string">
		<td class="change-table__cell">{{$key}}</td>
		<td class="change-table__cell"><input class="change-data" type="text" name="{{$key}}" value="{{$value}}"></td>
	</tr>
	@endforeach

</table>

<a href="/update/{{$table}}-{{$string}}" class="apply-update__btn">Изменить</a>

@include ('footer')