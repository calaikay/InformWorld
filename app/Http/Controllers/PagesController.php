<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Landslide;
use App\Account;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
    public function index(){
    	$l = new Landslide;
    	$landslide = $l->all();
    	return view ('welcome', compact('landslide'));
    }

    public function contribute(){

    	return view ('contribute');
    }

    public function discover(){

    	return view ('discover');
    }

    public function understand(){

    	return view ('understand');
    }

    public function register(){

        return view ('register');
    }

    public function photo($id){
        $p = new landslide;
        $photo = $p->where('id', $id)->first();
        return view ('photo', compact('photo'));
    }

    public function dashboard(){
      
        $l = new Landslide;
        $landslide = $l->all();
        return view ('dashboard', compact('landslide'));
    }
}
