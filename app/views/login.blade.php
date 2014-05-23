<h1>Login</h1>

{{ Form::open(['route' => 'auth']) }}

{{ Form::text('username', null, ['placeholder' => 'Username']) }}

{{ Form::password('password', ['placeholder' => 'Password']) }}

{{ Form::submit('Login') }}

<a href="{{ route('home') }}">Back</a>

{{ Form::close() }}
