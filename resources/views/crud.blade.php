@include('header')

<div class="content">
	<table class="table">
		<tr class="string">
			@foreach($res[0] as $key=>$value)
			<th class="cell">{{$key}}</th>
			@endforeach
		</tr>
		@foreach($res as $string)
		<tr class="string">
			@foreach($string as $value)
			<td class="cell">{{$value}}</td>
			@endforeach
			<td class="cell"><a href="" class="change">Изменить</a></td>
			<td class="cell"><a href="" class="change">Удалить</a></td>
		</tr>
		@endforeach

	</table>

</div>

@include('footer')