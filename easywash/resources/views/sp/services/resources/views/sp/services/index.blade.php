
@extends('layouts.sp-app')

@section('content')

<div class="panel panel-default">
  <table class="table table-hover">
    <thead>
        <th>image</th>
        <th>Business name</th>
        <th>Business Address</th>
        <th>Service Category</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>

    <tbody>

      @foreach( $services as $service )

      <tr>
        <td><img src="{{$service->featured}}" alt="LOGO" width="50px" height="50px">
          </td>
        <td>{{$service->name}}</td>
          <td>{{$service->address}} {{$service->city}}<br> {{$service->state}}.{{$service->zipcode}}.</td>
          <td>{{$service->category_id}}</td>
          <td>
              <a href="{{ route('sp.service.update', ['id' => $service->id])}}" class="btn btn-xs btn-info">Edit</a>
          </td>
          <td>
              <a href="{{ route('sp.service.delete', ['id' => $service->id])}}" class="btn btn-xs btn-danger">Trash</a>
          </td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>
@stop
