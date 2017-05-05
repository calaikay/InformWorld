@extends('layouts.mainlayout')
@section('title')
    Home
@stop
@section('welcome')
    @include('includes.message')
          <div class="card">
            <div class="card-header danger-color white-text" style="padding:10px">
                Places
            </div>
            
             @foreach($landslide as $l)
             <div class="card col-sm-3">
            <div class="card-block hover">
                <h4 class="card-title" style="padding:10px;text-align:center">{{$l->nearest_places}}</h4>
                <h5 class="tex-center" style="padding:10px;text-align:center">{{$l->date}}</h4>
                 <h5 class="tex-center" style="padding:10px;text-align:center">Posted by: <strong>{{$l->name}}</strong></h4>
                 <div class="text-center">
                <a class="btn btn-outline-danger waves-effect btn-sm" style="border-radius:40px;text-align:center" href="/view/{{$l->id}}">View Details</a>
                </div>
            </div>
            </div>
            @endforeach
        </div>


        




@stop