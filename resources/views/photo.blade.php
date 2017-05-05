@extends('layouts.mainlayout')
@section('title')


@stop
@section('content')
      
			 <div class="card">
        <div class="card-header danger-color white-text" style="padding:10px">
                Photo
            </div>
            <div class="card-block">
			   <img class="img-responsive center-block" style="margin:0 auto;padding:10px;width:500px" src="/uploads/{{$photo->photo}}">
         </div>
			</div>


@stop