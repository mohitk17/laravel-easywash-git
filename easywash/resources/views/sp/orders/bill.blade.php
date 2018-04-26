@extends('layouts.sp-app')

@section('content')
<div class="app-content content container-fluid">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-xs-12 mb-1">
        <h2 class="content-header-title">Billing details</h2>
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


    <div class="content-body">
      <div class="row match-height">
          <!-- Description lists horizontal -->
          <div class="col-sm-12 col-md-4">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Order Information<small class="text-muted"></small></h4>
                      <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                      <div class="heading-elements">
                          <ul class="list-inline mb-0">
                              <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-body collapse in">
                      <div class="card-block">
                          <div class="card-text">
                              <dl class="row">
                                @foreach( $cart as $cart )
                                  <dt class="col-sm-5" >Order ID:</dt>
                                  <dd class="col-sm-7">#EZW000{{$cart->id}}</dd>
                                  <dt class="col-sm-5">Order Date:</dt>
                                  <dd class="col-sm-7">{{$cart->created_at}}</dd>
                                  <dt class="col-sm-5">Order status:</dt>
                                  <dd class="col-sm-7">Pending</dd>

                              </dl>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-12 col-md-8">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Service provider details: <small class="text-muted"></small></h4>
                      <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                      <div class="heading-elements">
                          <ul class="list-inline mb-0">
                              <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-body collapse in">
                      <div class="card-block">
                          <div class="card-text">
                              <dl class="row">
                                  <dt class="col-sm-3">Service ID:</dt>
                                  <dd class="col-sm-9">#{{$cart->service_id}}</dd>
                                  @foreach($services as $service)
                                  <dt class="col-sm-3">Service name:</dt>
                                  <dd class="col-sm-9">{{$service->name}}</dd>
                                  <dt class="col-sm-3">Service address:</dt>
                                  <dd class="col-sm-9">{{$service->address}} , {{$service->city}} , {{$service->state}},{{$service->zipcode}}</dd>
                                  @endforeach
                                  <dt class="col-sm-3 text-truncate">Reques pickup date:</dt>
                                  <dd class="col-sm-9"> {{$cart->dos}}</dd>

                              </dl>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>


<section id="" class="card">
  <form class="" action="" method="post">


<div class="card-header">
    <h4 class="card-title">Service details</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
    <div class="heading-elements">
        <ul class="list-inline mb-0">
            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
        </ul>
    </div>
</div>
<div class="card-body collapse in">
    <div class="card-block">
      <h5>Wash and fold: </h5>
      @if (is_null($cart->laundry_weight))
        No wash and fold service requested yet.
      <section id="global-settings" class="card">
          <div class="card-header">
              <h5 class="card-title">Add Wash and fold</h5>

              <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                      <div class="heading-elements">
                  <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                      <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                      <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                  </ul>
              </div>
          </div>
          <div class="card-body collapse">
              <div class="card-block">
                  <div class="card-text">
                      <p>The default web fonts (Helvetica Neue, Helvetica, and Arial) have been dropped in Bootstrap 4 and replaced with a “native font stack” for optimum text rendering on every device and OS. Read more about <a href="https://www.smashingmagazine.com/2015/11/using-system-ui-fonts-practical-guide/" target="_blank">native font stacks</a></p>
                      <ul>
                          <li>Use a <a href="/content/reboot/#native-font-stack">native font stack</a> that selects the best <code class="highlighter-rouge">font-family</code> for each OS and device.</li>
                          <li>Use the <code class="highlighter-rouge">$font-family-base</code>, <code class="highlighter-rouge">$font-size-base</code>, and <code class="highlighter-rouge">$line-height-base</code> attributes as our typographic base applied to the <code class="highlighter-rouge">&lt;body&gt;</code>.</li>
                          <li>Set the global link color via <code class="highlighter-rouge">$link-color</code> and apply link underlines only on <code class="highlighter-rouge">:hover</code>.</li>
                          <li>Use <code class="highlighter-rouge">$body-bg</code> to set a <code class="highlighter-rouge">background-color</code> on the <code class="highlighter-rouge">&lt;body&gt;</code> (<code class="highlighter-rouge">#fff</code> by default).</li>
                      </ul>
                  </div>
              </div>
          </div>
      </section>
      @else
      <div class="table-responsive">
          <table class="table mb-0">
              <thead class="thead-default">
                  <tr>
                      <th class="col-sm-6">Quantity</th>
                      <th class="col-sm-2">Times</th>
                      <th class="col-sm-2">Price</th>
                      <th class="col-sm-2">Total</th>
                  </tr>
              </thead>
              <tbody>

                    <tr>
                      <td class="col-sm-6"><b><input type="text" name="" value="{{$cart->laundry_weight}}"></b> pounds</td>
                      <td class="col-sm-2">X</td>
                      <td class="col-sm-2">
                        @foreach($prices as $prices)
                        $<b>{{$prices->Regular_Laundry}}</b>
                      @endforeach
                    </td>
                      <td class="col-sm-2">Pending</td>
                    </tr>

              </tbody>
          </table>
      </div>
      @endif


                    <br>
                    <h5>Dry Cleaning: </h5>
                    @if ($cart->dryclean == "none")
                      No dry clean service requested yet.
                      <section id="global-settings" class="card">
                          <div class="card-header">
                              <h5 class="card-title">Add Dry Cleaning</h5>

                              <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                      <div class="heading-elements">
                                  <ul class="list-inline mb-0">
                                      <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                      <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                      <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="card-body collapse">
                              <div class="card-block">
                                  <div class="card-text">
                                      <p>The default web fonts (Helvetica Neue, Helvetica, and Arial) have been dropped in Bootstrap 4 and replaced with a “native font stack” for optimum text rendering on every device and OS. Read more about <a href="https://www.smashingmagazine.com/2015/11/using-system-ui-fonts-practical-guide/" target="_blank">native font stacks</a></p>
                                      <ul>
                                          <li>Use a <a href="/content/reboot/#native-font-stack">native font stack</a> that selects the best <code class="highlighter-rouge">font-family</code> for each OS and device.</li>
                                          <li>Use the <code class="highlighter-rouge">$font-family-base</code>, <code class="highlighter-rouge">$font-size-base</code>, and <code class="highlighter-rouge">$line-height-base</code> attributes as our typographic base applied to the <code class="highlighter-rouge">&lt;body&gt;</code>.</li>
                                          <li>Set the global link color via <code class="highlighter-rouge">$link-color</code> and apply link underlines only on <code class="highlighter-rouge">:hover</code>.</li>
                                          <li>Use <code class="highlighter-rouge">$body-bg</code> to set a <code class="highlighter-rouge">background-color</code> on the <code class="highlighter-rouge">&lt;body&gt;</code> (<code class="highlighter-rouge">#fff</code> by default).</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </section>
                    @elseif ($cart->dryclean == "entire")
                        Whole bag will be dry cleaned
                    @else
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-default">
                                    <tr>
                                        <th class="col-sm-6">Item</th>
                                        <th class="col-sm-2">Times</th>
                                        <th class="col-sm-2">Price</th>
                                        <th class="col-sm-2">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($drycleaning as $drycleaning)
                                      <tr>
                                        <td class="col-sm-6"><b>(*){{$drycleaning->name}}</b><br></td>
                                        <td class="col-sm-2">X</td>
                                        <td class="col-sm-2">Pending</td>
                                        <td class="col-sm-2">Pending</td>
                                      </tr>
                                      @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif

                    <br>
                    <h5>Tailoring: </h5>
                    @if($tailoring->count()>0)
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-default">
                                    <tr>
                                        <th class="col-sm-6">Item</th>
                                        <th class="col-sm-2">Times</th>
                                        <th class="col-sm-2">Price</th>
                                        <th class="col-sm-2">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach( $tailoring as $tailoring )
                                      <tr>
                                        <td class="col-sm-6"><b>(*){{$tailoring->name}}</b><br></td>
                                        <td class="col-sm-2">X</td>
                                        <td class="col-sm-2">Pending</td>
                                        <td class="col-sm-2">Pending</td>
                                      </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                      No tailoring service requested yet.
                      <section id="global-settings" class="card">
                          <div class="card-header">
                              <h5 class="card-title">Add Tailoring</h5>

                              <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                      <div class="heading-elements">
                                  <ul class="list-inline mb-0">
                                      <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                      <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                      <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="card-body collapse">
                              <div class="card-block">
                                  <div class="card-text">
                                      <p>The default web fonts (Helvetica Neue, Helvetica, and Arial) have been dropped in Bootstrap 4 and replaced with a “native font stack” for optimum text rendering on every device and OS. Read more about <a href="https://www.smashingmagazine.com/2015/11/using-system-ui-fonts-practical-guide/" target="_blank">native font stacks</a></p>
                                      <ul>
                                          <li>Use a <a href="/content/reboot/#native-font-stack">native font stack</a> that selects the best <code class="highlighter-rouge">font-family</code> for each OS and device.</li>
                                          <li>Use the <code class="highlighter-rouge">$font-family-base</code>, <code class="highlighter-rouge">$font-size-base</code>, and <code class="highlighter-rouge">$line-height-base</code> attributes as our typographic base applied to the <code class="highlighter-rouge">&lt;body&gt;</code>.</li>
                                          <li>Set the global link color via <code class="highlighter-rouge">$link-color</code> and apply link underlines only on <code class="highlighter-rouge">:hover</code>.</li>
                                          <li>Use <code class="highlighter-rouge">$body-bg</code> to set a <code class="highlighter-rouge">background-color</code> on the <code class="highlighter-rouge">&lt;body&gt;</code> (<code class="highlighter-rouge">#fff</code> by default).</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </section>
                    @endif


    </div>
    @endforeach
</div>


</form>
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
