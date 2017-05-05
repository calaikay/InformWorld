<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(){
    	
    	return view ('login');
    }

    public function getLogin(Request $r){
    	$this->validate($r,[
    		'email' => 'required',
    		'password' => 'required'
    		]);

    	$account  = new Account;
    	$accounts = $account->where('email', $r->email)->where('password' , $r->password)->first();

    	if ($accounts){
    		return redirect('dashboard')->with('message', 'You can now contribute');

    	}else 
    		return back()->with('wrong', 'Wrong username or Password');	
    }

     public function logout(){
       
        return redirect('/');
    }


}
