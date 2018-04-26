@extends('layouts.sp-app')

@section('content')


<div class="app-content content container-fluid">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-xs-12 mb-1">
        <h2 class="content-header-title">All Orders</h2>
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

<!-- Table head options start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Table head options</h4>
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
                <div class="card-block card-dashboard">
                    <p>Similar to default and inverse tables, use one of two modifier classes <code class="highlighter-rouge">.thead-default</code> or <code class="highlighter-rouge">.thead-inverse</code> to make <code class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.</p>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-inverse">
                            <tr>
                              <th>Order ID</th>
                              <th>Service ID</th>
                              <th>Date of Service</th>
                              <th>View</th>
                              <th>Billing</th>
                              <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if($cart->count()>0)
                            @foreach( $cart as $cart )
                            <tr>
                                <th scope="row">{{$cart->id}}</th>
                                <td>{{$cart->service_id}}</td>
                                <td>{{$cart->dos}}</td>

                                <td><a href="{{ route('sp.orders.view', ['id' => $cart->id, 'service_id'=>$cart->service_id, 'sp_id'=>$cart->sp_id])}}" class="btn btn-warning  mr-1 mb-1">View</a></td>
                                <td><a href="{{ route('sp.orders.bill', ['id' => $cart->id, 'service_id'=>$cart->service_id, 'sp_id'=>$cart->sp_id])}}" class="btn btn-danger  mr-1 mb-1">Billing</a></td>
                                <td><a  class="btn btn-info  mr-1 mb-1">Status</a></td>

                                <td></td>
                            </tr>
                            @endforeach
                            @else
                              <tr><th class="text-center">No Published Services</th></tr>
                            @endif

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Table   head options end -->

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
