<h1>Register new user</h1>

{{ Form::open(['route' => 'register.store']) }}

{{ Form::text('username', null, ['placeholder' => 'Username']) }}

{{ Form::password('password', ['placeholder' => 'Password']) }}

{{ Form::submit('Register') }}

<a href="{{ route('home') }}">Back</a>

{{ Form::close() }}
