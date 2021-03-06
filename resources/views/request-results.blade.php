@include('header')
@include('sidebar-search')

{{-- Страница результатов запроса к бд --}}
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
		</tr>
		@endforeach

	</table>
</div>

@include('footer')