@include ('header')
@include('sidebar-crud')

@php
$table1=session()->get('current_table');
@endphp

<div class="content">
	<table class="change-table">

		<tr class="change-table__string">
			<th class="change-table__cell">Столбец</th>
			<th class="change-table__cell">Значение</th>
		</tr>



		@foreach ($table1[0] as $key=>$value)
		@if ($loop->iteration==1)
		<tr class="change-table__string">
			<td class="change-table__cell">{{$key}}</td>
			<td class="change-table__cell"><input class="change-data" type="text" name="{{$key}}" value="Это поле заполняется автоматически" disabled></td>
		</tr>
		@else
		<tr class="change-table__string">
			<td class="change-table__cell">{{$key}}</td>
			<td class="change-table__cell"><input class="change-data" type="text" name="{{$key}}" value=""></td>
		</tr>
		@endif


		@endforeach

	</table>

	<a href="/create/{{$table}}" class="apply-create__btn">Добавить строку</a>
</div>

@include ('footer')