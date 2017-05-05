@extends('layouts.mainlayout')
@section('title')


@stop
@section('content')



		 @if(count($result) == 0)
        <h3><span class="glyphicon glyphicon-search"></span> <span>0 </span>results found</h3>
          @endif
          
           <h3><span class="glyphicon glyphicon-search"></span> {{(count($result))}} result(s) found</h3>
           @foreach($result as $r)
			<div class="col-md-3">
			 <div class="card hover">
            <div class="card-header danger-color white-text" style="padding:10px">
              Place
            </div>
            <div class="card-block">
                <h4 class="card-title" style="padding:10px">{{$r->nearest_places}}</h4>
                <h4 class="card-title" style="padding:10px">{{$r->date}}</h4>
                <a class="btn btn-outline-danger waves-effect btn-sm" style="border-radius:40px;text-align:center" href="/view/{{$r->id}}">View Details</a>
            </div>
        </div>
		</div>
			@endforeach
	






@stop