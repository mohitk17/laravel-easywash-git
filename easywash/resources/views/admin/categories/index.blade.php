@extends('layouts.admin-app')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    categories
  </div>
  <table class="table table-hover">
    <thead>
        <th>Category name</th>
        <th>Editing</th>
        <th>Deleting</th>
    </thead>

    <tbody>
      @if($categories->count()>0)
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

      @else
        <tr>
          <th colspan="5" class="text-center">No categories yet</th>
        </tr>
      @endif
    </tbody>
  </table>
</div>
@stop
