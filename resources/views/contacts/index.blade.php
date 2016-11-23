@extends('layouts.master')

@section('content')
	@include('partials.banner')

	<h1>Contactos</h1>

	<ul>
		@foreach ($contacts as $contact)
			<li><a href="{{ route('contacts.show', $contact) }}">{{ $contact->name }}</a></li>
		@endforeach
	</ul>

	{!! $contacts->render() !!}
@stop
