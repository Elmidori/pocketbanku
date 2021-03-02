@extends('layout.app')

@section('content')
<div class="balance">
    <h2>VOTRE BALANCE</h2>
    <h1>{{ Auth::user()->solde }}</h1>
    <p>DH TTC</p>
    <p>Compte: {{ Auth::user()->id }}</p>
</div>

<div class="history">
    <h2>Historique des transactions</h2>
    <br><br>
    @include('transactions.index')
    <br>
</div>
@endsection