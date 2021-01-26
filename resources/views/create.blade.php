@include ('header')
@include('sidebar-crud')

{{-- Форма добавления строки --}}
<div class="content">
	<table class="table">

		{{-- Шапка формы --}}
		<tr class="table__string">
			<th class="cell">Столбец</th>
			<th class="cell">Значение</th>
		</tr>

		{{-- Строки формы --}}
		@foreach ($headers as $header)
		@if ($loop->iteration==1)
		<tr class="change-table__string">
			<td class="cell">{{$header}}</td>
			<td class="cell"><input class="change-data" type="text" name="{{$header}}" value="Это поле заполняется автоматически" disabled></td>
		</tr>
		@else
		<tr class="table__string">
			<td class="cell">{{$header}}</td>
			<td class="cell"><input class="change-data" type="text" name="{{$header}}" value=""></td>
		</tr>
		@endif

		@endforeach

	</table>

	<a href="/create/{{$table}}" class="apply-create__btn">+Добавить строку</a>
</div>

@include ('footer')