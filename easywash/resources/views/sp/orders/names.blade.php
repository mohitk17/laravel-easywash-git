

<option value="{{$prices->Regular_Laundry}}">Regular_Laundry</option>

<option value="{{$prices->Bedding_Mattress_Duvet_Cover}}">Bedding_Mattress_Duvet_Cover</option>
<option value="{{$prices->Bedding_Comforter_laundry}}">Bedding_Comforter_laundry</option>
<option value="{{$prices->Bedding_Blanket_Throw}}">Bedding_Blanket_Throw</option>
<option value="{{$prices->Bedding_Pillow_laundry}}">Bedding_Pillow_laundry</option>
<option value="{{$prices->Bath_Mat_laundry}}">Bath_Mat_laundry</option>
<option value="{{$prices->Every_Hang_Dry_Item}}">Every_Hang_Dry_Item</option>
<option value="{{$prices->Dress}}">Dress</option>
<option value="{{$prices->Shirt}}">Shirt</option>
<option value="{{$prices->Sweater}}">Sweater</option>
<option value="{{$prices->Dress_Childrens}}">Dress_Childrens</option>
<option value="{{$prices->Skirt}}">Skirt</option>
<option value="{{$prices->Tie}}">Tie</option>
<option value="{{$prices->Shorts}}">Shorts</option>
<option value="{{$prices->Jumpsuit}}">Jumpsuit</option>
<option value="{{$prices->Gown}}">Gown</option>
<option value="{{$prices->Mittens}}">Mittens</option>
<option value="{{$prices->Leggings}}">Leggings</option>
<option value="{{$prices->Bath_Mat_dry_clean}}">Bath_Mat_dry_clean</option>
<option value="{{$prices->Jacket_Down}}">Jacket_Down</option>
<option value="{{$prices->Nightgown}}">Nightgown</option>
<option value="{{$prices->Cummerbund}}">Cummerbund</option>
<option value="{{$prices->Bathing_suit_one_piece}}">Bathing_suit_one_piece</option>
<option value="{{$prices->Bathing_suit_Bottom}}">Bathing_suit_Bottom</option>
<option value="{{$prices->Cardigan}}">Cardigan</option>
<option value="{{$prices->Tank_Top}}">Tank_Top</option>
<option value="{{$prices->Tablecloth}}">Tablecloth</option>
<option value="{{$prices->Robe}}">Robe</option>
<option value="{{$prices->Curtains_Light}}">Curtains_Light</option>
<option value="{{$prices->Coat_Pea_Coat}}">Coat_Pea_Coat</option>
<option value="{{$prices->Coat_Overcoat}}">Coat_Overcoat</option>
<option value="{{$prices->two_Piece_Suit}}">two_Piece_Suit</option>
<option value="{{$prices->Romper}}">Romper</option>
<option value="{{$prices->Cushion_Cover}}">Cushion_Cover</option>
<option value="{{$prices->Blouse}}">Blouse</option>
<option value="{{$prices->Cocktail_Dress}}">Cocktail_Dress</option>
<option value="{{$prices->Pants}}">Pants</option>
<option value="{{$prices->Jeans}}">Jeans</option>
<option value="{{$prices->Suit_Jacket}}">Suit_Jacket</option>
<option value="{{$prices->Scarf}}">Scarf</option>
<option value="{{$prices->Polo_Sport_Shirt}}">Polo_Sport_Shirt</option>
<option value="{{$prices->Vest}}">Vest</option>
<option value="{{$prices->Gloves}}">Gloves</option>
<option value="{{$prices->Shawl}}">Shawl</option>
<option value="{{$prices->Napkins}}">Napkins</option>
<option value="{{$prices->Lab_Coat}}">Lab_Coat</option>
<option value="{{$prices->Sweatshirt}}">Sweatshirt</option>
<option value="{{$prices->Overalls}}">Overalls</option>
<option value="{{$prices->Tuxedo}}">Tuxedo</option>
<option value="{{$prices->Jersey}}">Jersey</option>
<option value="{{$prices->Hoodie}}">Hoodie</option>
<option value="{{$prices->Bra}}">Bra</option>
<option value="{{$prices->Belt}}">Belt</option>
<option value="{{$prices->Jacket}}">Jacket</option>
<option value="{{$prices->Coat}}">Coat</option>
<option value="{{$prices->Coat_3_4_Coat}}">Coat_3_4_Coat</option>
<option value="{{$prices->Coat_Down}}">Coat_Down</option>
<option value="{{$prices->two_Piece_Skirt_Suit}}">two_Piece_Skirt_Suit</option>
<option value="{{$prices->Bedding_Pillow_Case}}">Bedding_Pillow_Case</option>
<option value="{{$prices->Bedding_Blanket}}">Bedding_Blanket</option>
<option value="{{$prices->Bedding_Bed_Sheet}}">Bedding_Bed_Sheet</option>
<option value="{{$prices->Bedding_Pillow_dry_clean}}">Bedding_Pillow_dry_clean</option>
<option value="{{$prices->Bathing_suit_Top}}">Bathing_suit_Top</option>
<option value="{{$prices->Bedding_Down_Comforter}}">Bedding_Down_Comforter</option>
<option value="{{$prices->Bedding_Comforter_dry_clean}}">Bedding_Comforter_dry_clean</option>


<option value="{{$prices->Hemming}}">Hemming</option>
<option value="{{$prices->Hemming_Pant}}">Hemming_Pant</option>
<option value="{{$prices->Hemming_Sleeve}}">Hemming_Sleeve</option>
<option value="{{$prices->Taper}}">Taper</option>
<option value="{{$prices->Button}}">Button</option>
<option value="{{$prices->Patch}}">Patch</option>
<option value="{{$prices->Zipper}}">Zipper</option>















<tbody>
  @foreach($drycleaning as $drycleaning)
      <tr>
        <td class=""><input type="text" size="5" name="dc_{{$drycleaning->id}}"></td>
        <td class="">
                    <div><div class="form-group">
                      <select id="projectinput5" name="p_dc_{{$drycleaning->id}}" class="form-control">
                        <option value="" selected>Price of</option>
                        <option name="p_dc_{{$drycleaning->id}}" value="{{$prices->shirt}}">shirt</option>
                        <option name="p_dc_{{$drycleaning->id}}" value="{{$prices->pant}}">pant</option>
                        <option name="p_dc_{{$drycleaning->id}}" value="{{$prices->Bathtoping_suit_Bottom}}">top</option>
                      </select>
                    </div>
                  </div>
        </td>
      </tr>
@endforeach
</tbody>



public function store(Request $request,$id,$service_id,$sp_id)
{

  $bill = Bill::create([
  'waf_1' => $request->waf_1,
  'dc_1' => $request->dc_1,
  'dc_2' => $request->dc_2,
  'dc_3' => $request->dc_3,
  ...
  'p_dc_1' => $request->p_dc_1,
  'p_dc_2' => $request->p_dc_2,
  'p_dc_3' => $request->p_dc_3,
  ...
  ]);

  $bill->save();

  Session::flash('success', 'You successfully updated the nill');
  return redirect()->route('sp.orders.index');


























  @if($bill->count()>0)
<!-- Update start -->
  <form class="" action="{{ route('sp.orders.bill.store', ['id' => $cart->id, 'service_id'=>$cart->service_id, 'sp_id'=>$cart->sp_id])}}" method="post">

    {{ csrf_field() }}
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
                    @else
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="thead-default">
                                <tr>
                                    <th class="">Quantity</th><th class="">Times</th>
                                    <th class="">Price</th><th class="">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                  <tr>
                                    @foreach($bill as $bill)
                                    <td class=""><b><input type="text" size="5" name="waf_1" value="{{$bill->waf_1}}"></b> pounds</td>
                                    @endforeach
                                    <td class="">X</td>
                                    <td class="">$<b>{{$bill->p_waf_1}}</b></td>
                                    <td class="">
                                      @php
                                      $a1= $bill->waf_1;
                                      $b1= $bill->p_waf_1;
                                      $c1= $a1*$b1;
                                      @endphp

                                      <input type="text" size="5" name="f_waf_1" value="{{$c1}}">

                                    </td>
                                  </tr>
                            </tbody>
                        </table>
                    </div>
                    @endif

                    <!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->

                    <br>
                    <h5>Dry Cleaning: </h5>
                    @if ($cart->dryclean == "none")
                      No dry clean service requested yet.
                    @elseif ($cart->dryclean == "entire")
                        Whole bag will be dry cleaned
                    @else
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-default">
                                    <tr>
                                        <th class="">Item</th>
                                        <th class="">Times</th>
                                        <th class="">Price</th>
                                        <th class="">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($drycleaning as $drycleaning)
                                      <tr>
                                        <td class="">
                                        <input type="text" size="5" name="dc[{{ $drycleaning->id }}]" value="{{ $bill->{ 'dc_' . $drycleaning->id } }}">
                                          <b>{{$drycleaning->name}}</b><br>
                                        </td>
                                        <td class="">X</td>
                                        <td class="">
                                                    <div>
                                										<div class="form-group">
                                											<select id="projectinput5" name="p_dc[{{ $drycleaning->id }}]" class="form-control">
                                												<option value="" selected>Price of</option>

                                                        <option value="{{$prices->Bath_Mat_dry_clean}}">Bath_Mat_dry_clean</option>
                                                        <option value="{{$prices->Bath_Mat_laundry}}">Bath_Mat_laundry</option>
                                                        <option value="{{$prices->Bathing_suit_Bottom}}">Bathing_suit_Bottom</option>
                                                        <option value="{{$prices->Bathing_suit_Top}}">Bathing_suit_Top</option>
                                                        <option value="{{$prices->Bathing_suit_one_piece}}">Bathing_suit_one_piece</option>
                                                        <option value="{{$prices->Bedding_Bed_Sheet}}">Bedding_Bed_Sheet</option>
                                                        <option value="{{$prices->Bedding_Blanket_Throw}}">Bedding_Blanket_Throw</option>
                                                        <option value="{{$prices->Bedding_Blanket}}">Bedding_Blanket</option>
                                                        <option value="{{$prices->Bedding_Comforter_dry_clean}}">Bedding_Comforter_dry_clean</option>
                                                        <option value="{{$prices->Bedding_Comforter_laundry}}">Bedding_Comforter_laundry</option>
                                                        <option value="{{$prices->Bedding_Down_Comforter}}">Bedding_Down_Comforter</option>
                                                        <option value="{{$prices->Bedding_Mattress_Duvet_Cover}}">Bedding_Mattress_Duvet_Cover</option>
                                                        <option value="{{$prices->Bedding_Pillow_Case}}">Bedding_Pillow_Case</option>
                                                        <option value="{{$prices->Bedding_Pillow_dry_clean}}">Bedding_Pillow_dry_clean</option>
                                                        <option value="{{$prices->Bedding_Pillow_laundry}}">Bedding_Pillow_laundry</option>
                                                        <option value="{{$prices->Belt}}">Belt</option>
                                                        <option value="{{$prices->Blouse}}">Blouse</option>
                                                        <option value="{{$prices->Bra}}">Bra</option>
                                                        <option value="{{$prices->Cardigan}}">Cardigan</option>
                                                        <option value="{{$prices->Coat_3_4_Coat}}">Coat_3_4_Coat</option>
                                                        <option value="{{$prices->Coat_Down}}">Coat_Down</option>
                                                        <option value="{{$prices->Coat_Overcoat}}">Coat_Overcoat</option>
                                                        <option value="{{$prices->Coat_Pea_Coat}}">Coat_Pea_Coat</option>
                                                        <option value="{{$prices->Coat}}">Coat</option>
                                                        <option value="{{$prices->Cocktail_Dress}}">Cocktail_Dress</option>
                                                        <option value="{{$prices->Cummerbund}}">Cummerbund</option>
                                                        <option value="{{$prices->Curtains_Light}}">Curtains_Light</option>
                                                        <option value="{{$prices->Cushion_Cover}}">Cushion_Cover</option>
                                                        <option value="{{$prices->Dress_Childrens}}">Dress_Childrens</option>
                                                        <option value="{{$prices->Dress}}">Dress</option>
                                                        <option value="{{$prices->Every_Hang_Dry_Item}}">Every_Hang_Dry_Item</option>
                                                        <option value="{{$prices->Gloves}}">Gloves</option>
                                                        <option value="{{$prices->Gown}}">Gown</option>
                                                        <option value="{{$prices->Hoodie}}">Hoodie</option>
                                                        <option value="{{$prices->Jacket_Down}}">Jacket_Down</option>
                                                        <option value="{{$prices->Jacket}}">Jacket</option>
                                                        <option value="{{$prices->Jeans}}">Jeans</option>
                                                        <option value="{{$prices->Jersey}}">Jersey</option>
                                                        <option value="{{$prices->Jumpsuit}}">Jumpsuit</option>
                                                        <option value="{{$prices->Lab_Coat}}">Lab_Coat</option>
                                                        <option value="{{$prices->Leggings}}">Leggings</option>
                                                        <option value="{{$prices->Mittens}}">Mittens</option>
                                                        <option value="{{$prices->Napkins}}">Napkins</option>
                                                        <option value="{{$prices->Nightgown}}">Nightgown</option>
                                                        <option value="{{$prices->Overalls}}">Overalls</option>
                                                        <option value="{{$prices->Pants}}">Pants</option>
                                                        <option value="{{$prices->Polo_Sport_Shirt}}">Polo_Sport_Shirt</option>
                                                        <option value="{{$prices->Robe}}">Robe</option>
                                                        <option value="{{$prices->Romper}}">Romper</option>
                                                        <option value="{{$prices->Scarf}}">Scarf</option>
                                                        <option value="{{$prices->Shawl}}">Shawl</option>
                                                        <option value="{{$prices->Shirt}}">Shirt</option>
                                                        <option value="{{$prices->Shorts}}">Shorts</option>
                                                        <option value="{{$prices->Skirt}}">Skirt</option>
                                                        <option value="{{$prices->Suit_Jacket}}">Suit_Jacket</option>
                                                        <option value="{{$prices->Sweater}}">Sweater</option>
                                                        <option value="{{$prices->Sweatshirt}}">Sweatshirt</option>
                                                        <option value="{{$prices->Tablecloth}}">Tablecloth</option>
                                                        <option value="{{$prices->Tank_Top}}">Tank_Top</option>
                                                        <option value="{{$prices->Tie}}">Tie</option>
                                                        <option value="{{$prices->Tuxedo}}">Tuxedo</option>
                                                        <option value="{{$prices->Vest}}">Vest</option>
                                                        <option value="{{$prices->two_Piece_Skirt_Suit}}">two_Piece_Skirt_Suit</option>
                                                        <option value="{{$prices->two_Piece_Suit}}">two_Piece_Suit</option>
                                											</select>
                                										</div>
                                									</div>
                                        </td>
                                        <td class="">
                                          @php
                                          $a2= $bill->{'dc_'.$drycleaning->id};
                                          $b2= $bill->{'p_dc_'.$drycleaning->id};
                                          $c2= $a2*$b2;
                                          @endphp

                                          <input type="text" size="5" name="f_dc_{{$drycleaning->id}}" value="{{$c2}}">
                                      </tr>
                                      @endforeach
                                      <tr>
                                      </tr>
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
                                        <th class="">Item</th>
                                        <th class="">Times</th>
                                        <th class="">Price</th>
                                        <th class="">Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                  @foreach( $tailoring as $tailoring )
                                      <tr>
                                        <td class="">

                                        <input type="text" size="5" name="t[{{ $tailoring->id }}]" value="{{$bill->{'t_'.$tailoring->id} }}">
                                        <b>{{$tailoring->name}}</b><br></td>

                                        <td class="">X</td>
                                        <td>
                                          <div class="">
                                          <div class="form-group">
                                            <select id="projectinput5" name="interested" name="p_t[{{ $tailoring->id }}]" class="form-control">
                                              <option value="" selected>Price of</option>
                                              <option value="{{$prices->Hemming}}">Hemming</option>
                                              <option value="{{$prices->Hemming_Pant}}">Hemming_Pant</option>
                                              <option value="{{$prices->Hemming_Sleeve}}">Hemming_Sleeve</option>
                                              <option value="{{$prices->Taper}}">Taper</option>
                                              <option value="{{$prices->Button}}">Button</option>
                                              <option value="{{$prices->Patch}}">Patch</option>
                                              <option value="{{$prices->Zipper}}">Zipper</option>

                                            </select>
                                          </div>
                                            </div>
                                        </td>
                                        <td class="">

                                          @php
                                          $a3= $bill->{'t_'.$tailoring->id};
                                          $b3= $bill->{'p_t_'.$tailoring->id};
                                          $c3= $a3*$b3;
                                          @endphp

                                            <input type="text" size="5" name="f_t_{{$tailoring->id}}" value="{{$c3}}">

                                        </td>
                                      </tr>
                                  @endforeach
                                  <tr>
                                    @php

                                    $f1 = $bill->f_waf_1;
                                    $f2 = $bill->f_dc_1;
                                    $f3 = $bill->f_dc_2;
                                    $f4 = $bill->f_dc_3;
                                    $f5= $bill->f_dc_4;
                                    $f6 = $bill->f_dc_5;
                                    $f7 = $bill->f_dc_6;
                                    $f8 = $bill->f_dc_7;
                                    $f9 = $bill->f_dc_8;
                                    $f10 = $bill->f_dc_9;
                                    $f11 = $bill->f_dc_10;
                                    $f12 = $bill->f_dc_11;
                                    $f13 = $bill->f_dc_12;
                                    $f14 = $bill->f_dc_13;
                                    $f15 = $bill->f_dc_14;
                                    $f16 = $bill->f_dc_15;
                                    $f17 = $bill->f_dc_16;
                                    $f18 = $bill->f_dc_17;
                                    $f19 = $bill->f_dc_18;
                                    $f20 = $bill->f_dc_19;
                                    $f21 = $bill->f_dc_20;
                                    $f22 = $bill->f_dc_21;
                                    $f23 = $bill->f_dc_22;
                                    $f24 = $bill->f_dc_23;
                                    $f25 = $bill->f_dc_24;
                                    $f26 = $bill->f_dc_25;
                                    $f27 = $bill->f_dc_26;
                                    $f28 = $bill->f_dc_27;
                                    $f29 = $bill->f_dc_28;
                                    $f30 = $bill->f_dc_29;
                                    $f31 = $bill->f_dc_30;
                                    $f32 = $bill->f_dc_31;
                                    $f33 = $bill->f_dc_32;
                                    $f34 = $bill->f_dc_33;
                                    $f35 = $bill->f_dc_34;
                                    $f36 = $bill->f_dc_35;
                                    $f37 = $bill->f_dc_36;
                                    $f38 = $bill->f_dc_37;
                                    $f39 = $bill->f_dc_38;
                                    $f40 = $bill->f_dc_39;
                                    $f41 = $bill->f_dc_40;
                                    $f42 = $bill->f_dc_41;
                                    $f43 = $bill->f_dc_42;
                                    $f44 = $bill->f_dc_43;
                                    $f45 = $bill->f_dc_44;
                                    $f46 = $bill->f_dc_45;
                                    $f47 = $bill->f_dc_46;
                                    $f48 = $bill->f_dc_47;
                                    $f49 = $bill->f_dc_48;
                                    $f50 = $bill->f_dc_49;
                                    $f51 = $bill->f_dc_50;
                                    $f52 = $bill->f_dc_51;
                                    $f53 = $bill->f_dc_52;
                                    $f54 = $bill->f_dc_53;
                                    $f55 = $bill->f_dc_54;
                                    $f56 = $bill->f_dc_55;
                                    $f57 = $bill->f_dc_56;
                                    $f58 = $bill->f_dc_57;
                                    $f59 = $bill->f_dc_58;
                                    $f60 = $bill->f_dc_59;

                                    $f62 = $bill->f_t_1;
                                    $f63 = $bill->f_t_2;
                                    $f64 = $bill->f_t_3;
                                    $f65 = $bill->f_t_4;
                                    $f66 = $bill->f_t_5;
                                    $f67 = $bill->f_t_6;
                                    $f68 = $bill->f_t_7;
                                    $f69 = $bill->f_t_8;
                                    $final = $f1 + $f2 + $f3 + $f4 + $f5 + $f6 +$f7 + $f8 +$f9 + $f10 +
                                            $f11 + $f12 + $f13 + $f14 + $f15 + $f16 +$f17 + $f18 +$f19 + $f20 +
                                            $f21 + $f22 + $f23 + $f24 + $f25 + $f26 +$f27 + $f28 +$f29 + $f30 +
                                            $f31 + $f32 + $f33 + $f34 + $f35 + $f36 +$f37 + $f38 +$f39 + $f40 +
                                            $f41 + $f42 + $f43 + $f44 + $f45 + $f46 +$f47 + $f48 +$f49 + $f50 +
                                            $f51 + $f52 + $f53 + $f54 + $f55 + $f56 +$f57 + $f58 +$f59 + $f60 +
                                           $f62 + $f63 + $f64 + $f65 + $f66 +$f67 + $f68 +$f69;


                                    @endphp
    {{$final}}                                </tr>
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
      </div>

      <div class="form-actions center">
        <!-- <button type="button" class="btn btn-warning mr-1">
          <i class="icon-cross2"></i> Cancel
        </button> -->
        <button type="submit" class="btn btn-primary">
          <i class="icon-check2"></i> Update Bill
        </button>
      </div>
  </form>
<!-- Update ends -->

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  @else
