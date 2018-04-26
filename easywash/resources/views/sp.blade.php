@extends('layouts.sp-app')

@section('content')
<div class="app-content content container-fluid">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-xs-12 mb-1">
        <h2 class="content-header-title">Dashboard header</h2>
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


    <div class="content-body"><!-- Description -->
<section id="description" class="card">
<div class="card-header">
    <h4 class="card-title">Description</h4>
</div>
<div class="card-body collapse in">
    <div class="card-block">
        <div class="card-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vulputate dolor vel tortor rhoncus dignissim. Aenean vel purus tempor, elementum magna et, tempus elit. Cras euismod magna magna, quis laoreet nisl dignissim eu. Maecenas non porta orci. Aliquam porttitor tellus eu sem hendrerit, eget ullamcorper orci bibendum. Sed ac nunc ullamcorper, laoreet ante non, vehicula lorem. Phasellus malesuada quam massa, quis vestibulum dolor dapibus at. Proin eget nunc nisl. Morbi tincidunt consequat eros in condimentum. Duis lectus sem, vestibulum at justo viverra, fermentum condimentum lorem. Praesent quam dui, faucibus volutpat enim et, consectetur aliquet arcu. Maecenas lobortis posuere tortor sed mattis. Suspendisse nec turpis laoreet, aliquet quam eu, rhoncus metus. Morbi vel pellentesque nibh. Aliquam porttitor tincidunt imperdiet.</p>
        </div>
    </div>
</div>
</section>
<!--/ Description -->
<!-- CSS Classes -->
<section id="css-classes" class="card">
<div class="card-header">
    <h4 class="card-title">CSS Classes</h4>
</div>

</section>
<!--/ CSS Classes -->
<!-- HTML Markup -->
<section id="html-markup" class="card">
<div class="card-header">
    <h4 class="card-title">HTML Markup</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
    <div class="heading-elements">
        <ul class="list-inline mb-0">
            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
        </ul>
    </div>
</div>

</section>
<!--/ HTML Markup -->
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
