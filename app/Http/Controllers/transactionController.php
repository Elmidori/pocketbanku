<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaction;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;

class transactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {
        $transactions= transaction::all();
        return view('transactions.index')->with('transactions',$transactions);
    }
    public function index2()
    {
        $transactions= transaction::all();
        return view('transactions.index2')->with('transactions',$transactions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaction = new transaction;
        $transaction->title = $request->input('libelle');
        $transaction->montantt = $request->input('montant');
        $transaction->DEST = $request->input('beneficiaire');
        $transaction->SRC = auth()->user()->id;
        $transaction->SoldeR = auth()->user()->solde -  $transaction->montantt;
        $transaction->save();
        
        $src=Auth::user();
        $src->solde -= $transaction->montantt;
        $src->save();

        DB::table('users')
            ->where('id', $transaction->DEST )
            ->increment('solde', $transaction->montantt);


        return redirect('/home');
    }

    public function deposit(Request $request){
       
        $transaction = new transaction;
        $transaction->title = "Depot";
        $transaction->DEST = $request->input('beneficiaire');
        $transaction->SRC = NULL;
        $transaction->montantt = $request->input('montant'); 
        DB::table('users')
            ->where('id', $transaction->DEST )
            ->increment('solde', $transaction->montantt);
        $transaction->SoldeR = DB::table('users')->where('id', $transaction->DEST)->value('solde');
                                    
        $transaction->save();

        return redirect('/home');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
