@include ('header')
@include('sidebar-crud')

<div class="content">
	<table class="change-table">

		<tr class="change-table__string">
			<th class="change-table__cell">Столбец</th>
			<th class="change-table__cell">Значение</th>
		</tr>

		@foreach ($string[0] as $key=>$value)
		@if($loop->iteration==1)
		@php
		$string_id=$value;
		@endphp
		@endif
		<tr class="change-table__string">
			<td class="change-table__cell">{{$key}}</td>
			<td class="change-table__cell"><input class="change-data" type="text" name="{{$key}}" value="{{$value}}"></td>
		</tr>
		@endforeach

	</table>

	<a href="/update/{{$table}}-{{$string_id}}" class="apply-update__btn">Изменить</a>

</div>

@include ('footer')