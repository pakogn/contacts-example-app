@extends('layouts.master')

@section('content')
	@include('errors.list')

	{!! Form::model($contact, ['route' => ['contacts.update', $contact], 'method' => 'PATCH']) !!}
		@include('contacts.form')
	{!! Form::close() !!}
@stop
