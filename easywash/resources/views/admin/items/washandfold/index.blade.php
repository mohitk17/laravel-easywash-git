@extends('layouts.admin-app')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    Washandfold item
  </div>
  <table class="table table-hover">
    <thead>
        <th> name</th>
        <th>Editing</th>
        <th>Deleting</th>
    </thead>

    <tbody>
      @if($washandfold->count()>0)
      @foreach($washandfold as $washandfold)
      <tr>
        <td>{{$washandfold->name}}</td>
        <td>
            <a href="{{ route('admin.items.washandfold.edit', ['id' => $washandfold->id ] ) }}" class="btn btn-xs btn-info">Edit</a>
        </td>
        <td>
            <a href="{{ route('admin.items.washandfold.delete', ['id' => $washandfold->id ] ) }}" class="btn btn-xs btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach

      @else
        <tr>
          <th colspan="5" class="text-center">No Washandfold items yet</th>
        </tr>
      @endif
    </tbody>
  </table>
</div>
@stop
