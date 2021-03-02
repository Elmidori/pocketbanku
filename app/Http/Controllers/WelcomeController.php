<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaction;
use Auth;

class WelcomeController extends Controller
{
    public function index()
	{
		return view('index');
	}

	public function home(){
		$transactions= transaction::all();
        return view('pages.home')->with('transactions',$transactions);
	}
	public function virement(){
		return view('pages.virement');
	}
	public function login(){
		return view('login');
	}
	public function register(){
		return view('register');
	}
	public function deposer(){
		if (Auth::user()->lvl == 0){
		return view('pages.deposer');}
		else{
			return redirect('/home');
		}
	}
	public function transactions(){
		if (Auth::user()->lvl == 0){
			$transactions= transaction::all();
		return view('pages.transactions')->with('transactions',$transactions);}
		else{
			return redirect('/home');
		}
	}
	

}
