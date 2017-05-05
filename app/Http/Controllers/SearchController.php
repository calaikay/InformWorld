<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LandSlide;

class SearchController extends Controller
{
    public function search(Request $request){
    	$l = new LandSlide;
    	$result = $l-> where('nearest_places', 'LIKE', '%'.$request->q. '%')->
        orWhere('id', 'LIKE', '%'. $request->q.'%')->get();
        return view ('result', compact('result'));
    }
}
