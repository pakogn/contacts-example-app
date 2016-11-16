@extends('layouts.master')

@section('content')
	<h1>{{ $contact->name }}</h1>
	Grupo: <em>{{ $contact->group }}</em>

	<p>
		Teléfono: {{ $contact->phone }}
	</p>
	<p>
		Email: {{ $contact->email }}
	</p>
	<a href="{{ route('contacts.edit', $contact) }}">Editar</a>

	{!! Form::open(['route' => ['contacts.destroy', $contact], 'method' => 'DELETE']) !!}
		{!! Form::submit('Eliminar') !!}
	{!! Form::close() !!}
@stop
