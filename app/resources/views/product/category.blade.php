@extends('employee.layout')


@section('content')
@foreach ($data['products'] as $key => $product)

<div class="post">
	<a href="{{$num}}/{{$key}}"><h2>{{$product['name']}}</h2></a>
	<div class="info">
		<span class="date">{{$product['cost']}}</span>
</div>

@endforeach
@endsection