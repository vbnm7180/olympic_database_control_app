@include('sidebar-search')

{{-- Страница с результатами поиска по бд --}}
<div class="content">
	<table class="table">

		{{-- Шапка таблицы --}}
		<tr class="string">
			@foreach($res[0] as $key=>$value)
			<th class="cell">{{$key}}</th>
			@endforeach
		</tr>

		{{-- Строки таблицы --}}
		@foreach($res as $string)
		<tr class="string">

			@foreach($string as $value)
			<td class="cell">{{$value}}</td>
			@endforeach

			@php
			reset($string);
			@endphp

			<td class="cell"><a href="/change/{{$table}}-{{current($string)}}" class="change">Изменить</a></td>
			<td class="cell"><a href="/delete/{{$table}}-{{current($string)}}" class="delete">Удалить</a></td>
		</tr>
		@endforeach

	</table>

</div>