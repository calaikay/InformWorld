<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

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
    <body style="margin-top:100px">
 
    @include('layouts.navbar')

    <div class="container-fluid">
    <div class="row" style="margin-top:10px">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        <div class="card" style="padding:10px">
             <div class="card-block">
                <!--Header-->
                <div class="form-header "  style="background-color:#E53935" >
                    <h3><i class="fa fa-lock"></i> Login:</h3>
                </div>
                @include('includes.message')
                <form action="/login" method="POST">
                {{csrf_field()}}
                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="form2"  name="email" value="{{ Request::old('email') }}" class="form-control" required>
                    <label for="form2">Your email</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="form4" name="password" class="form-control" required>
                    <label for="form4">Your password</label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-outline-danger waves-effect " style="border-radius:40px;text-align:center">Login</button>
                </div>
                </form>
            </div>

        </div>
    </div>
    <div class="col-m-3">
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