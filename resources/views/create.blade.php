@include ('header')
@include('sidebar-crud')

{{-- Форма добавления строки --}}
<div class="content">
	<table class="change-table">

		{{-- Шапка формы --}}
		<tr class="change-table__string">
			<th class="change-table__cell">Столбец</th>
			<th class="change-table__cell">Значение</th>
		</tr>

		{{-- Строки формы --}}
		@foreach ($headers as $header)
		@if ($loop->iteration==1)
		<tr class="change-table__string">
			<td class="change-table__cell">{{$header}}</td>
			<td class="change-table__cell"><input class="change-data" type="text" name="{{$header}}" value="Это поле заполняется автоматически" disabled></td>
		</tr>
		@else
		<tr class="change-table__string">
			<td class="change-table__cell">{{$header}}</td>
			<td class="change-table__cell"><input class="change-data" type="text" name="{{$header}}" value=""></td>
		</tr>
		@endif

		@endforeach

	</table>

	<a href="/create/{{$table}}" class="apply-create__btn">Добавить строку</a>
</div>

@include ('footer')