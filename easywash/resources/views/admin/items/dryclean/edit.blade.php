@extends('layouts.admin-app')



@section('content')

@if(count($errors)>0)
  <ul class="list-group">
    @foreach($errors->all() as $error)
        <li class="list-group-item text-danger" >
              {{ $error }}
        </li>
    @endforeach
  </ul>
@endif

<div class="panel panel-default">

  <div class="panel-heading">
    Update dryclean items:
  </div>

<div class="panel-body">
  <form class="" action="{{route('admin.items.dryclean.update', ['id' => $drycleaning->id] ) }}" method="post">
{{ csrf_field() }}

<div class="form-group">
  <label for="name">name</label>
  <input type="text" name="name" value="{{ $drycleaning->name}}"class="form-control">
</div>


<div class="form-group">
  <div class="text-center">
    <button type="submit" class="btn btn-success btn-block" name="button">Update dryclean item</button>

  </div>

</div>

  </form>

</div>



</div>

@stop
