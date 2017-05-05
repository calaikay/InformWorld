@if(count($errors) >0)
<div class="alert alert-danger text-center">
    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
      	@foreach ($errors->all() as $error)
                    <h5>{{$error}}</h5>
                @endforeach
        </div>
@endif

@if(Session('message'))
<div class="alert alert-success text-center">
    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
        {{ session('message') }}
        </div>
        @elseif(Session('wrong'))
        <div class="alert alert-danger text-center">
    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
        {{ session('wrong') }}
        </div>
@endif

