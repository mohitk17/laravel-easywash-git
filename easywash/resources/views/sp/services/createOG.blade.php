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
    Create new Service
  </div>

<div class="panel-body">
  <form class="" action="{{route('sp.service.store')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<div class="form-group">
  <label for="name">Bussiness name</label>
  <input type="text" name="name" class="form-control">
</div>

<div class="form-group">
  <label for="address">Bussiness address</label>
  <input type="text" name="address" class="form-control">
</div>

<div class="form-group">
  <label for="city">City</label>
  <input type="text" name="city" class="form-control">
</div>

<div class="form-group">
  <label for="State">State</label>
  <input type="text" name="state" class="form-control">
</div>

<div class="form-group">
  <label for="zipcode">Zip Code</label>
  <input type="text" name="zipcode" pattern= "[0-9]{5}" class="form-control">
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
    <label for="Category_id">Provided Services</label>
  @foreach($categories as $category)

  <div class="checkbox">
    <label><input type="checkbox" name="category_id[]" value="{{$category->id}}">{{$category->name}}</label>
  </div>
  @endforeach
</div>

<div class="form-group">
    <label for="workingday">workingdays</label>
  @foreach($workingday as $workingday)

  <div class="checkbox">
    <label><input type="checkbox" name="workingday[]" value="{{$workingday->id}}">{{$workingday->name}}</label>
  </div>
  @endforeach
</div>
<!-- <select multiple="multiple" name="category_id[]" id="category">
@foreach( $categories as $category)
        <option value=" {{ $category->id }}">{{ $category->name}}</option>
@endforeach
</select>
 -->

<div class="form-group">
  <label for="content">Additional Information</label>
<textarea name="content" id="content" rows="5" cols="5" class="form-control"></textarea>
  </div>

<div class="form-group">
  <div class="text-center">
    <button type="submit" class="btn btn-success btn-block" name="button">Create Service</button>

  </div>

</div>

  </form>

</div>



</div>

@stop

@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@stop

@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<!-- <script>

    $(document).ready(function() {
        $('#content').summernote();
    });
  </script> -->
</script>

@stop
