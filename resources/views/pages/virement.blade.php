@extends('layout.app')

@section('content')
<br>
<h1>Virement</h1>
<br><br><br>


<form action="newTransaction" method="POST" class="virement">
    <Label for="beneficiaire" >Beneficiaire</Label>
    <input type="text" placeholder="N Compte" name="beneficiaire">
    
    <Label for="libelle">Libelle</Label>
    <input type="text" placeholder="Libelle" name="libelle">

    <Label for="montant">Montant</Label>
    <input type="text" placeholder="DH TTC" name="montant">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <button type="submit">Valider</button>

</form>
<style>
        .virement {
      text-align: center;
      display: flex;
      flex-direction: column; }
      .virement *:focus {
        outline: none;}
      .virement *{
        margin-top: 10px; }
      .virement input[type="text"] {
        border-radius: 50px;
        background: #f0f0f0;
        border: solid #EAEAEA 2px;
        width: 20vw;
        padding: 10px 20px; }
      .virement button {
        margin-top: 30px;
        color: #fff;
        width: 10vw;
        align-self: center;
        background: linear-gradient(to right bottom, #f88d46, #ff7300);
        border: none;
        font-size: large;
        font-weight: 500;
        border-radius: 50px;
        padding: 10px;
        transition: ease-in 0.1s;
        cursor: pointer; }
        .virement button:hover {
          opacity: 0.8; }
    
</style>
    

@endsection