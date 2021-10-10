
    @if(count($transactions)>1)
    <table style="width: 90%">
    <thead style="background:lightgray;">
    <tr>
      <th>Date</th>
      <th>Libelle</th>
      <th>Source</th>
      <th>Beneficiaire</th>
      <th>Montant</th>
      <th>Solde</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($transactions->reverse() as $transaction)
            <tr>
                <td>{{$transaction->created_at}}</td>
                <td>{{$transaction->title}}</td>
                <td>{{$transaction->SRC}}</td>
                <td>{{$transaction->DEST}}</td>
                <td><b>{{$transaction->montant}}</b></td>
                <td>{{$transaction->SoldeR}}</td>
            </tr>
        @endforeach
    </tbody> 
    </table>

    
@else
    <p>no transactions</p>
@endif


