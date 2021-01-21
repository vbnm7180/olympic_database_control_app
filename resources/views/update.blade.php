@include ('header')

@php
$table=session()->get('current_table');
@endphp


<table class="change-table">

	<tr class="change-table__string">
		<th class="change-table__cell">Столбец</th>
		<th class="change-table__cell">Значение</th>
	</tr>



	@foreach ($table[0] as $key=>$value)
	<tr class="change-table__string">
		<td class="change-table__cell">{{$key}}</td>
		<td class="change-table__cell"><input type="text" name="" value="{{$value}}"></td>
	</tr>
	@endforeach

</table>

<a href="/" class="apply-update__btn">Изменить</a>

@include ('footer')