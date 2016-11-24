{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name') !!}
	<br>
	{!! Form::label('phone', 'Teléfono') !!}
	{!! Form::text('phone') !!}
	<br>
	{!! Form::label('email', 'Email') !!}
	{!! Form::text('email') !!}
	<br>
	{!! Form::label('group_id', 'Grupo') !!}
	{!! Form::select('group_id', $groups) !!}
	<br>
{!! Form::submit('Guardar') !!}
