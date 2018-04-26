@extends('layouts.sp-app')



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
    Edit Service
  </div>

<div class="panel-body">
  <form class="" action="{{route('sp.services.update',['id' => $service->id]) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<div class="form-group">
  <label for="name">Bussiness name</label>
  <input type="text" name="name" class="form-control" value="{{$service->name}}">
</div>

<div class="form-group">
  <label for="address">Bussiness address</label>
  <input type="text" name="address" class="form-control" value="{{$service->address}}">
</div>

<div class="form-group">
  <label for="city">City</label>
  <input type="text" name="city" class="form-control" value="{{$service->city}}">
</div>

<div class="form-group">
  <label for="State">State</label>
  <input type="text" name="state" class="form-control" value="{{$service->state}}">
</div>

<div class="form-group">
  <label for="zipcode">Zip Code</label>
  <input type="text" name="zipcode" pattern= "[0-9]{5}" class="form-control" value="{{$service->zipcode}}">
</div>

<div class="form-group">
  <label for="featured">Featured Image</label>
  <input type="file" name="featured" class="form-control">
</div>

<!-- <div class="form-group">
  <label for="Category">Provided Services</label>
  <select name="category_id" id="category" class="form-control">

    @foreach ( $categories as $category )

    <option value=" {{ $category->id }}">{{ $category->name}}</option>

    @endforeach
  </select>

</div> -->

<div class="form-group">
    <label for="Category">Provided Services</label>
  @foreach($categories as $category)
  <div class="checkbox">
    <label><input type="checkbox" name="category_id[]" value="{{$category->id}}">
      {{$category->name}}
      @foreach($service->categories as $t)
        @if($category->id == $t->id)
          checked
        @endif
        @endforeach
      </label>
  </div>
  @endforeach
</div>

<div class="form-group">
    <label for="workingday">workingdays</label>
  @foreach($workingday as $workingday)
  <div class="checkbox">
    <label><input type="checkbox" name="workingday[]" value="{{$workingday->id}}"

    @foreach($service->workingdays as $t)
    @if($workingday->id == $t->id)
    checked
    @endif
    @endforeach
    >
  {{$workingday->name}}</label>
  </div>
  @endforeach
</div>


<div class="form-group">
  <label for="content">Additional Information</label>
<textarea name="content" id="content" rows="5" cols="5" class="form-control">{{$service->content }}</textarea>
  </div>

<div class="form-group">
  <div class="text-center">
    <button type="submit" class="btn btn-success btn-block" name="button">Update Service</button>

  </div>

</div>

  </form>

</div>



</div>

@stop
