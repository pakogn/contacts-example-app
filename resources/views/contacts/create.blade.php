@extends('layouts.master')

@section('content')
	@include('errors.list')

	{!! Form::open(['route' => 'contacts.store']) !!}
		@include('contacts.form')
	{!! Form::close() !!}
@stop
