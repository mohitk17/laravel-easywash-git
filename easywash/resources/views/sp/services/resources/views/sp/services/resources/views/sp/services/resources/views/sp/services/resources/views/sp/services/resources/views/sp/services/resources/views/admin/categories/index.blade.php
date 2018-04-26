@extends('layouts.admin-app')

@section('content')

<div class="panel panel-default">
  <table class="table table-hover">
    <thead>
        <th>Category name</th>
        <th>Editing</th>
        <th>Deleting</th>
    </thead>

    <tbody>
      @foreach($categories as $category)
      <tr>
        <td>{{$category->name}}</td>
        <td>
            <a href="{{ route('admin.categories.edit', ['id' => $category->id ] ) }}" class="btn btn-xs btn-info">Edit</a>
        </td>
        <td>
            <a href="{{ route('admin.categories.delete', ['id' => $category->id ] ) }}" class="btn btn-xs btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop
