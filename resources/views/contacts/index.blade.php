@extends('layouts.master')

@section('content')
	<h1>Contactos</h1>

	<ul>
		@foreach ($contacts as $contact)
			<li>{{ $contact->name }}</li>
		@endforeach
	</ul>
@stop
