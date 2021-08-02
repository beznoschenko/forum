@extends('employee.layout')


@section('content')
@foreach ($data as $key => $product)

<div class="post">
	<a href="/product/{{$key}}">
		<h2>{{$product['name']}}</h2>
	</a>
	<div class="info">
		<span class="date">{{count($product['products'])}}</span>
	</div>

	@endforeach
	@endsection