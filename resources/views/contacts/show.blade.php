@extends('layouts.master')

@section('content')
	<h1>{{ $contact->name }}</h1>
	Grupo: <em>{{ $contact->group->name }}</em>

	<p>
		Teléfono: {{ $contact->phone }}
	</p>
	<p>
		Email: {{ $contact->email }}
	</p>
	<a href="{{ route('contacts.edit', $contact) }}">Editar</a>

	<a href="{{ route('contacts.confirm.destroy', $contact) }}">Eliminar</a>
@stop
