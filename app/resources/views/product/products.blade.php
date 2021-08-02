@extends('employee.layout')


@section('content')
<div class="post">
	<h2>{{$product['name']}}</h2></a>
	<div class="info">
		<span class="date">{{$product['cost']}}</span>
		<span class="author">@if ($product['inStock'])
	    Есть в наличии
        @else
        Нет в наличии
        @endif</span>
	</div>
	<div class="text">
		{{$product['desc']}}
	</div>
	<div class="more">
            <a href="./">{{$category['name']}}</a>
        </div>
</div>

@endsection