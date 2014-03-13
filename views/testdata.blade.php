@extends('layout')

@section('content')
	@foreach ($testdata as $data)
		<p>{{ $data->user_id}} {{$data->user_name}}</p><br>
	@endforeach
@stop