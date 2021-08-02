@extends('employee.layout')
@section('content')
		<div class="info">
	<span class="date">{{ $data['date']}}</span>
	<span class="author">{{$data['author']}}</span>
</div>
<div class="text">
	{{$data['text']}}
</div>
@endsection