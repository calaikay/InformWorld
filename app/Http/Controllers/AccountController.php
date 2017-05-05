<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    public function createAccount(Request $request){
    	  $this->validate( $request, [
                'email' => 'required|email|unique:accounts',
                'fullname' => 'required|max:120',  
                'password' => 'required|min:4'
            ]);

    	$fullname = $request->fullname;
    	$email = $request->email;
    	$password = $request->password;
    	$repassword = $request->repassword;
    	$a = new Account;
    	$a->fullname = $fullname;
    	$a->email = $email;
    	$a->password = $password;
    	if ($password == $repassword){
    		$a->save();
    		return redirect('login')->with('message', 'You can now login');
    	}else{
    		return back()->with('wrong', 'The username or password doesnt match');
    	}

    }
}
