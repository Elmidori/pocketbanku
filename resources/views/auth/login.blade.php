

<html>

<head>
    <title>Login | Pocketbank</title>
    <link rel="icon" href=" {{asset('img/icon.png')}}">
    <link rel="stylesheet" href="{{ asset('css\index.css') }}">

</head>
<body>
	<div class="box">
		<form class="login-form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <a href="/"><img src="{{asset('img/logo.png')}}" alt="logo" id="logo1"></a>
			<h1>Login</h1>
            <div style="width:90%;" class="{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input style = "width:100%;" id="email" type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>
            <div style="width:90%;" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input style="width:100%;" id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
			<input type="submit" name="Login" value="Login">
			<div class="links">
				<a href="{{ route('password.request') }}">Password oublie </a>
				<a href="{{ route('register') }}">Inscription</a>
			</div>
			</button>
		</form>
		
	</div>
</body>
</html>
