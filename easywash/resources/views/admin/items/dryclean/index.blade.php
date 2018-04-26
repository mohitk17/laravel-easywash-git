@extends('layouts.admin-app')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    Dry cleaning items
  </div>
  <table class="table table-hover">
    <thead>
        <th> name</th>
        <th>Editing</th>
        <th>Deleting</th>
    </thead>

    <tbody>
      @if($drycleaning->count()>0)
      @foreach($drycleaning as $drycleaning)
      <tr>
        <td>{{$drycleaning->name}}</td>
        <td>
            <a href="{{ route('admin.items.dryclean.edit', ['id' => $drycleaning->id ] ) }}" class="btn btn-xs btn-info">Edit</a>
        </td>
        <td>
            <a href="{{ route('admin.items.dryclean.delete', ['id' => $drycleaning->id ] ) }}" class="btn btn-xs btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach

      @else
        <tr>
          <th colspan="5" class="text-center">No drycleaning item yet</th>
        </tr>
      @endif
    </tbody>
  </table>
</div>
@stop
