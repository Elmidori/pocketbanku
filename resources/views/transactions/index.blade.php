
    @if(count($transactions)>1)
        <table>
        <thead>
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
            @if($transaction->SRC == Auth::user()->id )
            <tr>
                <td>{{$transaction->created_at}}</td>
                <td>{{$transaction->title}}</td>
                <td>{{$transaction->SRC}}</td>
                <td>{{$transaction->DEST}}</td>
                <td><b>{{$transaction->montant}}</b></td>
                <td>{{$transaction->SoldeR}}</td>
            </tr>
                @elseif($transaction->DEST == Auth::user()->id)
                <tr>
                    <td>{{$transaction->created_at}}</td>
                    <td>{{$transaction->title}}</td>
                    <td>{{$transaction->SRC}}</td>
                    <td>{{$transaction->DEST}}</td>
                    <td><b>{{$transaction->montant}}</b></td>
                    <td></td>
                </tr>
            @endif
            @endforeach
        </tbody> 
        </table>
    
        
    @else
        <p>no transactions</p>
    @endif


   