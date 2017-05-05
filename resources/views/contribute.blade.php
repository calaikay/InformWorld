@extends('layouts.master')
@section('title')
 Contribute
@stop
@section('content')
   <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Project LanDron</a>
        </div>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
         <li><a href="/dashboard"><span class="glyphicon glyphicon-home"></span> Home</a></li>
             <li><a href="/discover"><span class="glyphicon glyphicon-repeat"></span> Discover</a></li>
              <li><a href="/understand"><span class="glyphicon glyphicon-question-sign"></span> Understand</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Contribute</a></li>
                 
        <form class="navbar-form navbar-left" action="search">
        {{ csrf_field()}}
              <div class="form-group">
              <span class="glyphicon glyphicon-search" style="color:#fff"></span>
                <input type="text" class="form-control" style="color:#fff" name="q" placeholder="Search">
              </div>
    </form>

          </ul>

          <ul class="nav navbar-nav navbar-right">
          
              <li class="dropdown">
                <a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
              </li>
          </ul>
        </div>
      </div>
    </div>       
        
          <div class="col-md-8">
            @include('includes.message')
          <div class="card" style="padding:20px">
             <form method="POST" action="/contribute/{{$aaa->id}}" enctype="multipart/form-data" style="margin-top:-30px">
                {{csrf_field()}}
                 <div class="md-form">
                    <div class="col-md-12"> 
                    <input type="date" id="form1" name="date" class="form-control" required>
                    <label style="margin-top:-20px;margin-left:20px;"> Date</label>
                    </div>
                </div>
                <div class="md-form">
                    <div class="col-md-12"> 
                    <input type="text" name="time" id="form1" placeholder="Enter time here" class="form-control" required>
                    </div>
                </div>
                <div class="md-form">
                    <div class="col-md-12"> 
                    <input type="text" name="place" id="form1" placeholder="Enter nearest place here" class="form-control" required>
                    </div>
                </div>
                <div class="md-form">
                    <div class="col-md-12">
                    <select name="landslide_type" required>
                        <option value="" disabled selected>Choose Landslide type here</option>
                        <option>Slide</option>
                        <option>Creep</option>
                        <option>Slump</option>
                        <option>Toople</option>
                        <option>Fall</option>
                        <option>Torrent</option>
                    </select>
                    </div>
                </div>
                 <div class="md-form">
                    <div class="col-md-12"> 
                    <input type="text" name="reason" id="form1" placeholder="Enter trigger here" class="form-control" required>
                    </div>
                </div>

                <div class="md-form">
                  <div class="col-md-12"> 
                    <input type="text" name="description" id="form1" placeholder="Enter location description here" class="form-control" >
                    </div>
                </div>

                    <div class="md-form">
                    <div class="col-md-12"> 
                    <input type="text" name="accuracy" id="form1" placeholder="Enter accuracy here" class="form-control" required>
                    </div>
                </div>

                 <div class="md-form">
                    <div class="col-md-12"> 
                    <label class="label" style="margin-top:-25px">Upload sample photo</label>
                    <input type="file"  style="padding:10px" name="photo" id="photo" required>
                    </div>
                </div>

                <button class="btn btn-danger" type="submit">Add</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </form>
          </div>
          <div class="col-md-1">
          
          </div>
          </div>
        </div>

     @stop