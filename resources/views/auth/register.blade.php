
<html>

<head>
    <title>Register | Pocketbank</title>
    <link rel="icon" href=" {{asset('img/icon.png')}}">
    <link rel="stylesheet" href="{{ asset('css\index.css') }}">

</head>
<body>
	<div class="box">
		<form class="login-form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <a href="/"><img src="{{asset('img/logo.png')}}" alt="logo" id="logo1"></a>
			<h1>Inscription</h1>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control" placeholder="Nom" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="text" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group">
                    <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
            </div>
			<input type="submit" name="Login" value="Login">
			<div class="links"  style="display: block;text-align:center;">
				<p>Deja client?</p>
				<a href="/login"
                    style="background-color: transparent;margin:-20px -10px;padding:0; color=rgb(255, 115, 0);">Log in</a>
			</div>
			</button>
		</form>
		
	</div>
</body>

<style>
    .form-group{
        width:90%;
        text-align: center;
    }
    .form-group input{
        width: 90%;
    }
</style>
</html>
