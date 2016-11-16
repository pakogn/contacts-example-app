@extends('layouts.master')

@section('content')
	{!! Form::model($contact, ['route' => ['contacts.update', $contact], 'method' => 'PATCH']) !!}
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name') !!}
		<br>
		{!! Form::label('phone', 'Teléfono') !!}
		{!! Form::text('phone') !!}
		<br>
		{!! Form::label('email', 'Email') !!}
		{!! Form::text('email') !!}
		<br>
		{!! Form::label('group', 'Grupo') !!}
		{!! Form::text('group') !!}
		<br>
		{!! Form::submit('Actualizar') !!}
	{!! Form::close() !!}
@stop
