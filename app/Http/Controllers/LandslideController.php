<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LandSlide;

class LandslideController extends Controller
{
    public function add(Request $r){
    	$landslide = new LandSlide;
        $landslide->name = $r->fullname;
    	$landslide->date = $r->date;
    	$landslide->time = $r->time;
    	$landslide->nearest_places = $r->place;
    	$landslide->landslide_type = $r->landslide_type;
    	$landslide->reason = $r->reason;
    	$landslide->description = $r->description;
    	$landslide->accuracy = $r->accuracy;
        $file = $r->file('photo')->store('/images');
    	$landslide->photo = $file; 
        $landslide->user_id = 1;
         $landslide->save();
    	return redirect()->back()->with('message','Successfully Added');
    }


    public function view ($id)
    {
    	$l = new LandSlide;
    	$lll = $l->where('id', $id)->first();
    	return view ('details', compact('lll'));
    }
}
