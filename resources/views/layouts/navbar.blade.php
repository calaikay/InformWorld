 <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Project InformWorld</a>
        </div>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
         <li><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
             <li><a href="/discover"><span class="glyphicon glyphicon-repeat"></span> Discover</a></li>
              <li><a href="/understand"><span class="glyphicon glyphicon-question-sign"></span> Understand</a></li>
                <li><a href="#" data-toggle="modal" data-target="#register"><span class="glyphicon glyphicon-plus"></span> Contribute</a></li>
                 <li><a href="/login" ><i class="fa fa-sign-in" aria-hidden="true"></i> Sign in</a></li>
                <li><a href="/register"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign up</a></li>
        <form class="navbar-form navbar-left" action="search">
        {{ csrf_field()}}
              <div class="form-group">
              <span class="glyphicon glyphicon-search" style="color:#fff"></span>
                <input type="text" class="form-control" style="color:#fff" name="q" placeholder="Search">
              </div>
    </form>
          </ul>

          
        </div>
      </div>
    </div>

    @include('layouts.modals.contribute')
    @include('layouts.modals.register')