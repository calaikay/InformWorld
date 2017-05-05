<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

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
          @yield('content')
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
