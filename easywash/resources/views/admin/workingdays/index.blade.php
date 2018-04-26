@extends('layouts.admin-app')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    workingday routes
  </div>
  <table class="table table-hover">
    <thead>
        <th> name</th>
        <th>Editing</th>
        <th>Deleting</th>
    </thead>

    <tbody>
      @if($workingdays->count()>0)
      @foreach($workingdays as $workingday)
      <tr>
        <td>{{$workingday->name}}</td>
        <td>
            <a href="{{ route('admin.workingdays.edit', ['id' => $workingday->id ] ) }}" class="btn btn-xs btn-info">Edit</a>
        </td>
        <td>
            <a href="{{ route('admin.workingdays.delete', ['id' => $workingday->id ] ) }}" class="btn btn-xs btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach

      @else
        <tr>
          <th colspan="5" class="text-center">No workingday routes yet</th>
        </tr>
      @endif
    </tbody>
  </table>
</div>
@stop
