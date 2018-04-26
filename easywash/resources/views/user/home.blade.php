@extends('layouts.app')


@section('content')
  <div class="wrapper">
          <!--hero section-->
          <div  class="full-banner  vertical-align banner-25 height-600">
              <div class="container-mid">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-6 ">
                              <div class="banner-title m-top-0">
                                  <h1 class="text-uppercase">laundry upper</h1>
                                  <h3 class="text-uppercase">we are massive for creative</h3>
                                  <div class="m-top-30">
                                      <a href="#" class="btn btn-small btn-dark-border  "> Schedule now</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--hero section-->

          <!--body content start-->
          <section class="body-content">

            <!--page title start-->
            <section class="page-title">
                <div class="container">
                    <h4 class="text-uppercase">Shop - 3 Column</h4>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Product</a></li>
                        <li class="active">Shop - 3 Column</li>
                    </ol>
                </div>
            </section>
            <!--page title end-->
            <div class="page-content product-grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <!--product option-->
                            <div class="clearfix m-bot-50 inline-block">
                                <div class="pull-left m-top-10">
                                    Showing 1–10 of 55 results
                                </div>
                                <div class="pull-right">
                                    <form method="post" action="#" >
                                        <select class="form-control">
                                            <option>Default sorting</option>
                                            <option>Sort by popularity</option>
                                            <option>Sort by average ratings</option>
                                            <option>Sort by newness</option>
                                            <option>Sort by price: low to high</option>
                                            <option>Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <!--product option-->


                            <div class="row">

                            @if($services->count()>0)
                            @foreach( $services as $service )
                                <div class="col-md-4">
                                    <!--product list-->
                                    <div class="product-list">
                                        <div class="product-img">
                                            <a href="#"><img src="{{$service->featured}}" alt=""/></a>
                                            <a href="#"><img src="{{asset('app/img/product/1-alt.jpg')}}" alt=""/></a>
                                            <div class="sale-label">
                                                Sale
                                            </div>
                                        </div>
                                        <div class="product-title">
                                            <h5><a href="{{ route('user.home.details', ['id' => $service->sp_id , 'service_id' => $service->id] )}}">
                                              {{$service->name}}

                                              </a></h5>
                                        </div>
                                        <div class="product-price">
                                            {{$service->address}} {{$service->city}}<br> {{$service->state}}.{{$service->zipcode}}.
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-btn">
                                            <a href="{{ route('user.home.details', ['id' => $service->sp_id , 'service_id' => $service->id] )}}" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i>View More</a>

                                        </div>
                                    </div>
                                    <!--product list-->
                                </div>


                            @endforeach
                            <div class="row">
                              <div class="text-center col-md-12">
                                  <ul class="pagination custom-pagination">
                                      {{ $services->links()}}

                                  </ul>
                              </div>
                            </div>
                            @else
                            <h3>No Published Services</h3>
                            @endif


                        </div>



                    </div>
                    <div class="col-md-3 col-md-offset-1 ">
                        <!--product category-->
                        <div class="widget">
                            <div class="heading-title-alt text-left heading-border-bottom">
                                <h6 class="text-uppercase">Service category</h6>
                            </div>
                            <ul class="widget-category">
                              <li><a href="{{ route('user.home.categoryindex', ['cid' => 1] )}}" class="">Laundry</a></li>
                              <li><a href="{{ route('user.home.categoryindex', ['cid' => 2] )}}" class="">Dry Cleaning</a></li>
                              <li><a href="{{ route('user.home.categoryindex', ['cid' => 4] )}}" class="">Tailoring</a></li>
                              <li><a href="{{ route('user.home.categoryindex', ['cid' => 3] )}}" class="">Other</a></li>
                            </ul>

                        </div>
                        <!--product category-->

                        <!--price filter-->
                        <div class="widget">
                            <div class="heading-title-alt text-left heading-border-bottom">
                                <h6 class="text-uppercase">price filter</h6>
                            </div>
                            <form method="post" action="#">

                                <div class="row">
                                    <div class="col-xs-6 form-group">
                                        <input type="text" name="price-from" id="price-from" class=" form-control" placeholder="From, $" maxlength="100">
                                    </div>

                                    <div class="col-xs-6 form-group">
                                        <input type="text" name="price-to" id="price-to" class=" form-control" placeholder="To, $" maxlength="100">
                                    </div>
                                    <div class=" col-xs-12 form-group">
                                        <button class="btn btn-small btn-dark-border  btn-transparent">Filter</button>
                                    </div>
                                </div>



                            </form>
                        </div>
                        <!--price filter-->



                        <!--product tags-->
                        <div class="widget">
                            <div class="heading-title-alt text-left heading-border-bottom">
                                <h6 class="text-uppercase">PRODUCT TAGS</h6>
                            </div>
                            <div class="widget-tags">
                                <a href="">Laundry</a>
                                <a href="">Dry Cleaning</a>
                                <a href="">Miscellaneous</a>
                                <a href="">Tailoring</a>
                            </div>
                        </div>
                        <!--product tags-->

                    </div>
                </div>
            </div>





          </section>
          <!--body content end-->

          <!--footer 1 start -->
          <footer id="footer" class="dark">
              <div class="primary-footer">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-3">
                              <a href="#" class="m-bot-20 footer-logo">
                                  <img class="retina" src=" {{asset('app/img/logo-dark.png')}}" alt=""/>
                              </a>
                              <p>Massive is  fully responsible, Performance oriented and SEO optimized theme.</p>

                          </div>
                          <div class="col-md-3">
                              <h5 class="text-uppercase">recent posts</h5>
                              <ul class="f-list">
                                  <li><a href="#">Standard Blog post</a></li>
                                  <li><a href="#">Quotation post</a></li>
                                  <li><a href="#">Audio Post</a></li>
                                  <li><a href="#">Massive Video Demo</a></li>
                                  <li><a href="#">Blog Image Post</a></li>
                              </ul>
                          </div>
                          <div class="col-md-3">
                              <h5 class="text-uppercase">follow us</h5>
                              <ul class="f-list">
                                  <li><a href="#">About Massive</a></li>
                                  <li><a href="#">Career</a></li>
                                  <li><a href="#">Terms & Condition</a></li>
                                  <li><a href="#">Privacy Policy</a></li>
                                  <li><a href="#">Contact Us</a></li>
                              </ul>
                          </div>
                          <div class="col-md-3">
                              <h5 class="text-uppercase">Recent Work</h5>
                              <ul class="r-work">
                                  <li>
                                      <a href="#"><img src=" {{asset('app/img/recent-work/1.jpg')}}" alt=""/></a>
                                  </li>
                                  <li>
                                      <a href="#"><img src=" {{asset('app/img/recent-work/2.jpg')}}" alt=""/></a>
                                  </li>
                                  <li>
                                      <a href="#"><img src=" {{asset('app/img/recent-work/3.jpg')}}" alt=""/></a>
                                  </li>
                                  <li>
                                      <a href="#"><img src=" {{asset('app/img/recent-work/4.jpg')}}" alt=""/></a>
                                  </li>
                                  <li>
                                      <a href="#"><img src=" {{asset('app/img/recent-work/5.jpg')}}" alt=""/></a>
                                  </li>
                                  <li>
                                      <a href="#"><img src=" {{asset('app/img/recent-work/6.jpg')}}" alt=""/></a>
                                  </li>
                                  <li>
                                      <a href="#"><img src=" {{asset('app/img/recent-work/7.jpg')}}" alt=""/></a>
                                  </li>
                                  <li>
                                      <a href="#"><img src=" {{asset('app/img/recent-work/8.jpg')}}" alt=""/></a>
                                  </li>
                                  <li>
                                      <a href="#"><img src=" {{asset('app/img/recent-work/9.jpg')}}" alt=""/></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="secondary-footer">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-6">
                              <span class="m-top-10">Copyright 2012 - 2015 Massive Theme by <a href="#" class="f-link">ThemeBucket</a> | All Rights Reserved</span>
                          </div>
                          <div class="col-md-6">
                              <div class="social-link circle pull-right">
                                  <a href="#"><i class="fa fa-facebook"></i></a>
                                  <a href="#"><i class="fa fa-twitter"></i></a>
                                  <a href="#"><i class="fa fa-dribbble"></i></a>
                                  <a href="#"><i class="fa fa-google-plus"></i></a>
                                  <a href="#"><i class="fa fa-behance"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </footer>
          <!--footer 1 end-->
      </div>


      <!-- Placed js at the end of the document so the pages load faster -->
      <script src=" {{ asset('app/js/jquery.js') }}"></script>
      <script src=" {{ asset('app/js/bootstrap.min.js') }}"></script>
      <script src=" {{ asset('app/js/menuzord.js') }}"></script>
      <script src=" {{ asset('app/js/jquery.flexslider-min.js') }}"></script>
      <script src=" {{ asset('app/js/owl.carousel.min.js') }}"></script>
      <script src=" {{ asset('app/js/jquery.isotope.js') }}"></script>
      <script src=" {{ asset('app/js/jquery.magnific-popup.min.js') }}"></script>
      <script src=" {{ asset('app/js/jquery.countTo.js') }}"></script>
      <script src=" {{ asset('app/js/smooth.js') }}"></script>
      <script src=" {{ asset('app/js/wow.min.js') }}"></script>
      <script src=" {{ asset('app/js/imagesloaded.js') }}"></script>
      <!--common scripts-->
      <script src=" {{ asset('app/js/scripts.js') }}"></script>

      <script src=" {{ asset('app/js/jquery-ui.js') }}"></script>




    </body>
    </html>


    @endsection
