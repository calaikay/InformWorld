@extends('layouts.mainlayout')
@section('title')


@stop
@section('content')

			 <div class="card">
<div class="table-responsive">
    <table class="table product-table">
        <!--Table head-->
        <thead>
            <tr>
                <th>Image</th>
                <th>Date</th>
                <th>Time</th>
                <th>Nearest Place</th>
                <th>Landslide Type</th>
                <th>Trigger</th>
                <th>Location Description </th>
                <th>Accuracy</th>
            </tr>
        </thead>
        <!--/Table head-->

        <!--Table body-->
        <tbody>
            <tr>
                <td>
                <div class="view overlay hm-red-strong">
                    <a href="/photo/{{$lll->id}}" class="img-responsive"><img src="/uploads/{{$lll->photo}}" width="100px" alt="" class="img-fluid center-block thumbnail"></a>
                     <div class="mask flex-center">
                        <a href="/photo/{{$lll->id}}" class="white-text">Click to view more</a>
                    </div>
                    </div>
                </td>
                 <td>{{$lll->date}}</td>
                  <td>{{$lll->time}}</td>
                  <td>{{$lll->nearest_places }}</td>
                  <td>{{$lll->landslide_type }}</td>
                  <td>{{$lll->reason}}</td>
                  <td>{{$lll->description}}</td>
                  <td>{{$lll->accuracy}}</td>
            </tr>
        </tbody>
        <!--/Table body-->
    </table>
</div>
			</div>


@stop