@extends('layouts.master')

@section('content')
	<h1>Estás seguro de eliminar a {{ $contact->name }} ?</h1>

	<a href="{{ route('contacts.show', $contact) }}"><button>Cancelar</button></a>
	{!! Form::open(['route' => ['contacts.destroy', $contact], 'method' => 'DELETE']) !!}
		{!! Form::submit('Eliminar') !!}
	{!! Form::close() !!}
@stop
