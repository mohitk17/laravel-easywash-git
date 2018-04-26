
@extends('layouts.admin-app')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    Trashed Services
  </div>
  <table class="table table-hover">
    <thead>
        <th>image</th>
        <th>Business name</th>
        <th>Business Address</th>
        <th>service category</th>
        <th>Restore</th>
        <th>Delete Permanently</th>
    </thead>

    <tbody>
@if($services->count()>0)
      @foreach( $services as $service )

      <tr>
        <td><img src="{{$service->featured}}" alt="LOGO" width="50px" height="50px">
          </td>
        <td>{{$service->name}}</td>
          <td>{{$service->address}} {{$service->city}}<br> {{$service->state}}.{{$service->zipcode}}.</td>
          <td>{{$service->category_id}}</td>

          <td>
              <a href="{{ route('admin.service.restore', ['id' => $service->id])}}" class="btn btn-xs btn-success">Restore</a>
          </td>
          <td>
              <a href="{{ route('admin.service.kill', ['id' => $service->id])}}" class="btn btn-xs btn-danger">Delete</a>
          </td>
      </tr>

      @endforeach
      @else
        <tr>
          <th colspan="5" class="text-center">No trashed Services</th>
        </tr>
      @endif
    </tbody>
  </table>
</div>
@stop
