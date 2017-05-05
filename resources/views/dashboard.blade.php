<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>

        <link rel="stylesheet" href="/mains/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/mains/css/ourbootstrap.css">
        <link rel="stylesheet" href="/mains/css/sticky-footer.css">
        <link rel="stylesheet" href="/mains/css/custom.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/mains/css/mdb.css">
        <script src="/mains/js/custom.js"></script>
        <script src="/mains/js/jquery.min.js"></script> 
        <script src="/mains/js/bootstrap.min.js"></script>
        <script src="/mains/js/validator.min.js"></script>
        <script src="/mains/js/actions.js"></script>
        <script type="text/javascript" src="/mains/js/weather.js"></script>
    
    </head>
    <body style="margin-top:80px">
 
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">InformWorld</a>
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

    @include('layouts.modals.contribute')
    @include('layouts.modals.register')
      

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="card">
            <div class="card-header default-color-dark white-text" style="padding:10px">
              Get Current Weather <i class="fa fa-sun-o" aria-hidden="true"></i> <i class="fa fa-bolt" aria-hidden="true"></i>
            </div>
            <div class="card-block" style="padding:10px;">
              <span id="error" class="text-danger"></span>
                <input type="text" name="city" id="city"  style="width:100%" placeholder="Enter City Name here">
                <div class="text-center">
                <button id="submitWeather"  class="btn btn-outline-default waves-effect" style="border-radius:40px">Search </button>
                </div>
            </div>
            <p id="show" style="padding:10px"></p>
          </div>
          </div>
          <div class="col-md-8">
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
          </div>
          <div class="col-md-1">
           
          </div>
          </div>
        </div>

       <script src="/mains/js/mdb.min.js"></script>
        <script src="/mains/js/jquery.min.js"></script> 
        <script src="/mains/js/bootstrap.min.js"></script>
       <script type="text/javascript" src="/mains/js/tether.min.js"></script>
        <script src="/mains/js/jquery.min.js"></script>
        <script type="text/javascript" src="/mains/js/tether.min.js"></script>
         <script src="/mains/js/jquery.bootstrap-autohidingnavbar.min.js"></script>
         <script type="text/javascript" src="/mains/js/weather.js"></script>
    
    <footer class="footer">
    Contact Us || About Us
</footer>
    </body>
</html>
