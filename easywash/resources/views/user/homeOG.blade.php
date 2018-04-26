<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
  <body>


@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @component('components.who')
                                    @endcomponent
                    You are logged in as User!
                </div>

            </div>
        </div>
    </div>
  </div>


    @if($services->count()>0)
          @foreach( $services as $service )
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 text-center">
                          <img src="{{$service->featured}}" alt="Logo" width="100px" height="100px" class="img-rounded img-responsive" />
                        </div>
                        <div class="col-xs-9 col-md-9 section-box">
                        <h2>
                            {{$service->name}}
                            </span></a>
                        </h2>
                        <p>
                            {{$service->address}} {{$service->city}}<br> {{$service->state}}.{{$service->zipcode}}.
                        </p>
                        <hr />
                        <div class="row rating-desc">
                            <div class="col-md-12">
                                <span class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart">
                                </span><span class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart">
                                </span><span class="glyphicon glyphicon-heart"></span>(36)<span class="separator">|</span>
                                <span class="glyphicon glyphicon-comment"></span>(100 Comments)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
  @endforeach

  @else

  <h3>No Published Services</h3>

  @endif



  @if($services->count()>0)
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
            <td>
                <a href="{{ route('user.home.details', ['id' => $service->sp_id , 'service_id' => $service->id] )}}" class="btn btn-xs btn-info">View</a>
            </td>

        </tr>
      </tbody>

    </table>
        @endforeach
<table>
  <tbody>
        @else
          <tr>
            <th colspan="5" class="text-center">No Published Services</th>
          </tr>
        @endif

      </tbody>

    </table>


  </div>

  @endsection
</body>
</html>
