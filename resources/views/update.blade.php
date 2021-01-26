@include ('header')
@include('sidebar-crud')

{{-- Форма изменения строки --}}
<div class="content">
	<table class="table">

	    {{-- Шапка формы --}}
		<tr class="table__string">
			<th class="cell">Столбец</th>
			<th class="cell">Значение</th>
		</tr>

        {{-- Строки формы --}}
		@foreach ($string[0] as $key=>$value)

		@if($loop->iteration==1)

		@php
		$string_id=$value;
		@endphp
		
		@endif
		<tr class="table__string">
			<td class="cell">{{$key}}</td>
			<td class="cell"><input class="change-data" type="text" name="{{$key}}" value="{{$value}}"></td>
		</tr>
		@endforeach

	</table>

	<a href="/update/{{$table}}-{{$string_id}}" class="apply-update__btn">Изменить</a>

</div>

@include ('footer')