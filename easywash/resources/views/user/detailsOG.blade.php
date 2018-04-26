@extends('layouts.app')
@section('content')



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/datepicker.css" rel="stylesheet" id="bootstrap-css">
    <script type="text/javascript" src="js/jquery.min.js">  </script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js">  </script>
    <style type="text/css">
            #datepicker{
              width: 180px; margin: 0px 20px 20px 20px;
              }
            #datepicker > span:hover{
              cursor: pointer;
              }
    </style>
  </head>

  <body>

    @foreach( $services as $service )
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Book an appointment</div>
                    <div class="panel-body">

<form class="" action="{{route('user.home.details',['id' => $service->sp_id , 'service_id' => $service->id]) }}" method="post">

  {{ csrf_field() }}

<div class="form-group">
  <table>
  <tr>
    <td>Pickup Day: </td><td>  <div class="input-group date" data-date-start-date="+1d" id="datepicker" date-date-format="mm-dd-yyyy">
        <input type="date" name="dos" value="dos">
      </div></td>
  </tr>
  <tr>
    <button type="submit" class="btn btn-success" name="button">Schedule</button>
  </tr>
  </table>
</div>
</form>
</div>
                </div>
            </div>
        </div>
    </div>
      @endforeach



    @foreach( $services as $service )
    <table class="table table-hovern table-bordered">
      <thead>
          <th>image</th>
          <th>Business name</th>
          <th>Business Address</th>
          <th>Sp_id</th>
          <th>View</th>

      </thead>
      <tbody>
    <tr>
      <td><img src="{{$service->featured}}" alt="Logo" width="100px" height="100px">
        </td>
      <td>{{$service->name}}</td>
        <td>{{$service->address}} {{$service->city}}<br> {{$service->state}}.{{$service->zipcode}}.</td>
        <td>{{$service->sp_id}}</td>


    </tr>
    </tbody>

    </table>
    @endforeach


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Price table</div>
                      @foreach($prices as $price)
                        <table class="table table-hovern table-bordered">
                          <thead><th>Service</th><th>Price</th></thead>
                          <tbody>
                          <tr><td>Price laundry</td><td>{{$price->price_laundry}}</td></tr>
                          </tbody>
                        </table>
                      @endforeach
                    </div>
              </div>
          </div>
     </div>

<script type="text/javascript">


$(function

$("#datepicker").datepicker(
  {
  autoclose: true,
  startDate: '-0d',
  todayHighlight: true,
 minDate: new Date()
  }
).datepicker('update', new Date());
});




</script>


   </body>
 </html>
  @endsection
