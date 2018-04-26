
@extends('layouts.sp-app')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    Published Services
  </div>
  <table class="table table-hover">
    <thead>
        <th>image</th>
        <th>Business name</th>
        <th>Business Address</th>
        <th>Sp_id</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody>
@if($services->count()>0)
      @foreach( $services as $service )

      <tr>
        <td><img src="{{$service->featured}}" alt="Logo" width="50px" height="50px">
          </td>
        <td>{{$service->name}}</td>
          <td>{{$service->address}} {{$service->city}}<br> {{$service->state}}.{{$service->zipcode}}.</td>
          <td>{{$service->sp_id}}</td>

          <td>
              <a href="{{ route('sp.services.edit', ['id' => $service->id])}}" class="btn btn-xs btn-info">Edit</a>
          </td>
          <td>
              <a href="{{ route('sp.service.delete', ['id' => $service->id])}}" class="btn btn-xs btn-danger">Trash</a>
          </td>
      </tr>


      @endforeach

      @else
        <tr>
          <th colspan="5" class="text-center">No Published Services</th>
        </tr>
      @endif

    </tbody>

  </table>

</div>

@stop
