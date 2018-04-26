@extends('layouts.sp-app')

@section('content')


<div class="app-content content container-fluid">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-xs-12 mb-1">
        <h2 class="content-header-title">Create New Service</h2>
      </div>
      <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
        <div class="breadcrumb-wrapper col-xs-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Page Layouts</a>
            </li>
            <li class="breadcrumb-item active">Light Layout
            </li>
          </ol>
        </div>
      </div>
    </div>

    @if(count($errors)>0)

        @foreach($errors->all() as $error)
            <p class="alert alert-danger alert-dismissible fade in mb-2" >
                  {{ $error }}
            </p>
        @endforeach

    @endif

    @if(session('success'))
    <p class="alert alert-success alert-dismissible fade in mb-2">{{session('success')}}</p>
@endif

    <div class="content-body"><!-- Description -->
<section id="description" class="card">
<div class="card-header">
    <h4 class="card-title">Description</h4>
</div>
<div class="card-body collapse in">
    <div class="card-block">
        <div class="card-text">
            <p>The light layout has a light color navbar, navigation menu and footer. In this page you can experience it. If you want to create a light version template you can use this layout.</p>
        </div>
    </div>
</div>
</section>
<!--/ Description -->
<!-- CSS Classes -->
    <div class="row match-height">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-form-center">Create New Service</h4>
            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                <li><a data-action="close"><i class="icon-cross2"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-body collapse in">
            <div class="card-block">

              <div class="card-text">
                <p>This example shows a way to center your form in the card. Here we have used <code>col-md-6 offset-md-3</code> classes to center the form in a full width card. User can always change those classes according to width and offset requirements. This example also uses form action buttons in the center bottom position of the card.</p>
              </div>

              <form class="form" action="{{route('sp.service.store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-6 offset-md-3">
                    <div class="form-body">

                      <div class="form-group">
                        <label for="name">Bussiness name</label>
                        <input type="text" id="eventInput1" class="form-control" placeholder="Bussiness name" name="name">
                      </div>

                      <div class="form-group">
                        <label for="address">Bussiness address</label>
                        <input type="text" id="eventInput2" class="form-control" placeholder="Bussiness address" name="address">
                      </div>

                      <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" id="eventInput3" class="form-control" placeholder="City" name="city">
                      </div>

                      <div class="form-group">
                        <label for="State">State</label>
                        <input type="text" id="eventInput3" class="form-control" placeholder="State" name="state">
                      </div>

                      <div class="form-group">
                        <label for="zipcode">Zip Code</label>
                        <input type="text" id="eventInput3" class="form-control" pattern= "[0-9]{5}" placeholder="Zip Code" name="zipcode">
                      </div>

                      <div class="form-group">
                        <label for="featured">Featured Image</label>
                        <input type="file" id="eventInput4" class="form-control" placeholder="Logo" name="featured">
                      </div>

                      <div class="form-group">
                        <label for="Category_id">Provided Services</label>
                          @foreach($categories as $category)
                        <div class="input-group">
                          <label class="display-inline-block custom-control custom-radio ml-1">
                            <input type="checkbox" name="category_id[]" value="{{$category->id}}" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description ml-0">{{$category->name}}</span>
                          </label>
                        </div>
                          @endforeach
                      </div>

                      <div class="form-group">
                        <label for="workingday">Working days</label>
                          @foreach($workingday as $workingday)
                        <div class="input-group">
                          <label class="display-inline-block custom-control custom-radio ml-1">
                            <input type="checkbox" name="workingday[]" value="{{$workingday->id}}" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description ml-0">{{$workingday->name}}</span>
                          </label>
                        </div>
                          @endforeach
                      </div>

                        <div class="form-group">
                          <label for="content">Additional Information</label>
                          <textarea rows="5" cols="5" id="eventInput4" class="form-control" placeholder="Additional Information" name="content"></textarea>
                        </div>



                    </div>
                  </div>
                </div>

                <div class="form-actions center">
                  <!-- <button type="button" class="btn btn-warning mr-1">
                    <i class="icon-cross2"></i> Cancel
                  </button> -->
                  <button type="submit" class="btn btn-primary">
                    <i class="icon-check2"></i> Create Service
                  </button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->


<footer class="footer footer-static footer-light navbar-border">
  <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="{{ asset( 'app/app-assets/js/core/libraries/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset( 'app/app-assets/vendors/js/ui/tether.min.js')}}" type="text/javascript"></script>
<script src="{{ asset( 'app/app-assets/js/core/libraries/bootstrap.min.js')}}" type="text/javascript"></script>


<script src="{{ asset( 'app/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset( 'app/app-assets/vendors/js/ui/unison.min.js')}}" type="text/javascript"></script>
<script src="{{ asset( 'app/app-assets/vendors/js/ui/blockUI.min.js')}}" type="text/javascript"></script>
<script src="{{ asset( 'app/app-assets/vendors/js/ui/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
<script src="{{ asset( 'app/app-assets/vendors/js/ui/screenfull.min.js')}}" type="text/javascript"></script>
<script src="{{ asset( 'app/app-assets/vendors/js/extensions/pace.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script type="text/javascript" src="{{ asset( 'app/app-assets/vendors/js/ui/prism.min.js')}}"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="{{ asset( 'app/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{ asset( 'app/app-assets/js/core/app.js')}}" type="text/javascript"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
</body>
</html>

@endsection
