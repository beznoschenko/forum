@extends('employee.layout')

@section('title')
Станицы с {{$id}} не существует!
@endsection

@section('header')
Извините, страница с {{$id}} не найдена!
@endsection

@section('content')
			<div class="text">
				Извините, страницы с {{$id}} не существует!
			</div>
@endsection