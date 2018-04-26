@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Easywash website">
    <meta name="author" content="Mohit Kirange">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href=" {{ asset( 'app/img/favicon.png' ) }} ">
    <title>Easywash</title>


    <!--common style-->
<link href='http://fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200' rel='stylesheet' type='text/css'>
<link href=" {{ asset( 'app/css/bootstrap.min.css' ) }} " rel="stylesheet">
    <link href=" {{ asset( 'app/css/font-awesome.min.css' ) }} " rel="stylesheet">
    <link href=" {{ asset( 'app/css/magnific-popup.css' ) }} " rel="stylesheet">
    <link href=" {{ asset( 'app/css/shortcodes/shortcodes.css' ) }} " rel="stylesheet">
    <link href=" {{ asset( 'app/css/owl.carousel.css' ) }} " rel="stylesheet">
    <link href=" {{ asset( 'app/css/owl.theme.css' ) }} " rel="stylesheet">
    <link href=" {{ asset( 'app/css/style.css' ) }} " rel="stylesheet">
    <link href=" {{ asset( 'app/css/style-responsive.css' ) }} " rel="stylesheet">
    <link href=" {{ asset( 'app/css/default-theme.css' ) }} " rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>


  <body>
<!-- "{{asset('app/')}}" -->
      <!--  preloader start -->
  <!-- <div id="tb-preloader">
      <div class="tb-preloader-wave"></div>
  </div> -->
  <!-- preloader end -->

@section('content')
  <div class="wrapper">

          <!--header start-->
          <header id="header" class=" header-full-width ">

              <div class="header-sticky light-header ">

                  <div class="container">
                      <div id="massive-menu" class="menuzord">

                          <!--logo start-->
                          <a href="index.html" class="logo-brand">
                              <img class="retina" src="{{asset('app/img/logo.png')}}" alt=""/>
                          </a>
                          <!--logo end-->

                          <!--mega menu start-->
                          <ul class="menuzord-menu pull-right">
                              <li class="active"><a href="#">Home</a>
                                <li><a href="our-services-2.html">Services 2</a></li>
                                <li><a href="faq-2.html">FAQ 2</a></li>
                                  <li><a href="contact-us-2.html">Contact 2</a></li>
                                    <li><a href="{{ route('login') }}">Login/Register 1</a></li>

                              </li>

                              <li  class="nav-icon nav-divider">
                                  <a href="javascript:void(0)">|</a>
                              </li>

                              <li  class="nav-icon cart-info">
                                  <a href="javascript:void(0)">
                                      <i class="fa fa-shopping-cart"></i> cart(2)
                                  </a>
                                  <div class="megamenu megamenu-quarter-width ">
                                      <div class="megamenu-row">
                                          <div class="col12">

                                              <!--cart-->
                                              <table class="table cart-table-list table-responsive">
                                                  <tr>
                                                      <td><a href="#"><img src=" {{asset('app/img/product/1.jpg')}}" alt=""/></a></td>
                                                      <td><a href="#"> Women's Top</a></td>
                                                      <td>X4</td>
                                                      <td>$ 122.00</td>
                                                      <td><a href="#" class="close"><img src=" {{asset('app/img/product/close.png')}}" alt=""/></a></td>
                                                  </tr>
                                                  <tr>
                                                      <td><a href="#"><img src=" {{asset('app/img/product/2.jpg')}}" alt=""/></a></td>
                                                      <td><a href="#"> Men's T-shirt</a></td>
                                                      <td>X4</td>
                                                      <td>$ 122.00</td>
                                                      <td><a href="#" class="close"><img src=" {{asset('app/img/product/close.png')}}" alt=""/></a></td>
                                                  </tr>
                                              </table>

                                              <div class="total-cart pull-right">
                                                  <ul>
                                                      <li><span>Sub Total</span> <span>$ 2000.00 </span></li>
                                                      <li><span>Total </span> <span>$ 2000.00 </span></li>
                                                  </ul>
                                              </div>
                                              <div class="s-cart-btn pull-right">
                                                  <a href="shop-cart.html" class="btn btn-small btn-theme-color light-hover"> View cart</a>
                                                  <a href="#" class="btn btn-small btn-light-solid  btn-transparent"> Checkout</a>
                                              </div>
                                              <!--cart-->

                                          </div>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                          <!--mega menu end-->

                      </div>
                  </div>
              </div>

          </header>
          <!--header end-->

          <!--hero section-->
          <div  class="full-banner  vertical-align banner-25 height-600">
              <div class="container-mid">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-6 ">
                              <div class="banner-title m-top-0">
                                  <h1 class="text-uppercase">think upper</h1>
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

              <div class="page-content magazine-grid">
                  <div class="container">
                      <!--feature border box start-->
                      <div class="row">

                          <div class="m-bot-80 inline-block">
                              <!--title-->
                              <div class="heading-title-alt text-center">
                                  <h3 class="text-uppercase">We are massive</h3>
                                  <div class="half-txt m-top-30">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore</div>
                              </div>
                              <!--title-->
                          </div>

                          <div class="col-md-4">
                              <div class="featured-item text-right m-bot-100">
                                  <div class="icon">
                                      <i class="icon-mobile"></i>
                                  </div>
                                  <div class="title text-uppercase">
                                      <h4>Bootstrap</h4>
                                  </div>
                                  <div class="desc">
                                      Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.
                                  </div>
                              </div>
                              <div class="featured-item text-right">
                                  <div class="icon">
                                      <i class="icon-circle-compass"></i>
                                  </div>
                                  <div class="title text-uppercase">
                                      <h4>design</h4>
                                  </div>
                                  <div class="desc">
                                      Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 text-center">
                              <div class="responsive-img fit-img  m-top-80">
                                  <img src=" {{asset('app/img/pen-box.png')}}" alt=""/>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="featured-item text-left m-bot-100">
                                  <div class="icon">
                                      <i class="icon-browser2"></i>
                                  </div>
                                  <div class="title text-uppercase">
                                      <h4>Clean Code</h4>
                                  </div>
                                  <div class="desc">
                                      Ringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.
                                  </div>
                              </div>
                              <div class="featured-item text-left ">
                                  <div class="icon">
                                      <i class="icon-layers"></i>
                                  </div>
                                  <div class="title text-uppercase">
                                      <h4>Multipurpose</h4>
                                  </div>
                                  <div class="desc">
                                      Singilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--feature border box end-->
                  </div>
              </div>

              <hr/>



              <div class="page-content">
                  <div class="container">
                      <div class="row">
                          <div class="m-bot-20 inline-block">
                              <!--title-->
                              <div class="heading-title-alt text-center">
                                  <h3 class="text-uppercase">How we work</h3>
                                  <div class="half-txt m-top-30">We are a team of multi-skilled and curious digital specialists who are always up for a challenge and learning as fast as digital is changing. We are a team of multi-skilled and curious digital specialists who are always up for a challenge.</div>
                              </div>
                              <!--title-->
                          </div>

                          <div class="post-list-aside">
                              <div class="post-single">
                                  <div class="col-md-6">
                                      <div class=" post-img text-center">
                                          <img src=" {{ asset('app/img/post/p14.jpg')}}" alt=""/>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="post-desk">

                                          <h4 class="text-uppercase">
                                               we work together for fun
                                          </h4>

                                          <p>
                                              Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content.
                                          </p>
                                          <!--  accordion time line start-->
                                          <dl class="accordion time-line">
                                              <dt>
                                                  <a href="">  business Philosophy</a>
                                              </dt>
                                              <dd>
                                                  Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam.
                                              </dd>
                                              <dt>
                                                  <a href="">  Mission & Vision</a>
                                              </dt>
                                              <dd>
                                                  Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. leo quam aliquet diam, congue laoreet elit metus eget diam.
                                              </dd>
                                              <dt>
                                                  <a href="">  Management & Policy</a>
                                              </dt>
                                              <dd>
                                                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. Proin ac metus diam.
                                              </dd>
                                          </dl>
                                          <!-- accordion time line end-->
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>

              <!--post-->
              <div class="img-post col-2">
                  <div class="item">
                      <div class="p-img">
                          <img src=" {{asset('app/img/post/p10.jpg')}}" alt="">
                      </div>
                      <div class="post-desk">
                          <div class="title">
                              <span class="post-sub-title text-uppercase light-txt">news</span>
                              <h3 class="text-uppercase light-txt">
                                  <a href="#">some services that we provide occationaly</a>
                              </h3>
                          </div>
                          <p class="light-txt">
                              Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content.
                          </p>
                      </div>
                  </div>
                  <div class="item">
                      <img src=" {{asset('app/img/post/p11.jpg')}}" alt="">
                      <div class="post-desk">
                          <div class="title">
                              <span class="post-sub-title text-uppercase light-txt">news</span>
                              <h3 class="text-uppercase light-txt">
                                  <a href="#">Editors Now use As Their Default Model</a>
                              </h3>
                          </div>
                          <p class="light-txt">
                              Fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content.
                          </p>
                      </div>
                  </div>
              </div>
              <!--post-->

              <!--tabs-->
              <div class="page-content tab-parallax">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-12">

                              <!--tabs square start-->
                              <section class="icon-box-tabs ">
                                  <ul class="nav nav-pills">
                                      <li class="active">
                                          <a data-toggle="tab" href="#tab-15">
                                              <i class="icon-mobile"> </i>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a data-toggle="tab" href="#tab-16">
                                              <i class="icon-documents"></i>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a data-toggle="tab" href="#tab-17">
                                              <i class="icon-lightbulb"></i>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a data-toggle="tab" href="#tab-18">
                                              <i class="icon-circle-compass"></i>
                                          </a>
                                      </li>

                                      <li class="">
                                          <a data-toggle="tab" href="#tab-19">
                                              <i class="icon-telescope"></i>
                                          </a>
                                      </li>

                                  </ul>
                                  <div class="panel-body">
                                      <div class="tab-content">
                                          <div id="tab-15" class="tab-pane active">
                                              <div class="heading-title-alt">
                                                  <span class="heading-sub-title-alt text-uppercase theme-color-">full responsive</span>
                                                  <h2 class="text-uppercase">we work together for fun</h2>
                                              </div>
                                              In quis scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam. In quis scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam.
                                          </div>
                                          <div id="tab-16" class="tab-pane">
                                              <div class="heading-title-alt">
                                                  <span class="heading-sub-title-alt text-uppercase theme-color-">work for fun</span>
                                                  <h2 class="text-uppercase">Massive UI collection</h2>
                                              </div>
                                              Leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam. In quis scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam. In quis scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis.
                                          </div>
                                          <div id="tab-17" class="tab-pane">
                                              <div class="heading-title-alt">
                                                  <span class="heading-sub-title-alt text-uppercase theme-color-">Multipurpose</span>
                                                  <h2 class="text-uppercase">Huge possibilities</h2>
                                              </div>
                                              congue laoreet elit metus eget diam. Proin ac metus diam. In quis scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam. In quis scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis.
                                          </div>
                                          <div id="tab-18" class="tab-pane">
                                              <div class="heading-title-alt">
                                                  <span class="heading-sub-title-alt text-uppercase theme-color-">sky is the limit</span>
                                                  <h2 class="text-uppercase">we work together for fun</h2>
                                              </div>
                                              Proin ac metus diam. In quis scelerisque velit. Leo quam aliquet diam, congue laoreet elit metus eget diam. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam. In quis scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis.
                                          </div>
                                          <div id="tab-19" class="tab-pane">
                                              <div class="heading-title-alt">
                                                  <span class="heading-sub-title-alt text-uppercase theme-color-">responsive</span>
                                                  <h2 class="text-uppercase">Unlimited shortcode</h2>
                                              </div>
                                              Kusto ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam. In quis scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam. In quis scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis.
                                          </div>

                                      </div>
                                  </div>
                              </section>
                              <!--tabs square end-->

                          </div>

                      </div>
                  </div>
              </div>
              <!--tabs-->


              <!--team member-->
              <div class="page-content">
                  <div class="container">
                      <div class="row">
                          <div class="m-bot-20 inline-block">
                              <!--title-->
                              <div class="heading-title-alt text-center">
                                  <h3 class="text-uppercase">WE HAVE A FABULOUS TEAM</h3>
                                  <div class="half-txt m-top-30">We are a team of multi-skilled and curious digital specialists who are always up for a challenge and learning as fast as digital is changing. We are a team of multi-skilled and curious digital specialists who are always up for a challenge.</div>
                              </div>
                              <!--title-->
                          </div>
                          <div class="col-md-4">
                              <div class="team-member">
                                  <div class="team-img">
                                      <img src=" {{asset('app/img/team/t-s-1.jpg')}}" alt=""/>
                                  </div>
                                  <div class="team-hover">
                                      <div class="desk">
                                          <h4>Hello World</h4>
                                          <p>I love to introduce myself as a hardcore Web Designer.</p>
                                      </div>
                                      <div class="s-link">
                                          <a href="#"><i class="fa fa-facebook"></i></a>
                                          <a href="#"><i class="fa fa-twitter"></i></a>
                                          <a href="#"><i class="fa fa-google-plus"></i></a>
                                      </div>
                                  </div>
                              </div>
                              <div class="team-title">
                                  <h5>Martin Smith</h5>
                                  <span>founder & ceo</span>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="team-member">
                                  <div class="team-img">
                                      <img src=" {{asset('app/img/team/t-s-2.jpg')}}" alt=""/>
                                  </div>
                                  <div class="team-hover">
                                      <div class="desk">
                                          <h4>Its Awesome Work</h4>
                                          <p>I love to introduce myself as a hardcore Web Designer.</p>
                                      </div>
                                      <div class="s-link">
                                          <a href="#"><i class="fa fa-facebook"></i></a>
                                          <a href="#"><i class="fa fa-twitter"></i></a>
                                          <a href="#"><i class="fa fa-google-plus"></i></a>
                                      </div>
                                  </div>
                              </div>
                              <div class="team-title">
                                  <h5>Franklin Harbet</h5>
                                  <span>HR Manager</span>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="team-member">
                                  <div class="team-img">
                                      <img src=" {{asset('app/img/team/t-s-3.jpg')}}" alt=""/>
                                  </div>
                                  <div class="team-hover">
                                      <div class="desk">
                                          <h4>I love to design</h4>
                                          <p>I love to introduce myself as a hardcore Web Designer.</p>
                                      </div>
                                      <div class="s-link">
                                          <a href="#"><i class="fa fa-facebook"></i></a>
                                          <a href="#"><i class="fa fa-twitter"></i></a>
                                          <a href="#"><i class="fa fa-google-plus"></i></a>
                                      </div>
                                  </div>
                              </div>
                              <div class="team-title">
                                  <h5>Linda Anderson</h5>
                                  <span>Marketing Manager</span>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
              <!--team member-->

              <!--subscribe-->
              <div class="subscribe-box gray-bg round-5 page-content text-center">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-8 col-md-offset-2">
                              <div class="subscribe-info">
                                  <h3 class="theme-color ">DON’T WANNA PURCHASE NOW? </h3>
                                  <span class=" ">subscribe to get in touch </span>
                              </div>
                              <div class="subscribe-form">
                                  <form class="form-inline">
                                      <input type="text" class="form-control" placeholder="Enter your email address">
                                      <button type="submit" class="btn btn-medium btn-dark-solid text-uppercase">
                                          subscribe
                                      </button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--subscribe-->


              <!--clients-->
              <div class="page-content">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-8">
                              <ul class="clients angle-box grid-3 ">
                                  <li><a href="#"><img src=" {{asset('app/img/clients/c-1.png')}}" alt="Clients"></a></li>
                                  <li><a href="#"><img src=" {{asset('app/img/clients/c-2.png')}}" alt="Clients"></a></li>
                                  <li><a href="#"><img src=" {{asset('app/img/clients/c-3.png')}}" alt="Clients"></a></li>
                                  <li><a href="#"><img src=" {{asset('app/img/clients/c-4.png')}}" alt="Clients"></a></li>
                                  <li><a href="#"><img src=" {{asset('app/img/clients/c-5.png')}}" alt="Clients"></a></li>
                                  <li><a href="#"><img src=" {{asset('app/img/clients/c-6.png')}}" alt="Clients"></a></li>
                              </ul>
                          </div>
                          <div class="col-md-4">
                              <!--testimonial start-->
                              <div id="testimonial-2" class="">
                                  <div class="item left-align">
                                      <div class="tst-thumb">
                                          <img class="circle" src=" {{asset('app/img/post/a1.png')}}" alt="">
                                      </div>
                                      <div class="content">
                                          <p>
                                              Nam nec dui dolor. Curabitur in laoreet erat. Nam nec dui dolor. Aliquam varius dolor nunc, interdum commodo justoporttitor vitae.
                                              Quisque fermentum purus.
                                          </p>
                                          <div class="testimonial-meta">
                                              - Kevin Paige -
                                              <span>ABC</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="item left-align">
                                      <div class="tst-thumb">
                                          <img class="circle" src=" {{asset('app/img/post/a1.png')}}" alt="">
                                      </div>
                                      <div class="content">
                                          <p>Vestibulum varius fermentum risus vitae lacinia neque auctor nec. Nunc ac rutrum nulla. Nulla maximus dolor in quam euismod ac viverra libero aliquet. </p>
                                          <div class="testimonial-meta">
                                              - John Doe -
                                              <span>head of marketing, TB</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="item left-align">
                                      <div class="tst-thumb">
                                          <img class="circle" src=" {{asset('app/img/post/a1.png')}}" alt="">
                                      </div>
                                      <div class="content">
                                          <p>Vestibulum varius fermentum risus vitae lacinia neque auctor nec. Nunc ac rutrum nulla. Nulla maximus dolor in quam euismod ac viverra libero aliquet. </p>
                                          <div class="testimonial-meta">
                                              - Linda Smith -
                                              <span>CEO, TB</span>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <!--testimonial end-->
                          </div>
                      </div>
                  </div>
              </div>
              <!--clients-->


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
      <script src=" {{ asset('app/js/jquery-1.10.2.min.js') }}"></script>
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

    </body>
    </html>


    @endsection
