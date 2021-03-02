<html>

<head>
    <title>Register | Pocketbank</title>
    <link rel="icon" href=" {{asset('img/icon.png')}}">
    <link rel="stylesheet" href="{{ asset('css\index.css') }}">

</head>
<body>
	<div class="box">
		<form class="login-form">
            <a href="/"><img src="{{asset('img/logo.png')}}" alt="logo" id="logo1"></a>
			<h1>Inscription</h1>
			<input type="text" name="prenom" placeholder="Prenom" required>
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="text" name="email" placeholder="email" required>
			<input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password" placeholder="Confirm Password" required>
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
</html>
