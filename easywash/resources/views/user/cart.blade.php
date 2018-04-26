@extends('layouts.app')


@section('content')

  <div class="wrapper">

    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">Shop Cart</h4>
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
                      @foreach( $services as $service )
                            <div class="table-responsive">
                              <table class="table cart-table">
                                <tr>
                                  <td class="col-md-3">
                                      <img src="{{$service->featured}}" alt="Logo" width="200px" height="200px" class="img-responsive" />
                                  </td>
                                  <td class="col-md-9">
                                    <div class=" text-left">
                                      <h3 class="text-uppercase">{{$service->name}}</h3>
                                      <span class="text-uppercase">{{$service->address}} {{$service->city}} {{$service->state}}.{{$service->zipcode}}</span><br>
                                      @for ($i=1; $i <= 5 ; $i++)
                                        <p class="fa fa-star{{ ($i <= $avg_rating) ? '' : '-o'}}"></p>
                                      @endfor
                                      (<strong class="number-item">{{$avg_rating}}</strong>  /&nbsp5)
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </div>
                      @endforeach
                      <!--INFO ENDS -->

                              <!-- accordion 2 start-->
                              <dl class="accordion">
                                    <dt><a href="">Select service and date</a>
                                    </dt>

                                    <dd>

                                      <form class="form-inline" action="{{route('user.cart.store',['id' => $service->sp_id , 'service_id' => $service->id])}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                      <div class="form-inline coupon-form">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <!--tabs border start-->
                                                  <div class="wizard">
                                                  <div class="wizard-inner">
                                                  <section class="normal-tabs">
                                                      <ul class="nav nav-tabs" role="tablist">
                                                          <li role="presentation" class="active" >
                                                              <a data-toggle="tab" href="#step1" aria-controls="step1" role="tab" title="Step 1">Wash and Fold</a>
                                                          </li>
                                                          <li role="presentation" class="disabled">
                                                              <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">Dry Cleaning</a>
                                                          </li>
                                                          <li role="presentation" class="disabled">
                                                              <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">Tailoring</a>
                                                          </li>
                                                          <li role="presentation" class="disabled">
                                                              <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">Almost there</a>
                                                          </li>
                                                      </ul>
                                                      <div class="panel-body">
                                                          <div class="tab-content">

                                                            <div class="tab-pane active" role="tabpanel" id="step1">
                                                                <h3>Wash and Fold</h3>
                                                                <p>Note: If you have both wash & fold and dry cleaning, please separate the two into different laundry bags. <br>
                                                                  The cleaner will update your bill after weighing your bag.</p>
                                                                <div class="form-group">
                                                                    <label>Enter laundry weigh estimate:</label>
                                                                    <input type="text" class="form-control" placeholder="lbs" name="laundry_weight">
                                                                </div>
                                                                <ul class="list-inline pull-right">
                                                                    <li><button type="button" class="btn btn-default next-step">Next</button></li>
                                                                </ul>
                                                            </div>

                                                            <div class="tab-pane" role="tabpanel" id="step2">
                                                                <h3>Dry Cleaning</h3>
                                                                <p>Note: If you have both wash & fold and dry cleaning, please separate the two into different laundry bags. <br> The cleaner will update your bill after pickup</p>
                                                                <div>
                                                                  <label><input type="radio" name="dryclean" value="none"> None </label>
                                                                  <label><input type="radio" name="dryclean" value="entire"> Entire Load </label>
                                                                  <label><input type="radio" name="dryclean" value="itemize"> Itemize</label><br>
                                                                </div>
                                                                <div style=" display:none;" class="none box"></div>
                                                                <div style=" display:none;" class="entire box"></div>
                                                                <div style=" display:none;" class="itemize box">
                                                                  <div class="form-group ">
                                                                      <label for="drycleaning_id">Select Clothes Items</label><br>
                                                                      @foreach($drycleaning as $drycleaning)
                                                                      <div class="checkbox" >
                                                                        <label><input type="checkbox" name="drycleaning_id[]" value="{{$drycleaning->id}}">{{$drycleaning->name}}</label>
                                                                      </div>
                                                                    @endforeach
                                                                  </div>
                                                                </div>
                                                                <br>
                                                                <ul class="list-inline pull-right">
                                                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                                                    <li><button type="button" class="btn btn-default next-step">Next</button></li>
                                                                </ul>
                                                              </div>

                                                              <div class="tab-pane " role="tabpanel" id="step3">
                                                                <h3>Tailoring Services</h3>
                                                                <div class="form-group ">
                                                                    <label for="tailoring_id">Select Tailoring Services</label><br>
                                                                    @foreach($tailoring as $tailoring)
                                                                    <div class="checkbox" >
                                                                      <label><input type="checkbox" name="tailoring_id[]" value="{{$tailoring->id}}">{{$tailoring->name}}</label>
                                                                    </div>
                                                                  @endforeach
                                                                </div>
                                                                <br>
                                                                <ul class="list-inline pull-right">
                                                                  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                                                  <li><button type="button" class="btn btn-default next-step">Next</button></li>
                                                                </ul>
                                                              </div>

                                                              <div class="tab-pane " role="tabpanel" id="complete">
                                                                <h1>Select Date</h1>
                                                                @foreach( $services as $service )
                                                                  <div class="col-md-12">
                                                                    <!--subscribe border box start-->
                                                                      <div class="subscribe-box gray-bg round-5 m-bot-20">

                                                                          <div class="subscribe-info">
                                                                            <h4>Schedule your next Pickup</h4>
                                                                          </div>

                                                                          <div class="subscribe-form">
                                                                            <div class="form-group">

                                                                              <input type="text" name="dos"  value="select date" placeholder="Select date" id="datepicker" class="datepicker form-control" readonly="readonly">

                                                                            </div>
                                                                          </div>
                                                                      <!--subscribe border box end-->
                                                                    </div>
                                                                  @endforeach
                                                                  <br>
                                                                <ul class="list-inline pull-right">
                                                                  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                                                </ul>
                                                              </div>


                                                          </div>
                                                      </div>
                                                  </section>
                                                  <!--tabs border end-->
                                                </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>

                                    </dd>

                                    <!-- <dt>
                                          <a href="">Select date</a>
                                    </dt> -->

                                    <!-- <dd>
                                      <div class="row">
                                        @foreach( $services as $service )
                                      <div class="col-md-12">

                                            <div class="subscribe-box gray-bg round-5 m-bot-20">
                                                <div class="subscribe-info"><h4>Schedule your next Pickup</h4></div>
                                                <div class="subscribe-form">
                                                    <div class="form-group">
                                                    <form class="form-inline" action="" method="post">
                                                      {{ csrf_field() }}
                                                      <input type="text" name="dos" value="Select date" placeholder="Select date" id="datepicker" class="datepicker form-control width-300" readonly="readonly">
                                                    </form>
                                                    </div>
                                                </div>

                                        </div>
                                        @endforeach
                                      </div>
                                        </div>
                                    </dd> -->

                                    <dt>
                                          <a href="">Use Gift Voucher</a>
                                    </dt>

                                    <dd>
                                          <div class="form-inline coupon-form">
                                              <div class="form-group">
                                                  <label>Enter Your Gift Voucher</label>
                                                  <input type="text" name="voucher" class="form-control width-300" ></input>
                                              </div>
                                          </div>

                                    </dd>
<!--
                                    <dt>
                                          <a href="">Estimate Shipping & Taxes</a>
                                    </dt>

                                    <dd>
                                          <form class="coupon-form">
                                              <p>Enter your destination to get a shipping estimate.</p>
                                              <div class="form-group">
                                                  <label>Country *</label>
                                                  <select class="form-control">
                                                      <option value="AX">Åland Islands</option>
                                                      <option value="AF">Afghanistan</option>
                                                      <option value="AL">Albania</option>
                                                      <option value="DZ">Algeria</option>
                                                      <option value="AD">Andorra</option>
                                                      <option value="AO">Angola</option>
                                                      <option value="AI">Anguilla</option>
                                                      <option value="AQ">Antarctica</option>
                                                      <option value="AG">Antigua and Barbuda</option>
                                                      <option value="AR">Argentina</option>
                                                      <option value="AM">Armenia</option>
                                                      <option value="AW">Aruba</option>
                                                      <option value="AU">Australia</option>
                                                      <option value="AT">Austria</option>
                                                      <option value="AZ">Azerbaijan</option>
                                                      <option value="BS">Bahamas</option>
                                                      <option value="BH">Bahrain</option>
                                                      <option value="BD">Bangladesh</option>
                                                      <option value="BB">Barbados</option>
                                                      <option value="BY">Belarus</option>
                                                      <option value="PW">Belau</option>
                                                      <option value="BE">Belgium</option>
                                                      <option value="BZ">Belize</option>
                                                      <option value="BJ">Benin</option>
                                                      <option value="BM">Bermuda</option>
                                                      <option value="BT">Bhutan</option>
                                                      <option value="BO">Bolivia</option>
                                                      <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                      <option value="BA">Bosnia and Herzegovina</option>
                                                      <option value="BW">Botswana</option>
                                                      <option value="BV">Bouvet Island</option>
                                                      <option value="BR">Brazil</option>
                                                      <option value="IO">British Indian Ocean Territory</option>
                                                      <option value="VG">British Virgin Islands</option>
                                                      <option value="BN">Brunei</option>
                                                      <option value="BG">Bulgaria</option>
                                                      <option value="BF">Burkina Faso</option>
                                                      <option value="BI">Burundi</option>
                                                      <option value="KH">Cambodia</option>
                                                      <option value="CM">Cameroon</option>
                                                      <option value="CA">Canada</option>
                                                      <option value="CV">Cape Verde</option>
                                                      <option value="KY">Cayman Islands</option>
                                                      <option value="CF">Central African Republic</option>
                                                      <option value="TD">Chad</option>
                                                      <option value="CL">Chile</option>
                                                      <option value="CN">China</option>
                                                      <option value="CX">Christmas Island</option>
                                                      <option value="CC">Cocos (Keeling) Islands</option>
                                                      <option value="CO">Colombia</option>
                                                      <option value="KM">Comoros</option>
                                                      <option value="CG">Congo (Brazzaville)</option>
                                                      <option value="CD">Congo (Kinshasa)</option>
                                                      <option value="CK">Cook Islands</option>
                                                      <option value="CR">Costa Rica</option>
                                                      <option value="HR">Croatia</option>
                                                      <option value="CU">Cuba</option>
                                                      <option value="CW">CuraÇao</option>
                                                      <option value="CY">Cyprus</option>
                                                      <option value="CZ">Czech Republic</option>
                                                      <option value="DK">Denmark</option>
                                                      <option value="DJ">Djibouti</option>
                                                      <option value="DM">Dominica</option>
                                                      <option value="DO">Dominican Republic</option>
                                                      <option value="EC">Ecuador</option>
                                                      <option value="EG">Egypt</option>
                                                      <option value="SV">El Salvador</option>
                                                      <option value="GQ">Equatorial Guinea</option>
                                                      <option value="ER">Eritrea</option>
                                                      <option value="EE">Estonia</option>
                                                      <option value="ET">Ethiopia</option>
                                                      <option value="FK">Falkland Islands</option>
                                                      <option value="FO">Faroe Islands</option>
                                                      <option value="FJ">Fiji</option>
                                                      <option value="FI">Finland</option>
                                                      <option value="FR">France</option>
                                                      <option value="GF">French Guiana</option>
                                                      <option value="PF">French Polynesia</option>
                                                      <option value="TF">French Southern Territories</option>
                                                      <option value="GA">Gabon</option>
                                                      <option value="GM">Gambia</option>
                                                      <option value="GE">Georgia</option>
                                                      <option value="DE">Germany</option>
                                                      <option value="GH">Ghana</option>
                                                      <option value="GI">Gibraltar</option>
                                                      <option value="GR">Greece</option>
                                                      <option value="GL">Greenland</option>
                                                      <option value="GD">Grenada</option>
                                                      <option value="GP">Guadeloupe</option>
                                                      <option value="GT">Guatemala</option>
                                                      <option value="GG">Guernsey</option>
                                                      <option value="GN">Guinea</option>
                                                      <option value="GW">Guinea-Bissau</option>
                                                      <option value="GY">Guyana</option>
                                                      <option value="HT">Haiti</option>
                                                      <option value="HM">Heard Island and McDonald Islands</option>
                                                      <option value="HN">Honduras</option>
                                                      <option value="HK">Hong Kong</option>
                                                      <option value="HU">Hungary</option>
                                                      <option value="IS">Iceland</option>
                                                      <option value="IN">India</option>
                                                      <option value="ID">Indonesia</option>
                                                      <option value="IR">Iran</option>
                                                      <option value="IQ">Iraq</option>
                                                      <option value="IM">Isle of Man</option>
                                                      <option value="IL">Israel</option>
                                                      <option value="IT">Italy</option>
                                                      <option value="CI">Ivory Coast</option>
                                                      <option value="JM">Jamaica</option>
                                                      <option value="JP">Japan</option>
                                                      <option value="JE">Jersey</option>
                                                      <option value="JO">Jordan</option>
                                                      <option value="KZ">Kazakhstan</option>
                                                      <option value="KE">Kenya</option>
                                                      <option value="KI">Kiribati</option>
                                                      <option value="KW">Kuwait</option>
                                                      <option value="KG">Kyrgyzstan</option>
                                                      <option value="LA">Laos</option>
                                                      <option value="LV">Latvia</option>
                                                      <option value="LB">Lebanon</option>
                                                      <option value="LS">Lesotho</option>
                                                      <option value="LR">Liberia</option>
                                                      <option value="LY">Libya</option>
                                                      <option value="LI">Liechtenstein</option>
                                                      <option value="LT">Lithuania</option>
                                                      <option value="LU">Luxembourg</option>
                                                      <option value="MO">Macao S.A.R., China</option>
                                                      <option value="MK">Macedonia</option>
                                                      <option value="MG">Madagascar</option>
                                                      <option value="MW">Malawi</option>
                                                      <option value="MY">Malaysia</option>
                                                      <option value="MV">Maldives</option>
                                                      <option value="ML">Mali</option>
                                                      <option value="MT">Malta</option>
                                                      <option value="MH">Marshall Islands</option>
                                                      <option value="MQ">Martinique</option>
                                                      <option value="MR">Mauritania</option>
                                                      <option value="MU">Mauritius</option>
                                                      <option value="YT">Mayotte</option>
                                                      <option value="MX">Mexico</option>
                                                      <option value="FM">Micronesia</option>
                                                      <option value="MD">Moldova</option>
                                                      <option value="MC">Monaco</option>
                                                      <option value="MN">Mongolia</option>
                                                      <option value="ME">Montenegro</option>
                                                      <option value="MS">Montserrat</option>
                                                      <option value="MA">Morocco</option>
                                                      <option value="MZ">Mozambique</option>
                                                      <option value="MM">Myanmar</option>
                                                      <option value="NA">Namibia</option>
                                                      <option value="NR">Nauru</option>
                                                      <option value="NP">Nepal</option>
                                                      <option value="NL">Netherlands</option>
                                                      <option value="AN">Netherlands Antilles</option>
                                                      <option value="NC">New Caledonia</option>
                                                      <option value="NZ">New Zealand</option>
                                                      <option value="NI">Nicaragua</option>
                                                      <option value="NE">Niger</option>
                                                      <option value="NG">Nigeria</option>
                                                      <option value="NU">Niue</option>
                                                      <option value="NF">Norfolk Island</option>
                                                      <option value="KP">North Korea</option>
                                                      <option value="NO">Norway</option>
                                                      <option value="OM">Oman</option>
                                                      <option value="PK">Pakistan</option>
                                                      <option value="PS">Palestinian Territory</option>
                                                      <option value="PA">Panama</option>
                                                      <option value="PG">Papua New Guinea</option>
                                                      <option value="PY">Paraguay</option>
                                                      <option value="PE">Peru</option>
                                                      <option value="PH">Philippines</option>
                                                      <option value="PN">Pitcairn</option>
                                                      <option value="PL">Poland</option>
                                                      <option value="PT">Portugal</option>
                                                      <option value="QA">Qatar</option>
                                                      <option value="IE">Republic of Ireland</option>
                                                      <option value="RE">Reunion</option>
                                                      <option value="RO">Romania</option>
                                                      <option value="RU">Russia</option>
                                                      <option value="RW">Rwanda</option>
                                                      <option value="ST">São Tomé and Príncipe</option>
                                                      <option value="BL">Saint Barthélemy</option>
                                                      <option value="SH">Saint Helena</option>
                                                      <option value="KN">Saint Kitts and Nevis</option>
                                                      <option value="LC">Saint Lucia</option>
                                                      <option value="SX">Saint Martin (Dutch part)</option>
                                                      <option value="MF">Saint Martin (French part)</option>
                                                      <option value="PM">Saint Pierre and Miquelon</option>
                                                      <option value="VC">Saint Vincent and the Grenadines</option>
                                                      <option value="SM">San Marino</option>
                                                      <option value="SA">Saudi Arabia</option>
                                                      <option value="SN">Senegal</option>
                                                      <option value="RS">Serbia</option>
                                                      <option value="SC">Seychelles</option>
                                                      <option value="SL">Sierra Leone</option>
                                                      <option value="SG">Singapore</option>
                                                      <option value="SK">Slovakia</option>
                                                      <option value="SI">Slovenia</option>
                                                      <option value="SB">Solomon Islands</option>
                                                      <option value="SO">Somalia</option>
                                                      <option value="ZA">South Africa</option>
                                                      <option value="GS">South Georgia/Sandwich Islands</option>
                                                      <option value="KR">South Korea</option>
                                                      <option value="SS">South Sudan</option>
                                                      <option value="ES">Spain</option>
                                                      <option value="LK">Sri Lanka</option>
                                                      <option value="SD">Sudan</option>
                                                      <option value="SR">Suriname</option>
                                                      <option value="SJ">Svalbard and Jan Mayen</option>
                                                      <option value="SZ">Swaziland</option>
                                                      <option value="SE">Sweden</option>
                                                      <option value="CH">Switzerland</option>
                                                      <option value="SY">Syria</option>
                                                      <option value="TW">Taiwan</option>
                                                      <option value="TJ">Tajikistan</option>
                                                      <option value="TZ">Tanzania</option>
                                                      <option value="TH">Thailand</option>
                                                      <option value="TL">Timor-Leste</option>
                                                      <option value="TG">Togo</option>
                                                      <option value="TK">Tokelau</option>
                                                      <option value="TO">Tonga</option>
                                                      <option value="TT">Trinidad and Tobago</option>
                                                      <option value="TN">Tunisia</option>
                                                      <option value="TR">Turkey</option>
                                                      <option value="TM">Turkmenistan</option>
                                                      <option value="TC">Turks and Caicos Islands</option>
                                                      <option value="TV">Tuvalu</option>
                                                      <option value="UG">Uganda</option>
                                                      <option value="UA">Ukraine</option>
                                                      <option value="AE">United Arab Emirates</option>
                                                      <option value="GB" selected="selected">United Kingdom (UK)</option>
                                                      <option value="US">United States (US)</option>
                                                      <option value="UY">Uruguay</option>
                                                      <option value="UZ">Uzbekistan</option>
                                                      <option value="VU">Vanuatu</option>
                                                      <option value="VA">Vatican</option>
                                                      <option value="VE">Venezuela</option>
                                                      <option value="VN">Vietnam</option>
                                                      <option value="WF">Wallis and Futuna</option>
                                                      <option value="EH">Western Sahara</option>
                                                      <option value="WS">Western Samoa</option>
                                                      <option value="YE">Yemen</option>
                                                      <option value="ZM">Zambia</option>
                                                      <option value="ZW">Zimbabwe</option>

                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                  <label>Region / State *</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                              <div class="form-group">
                                                  <label>Post Code *</label>
                                                  <input type="text" class="form-control">
                                              </div>

                                              <button type="submit" class="btn btn-small btn-dark-solid">Get Quotes</button>
                                          </form>
                                    </dd> -->
                              </dl>
                              <!-- accordion 2 end-->

                              <!-- <ul class="portfolio-meta m-bot-30 pull-right">
                                  <li><span> Sub Total </span> $ 2404.00</li>
                                  <li><span> Eco Tax (-2.00)	 </span>  $ 40.00 </li>
                                  <li><span> VAT (20%) </span> $ 498.00 </li>
                                  <li><span><strong class="cart-total"> Total </strong></span> <strong class="cart-total">$ 2830.00 </strong></li>
                              </ul> -->

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
