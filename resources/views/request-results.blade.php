@include('header')
@include('sidebar-search')

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

			@php
			reset($string);
			@endphp

		</tr>
		@endforeach

	</table>

</div>

@include('footer')

