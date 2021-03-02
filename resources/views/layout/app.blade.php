<html>
<head>
    <title>Pocket Bank | {{ Auth::user()->name }}</title>
    <link rel="icon" href=" {{asset('img/icon.png')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>


<body>
    <div class="container">
        
        @include('inc.nav')

        <div class="content">
            <header class="header">
                <img src="{{ asset('img/logo.png') }}" alt="logo" class="logo">
                <p>Bienvenue, <span id="username">{{ Auth::user()->name }}</span></p>
            </header>
            <main class="appview">

                @yield('content')


               </main>
        </div>


    </div>
    <p class="legal">POCKET BANK © Copyright 2021 by Anass AZIZI ALAOUI. All Rights Reserved.</p>
</body>



</html>