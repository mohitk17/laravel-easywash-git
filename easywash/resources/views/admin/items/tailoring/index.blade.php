@extends('layouts.admin-app')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    tailoring items
  </div>
  <table class="table table-hover">
    <thead>
        <th> name</th>
        <th>Editing</th>
        <th>Deleting</th>
    </thead>

    <tbody>
      @if($tailoring->count()>0)
      @foreach($tailoring as $tailoring)
      <tr>
        <td>{{$tailoring->name}}</td>
        <td>
            <a href="{{ route('admin.items.tailoring.edit', ['id' => $tailoring->id ] ) }}" class="btn btn-xs btn-info">Edit</a>
        </td>
        <td>
            <a href="{{ route('admin.items.tailoring.delete', ['id' => $tailoring->id ] ) }}" class="btn btn-xs btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach

      @else
        <tr>
          <th colspan="5" class="text-center">No tailoring items yet</th>
        </tr>
      @endif
    </tbody>
  </table>
</div>
@stop
