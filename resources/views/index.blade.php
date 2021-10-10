<html>
<head>
    <title>Pocket Bank | Homepage</title>
    
    <link rel="icon" href=" {{asset('img/icon.png')}}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    @if (Auth::guest())
        
    
    <div class="header1">
        <img src="{{asset('img/logo.png')}}" alt="logo" id="logo1">
        <ul>
            <li><a href="{{ route('login') }}">CONNEXION</a></li>
            <li><a href="{{ route('register') }}" id="sign">DEVENIR CLIENT</a></li>
        </ul>
    </div>

    <div class="hero">
        <div class="circle"></div>
        <div class="circle">
            <img src="{{asset('img/pattern.jpg')}}" alt="">
        </div>
        <img src="{{asset('img/l3awd.png')}}" alt="horse" id="horse">
        <p>LA <span id="BP">BANQUE POPULAIRE</span></p>
        <P> N'A JAMAIS ÉTÉ AUSSI POPULAIRE</P>
        <br><br><br>
        <p>Decouvrez le nouveau POCKET BANK,
            Votre banque en poche.</p>
        <a href="#" class="btn">Decouvrez maintenant</a>

    </div>
    
@else

@endif



</body>



</html>