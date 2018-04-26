@extends('layouts.app')


@section('content')

  <div class="wrapper">

    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">Order Details</h4>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Product</a></li>
                        <li class="active">Shop Cart</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--page title end-->

    <!--body content start-->
    <section class="body-content ">

        <div class="page-content">
            <div class="container">
                <div class="row">
                  <!-- INFO  -->
                  <div class="col-md-12">

                      <!--INFO ENDS -->


                              <!-- accordion 2 start-->
                              <dl class="accordion">
                              @foreach( $carts as $cart )
                                    <dt>
                                        <a href="">Order Details:</a>
                                    </dt>
                                    <dd>
                                      <div class="row">
                                      <div class="col-md-6">
                                          <h5> Order ID: {{$cart->id}} </h5>
                                      </div>
                                      <div class="col-md-6">
                                          <h5><b>Requested pickup date:</b>{{$cart->dos}}</h5>
                                      </div>
                                      </div>
                                    </dd>

                                    <dt>
                                      <a href="">Service shop details:</a>
                                    </dt>
                                    <dd>
                                      <div class="row">
                                      @foreach( $services as $service )
                                      <div class="row">
                                          <div class="col-md-3">  <h5>Name:</h5></div>
                                          <div class="col-md-9">{{$service->name}}</div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-3"> <h5>Address:</h5> </div>
                                        <div class="col-md-9"> {{$service->address}} , {{$service->city}} , {{$service->state}},{{$service->zipcode}} </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-3"> <h5>Average rating:</h5> </div>
                                        <div class="col-md-9">@for ($i=1; $i <= 5 ; $i++)
                                        <h5 class="fa fa-star{{ ($i <= $avg_rating) ? '' : '-o'}}"></h5>
                                        @endfor
                                        (<b>{{$avg_rating}}</b>  /&nbsp5)</div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-3"> </div>
                                        <div class="col-md-9"> <a href="{{ route('user.home.details', ['id' => $service->sp_id , 'service_id' => $service->id] )}}" class="btn btn-small btn-dark-border  "><i class="fa fa-paper-plane-o"></i> View more</a>
                                        </div>
                                      </div>
                                      @endforeach
                                      </div>
                                    </dd>

                                    <dt>
                                      <a href="">Requested service details:</a>
                                    </dt>
                                    <dd>

                                      <!-- wash and fold start -->
                                      <div class="row">
                                        <h5 class="text-uppercase">Wash and fold: </h5>
                                      </div>
                                        @if (is_null($cart->laundry_weight))
                                        <div class="row">
                                          No laundry service requested
                                        </div>
                                        @else
                                        <div class="row">
                                          <div class=" col-md-12">
                                            <table class="table table-hover">
                                              <thead>
                                                <th class="col-md-3">Quantity</th>
                                                <th class="col-md-3"></th>
                                                <th class="col-md-3">Price</th>
                                                <th class="col-md-3">Total</th>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                    <td class="col-md-3">Weight:<b>{{$cart->laundry_weight}}</b> pounds</td>
                                                    <td class="col-md-3">X</td>
                                                    <td class="col-md-3">
                                                    @foreach($prices as $prices)
                                                      $<b>{{$prices->Regular_Laundry}}</b>
                                                      (price per pound)
                                                    @endforeach
                                                  </td>
                                                    <td class="col-md-3">Pending</td>
                                                  </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                      @endif
                                      <!-- wash and fold ends -->

                                      <!--  dry cleaning start-->
                                      <div class="row">
                                        <h5 class="text-uppercase">Dry Cleaning:</h5>
                                      </div>
                                      @if ($cart->dryclean == "none")

                                        No dry clean service requested

                                      @elseif ($cart->dryclean == "entire")

                                          Whole bag will be dry cleaned


                                      @else
                                          <div class="row">
                                            <div class=" col-md-12">
                                              <table class="table table-hover">
                                                <thead>
                                                  <th class="col-md-3">Items</th>
                                                  <th class="col-md-3"></th>
                                                  <th class="col-md-3">Price</th>
                                                  <th class="col-md-3">Total</th>
                                                </thead>
                                                <tbody>
                                                @foreach($drycleaning as $drycleaning)
                                                    <tr>
                                                      <td class="col-md-3">
                                                        <b>(Quantity Pending){{$drycleaning->name}}</b><br>
                                                        </td>
                                                      <td class="col-md-3">X</td>
                                                      <td class="col-md-3">Pending</td>
                                                      <td class="col-md-3">Pending</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                            @endif
                                          <!-- dry cleaning ends  -->

                                          <!-- Tailoring start -->
                                          <div class="row">
                                            <h5 class="text-uppercase">tailoring:</h5>
                                          </div>

                                            @if($tailoring->count()>0)
                                            <div class="row">
                                              <div class=" col-md-12">
                                                <table class="table table-hover">
                                                  <thead>
                                                    <th class="col-md-3">Items</th>
                                                    <th class="col-md-3"></th>
                                                    <th class="col-md-3">Price</th>
                                                    <th class="col-md-3">Total</th>
                                                  </thead>
                                                  <tbody>
                                                  @foreach( $tailoring as $tailoring )
                                                      <tr>
                                                        <td class="col-md-3">
                                                          <b>(Quantity Pending){{$tailoring->name}}</b><br>
                                                          </td>
                                                        <td class="col-md-3">X</td>
                                                        <td class="col-md-3">Pending</td>
                                                        <td class="col-md-3">Pending</td>
                                                      </tr>
                                                      @endforeach
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>
                                            @else

                                              No laundry service requested

                                            @endif

                                          <!-- tailoring ends -->



                                    </dd>


                          @endforeach
                          </dl>
                              <!-- accordion 2 end -->

                              <ul class="portfolio-meta m-bot-30 pull-right">
                                  <li><span> Sub Total </span> $ 2404.00</li>
                                  <li><span> Eco Tax (-2.00)	 </span>  $ 40.00 </li>
                                  <li><span> VAT (20%) </span> $ 498.00 </li>
                                  <li><span><strong class="cart-total"> Total </strong></span> <strong class="cart-total">$ 2830.00 </strong></li>
                              </ul>

                              <div class="cart-btn-row inline-block">
                                <button type="submit" class="btn btn-medium btn-dark-solid pull-right" name="button"><i class="fa fa-shopping-cart"></i>Place Request</button>

                                  <!-- <a href="#" class="btn btn-medium btn-dark-solid btn-transparent  pull-right">  Continue Shopping </a> -->
                              </div>
  </form>


                    </div>
                </div>
            </div>
        </div>

  </section>
    <!--body content end-->

    <!--footer start 1-->
    <footer id="footer" class="dark">
        <div class="primary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="#" class="m-bot-20 footer-logo">
                            <img class="retina" src="img/logo-dark.png" alt=""/>
                        </a>
                        <p>Massive is  fully responsible, performance oriented and SEO optimized, retina ready WordPress theme.</p>

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
                        <h5 class="text-uppercase">quick link</h5>
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
                                <a href="#"><img src="img/recent-work/1.jpg" alt=""/></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/recent-work/2.jpg" alt=""/></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/recent-work/3.jpg" alt=""/></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/recent-work/4.jpg" alt=""/></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/recent-work/5.jpg" alt=""/></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/recent-work/6.jpg" alt=""/></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/recent-work/7.jpg" alt=""/></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/recent-work/8.jpg" alt=""/></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/recent-work/9.jpg" alt=""/></a>
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
                        <span class="m-top-10">Copyright 2012 - 2015 Massive Theme by <a href="http://themebucket.net/" class="f-link" target="_blank">ThemeBucket</a> | All Rights Reserved</span>
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
<!-- by mohit -->
  <script src=" {{ asset('app/js/tabform.js') }}"></script>




  </script>
  <!--common scripts-->
  <script src=" {{ asset('app/js/scripts.js') }}"></script>


  <script src=" {{ asset('app/js/jquery-ui.js') }}"></script>

<!-- FOR DATE PICKER -->
<script>
  $( "#datepicker" ).datepicker({
    inline: true,
    minDate:0,
    dateFormat: 'yy-mm-dd',
  });
</script>


<!-- FOR DRY CLEANING SERVICE DISPLAY DIV -->
<script type="text/javascript">
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>







</body>
</html>
  @endsection
