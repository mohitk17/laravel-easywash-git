<?php

namespace App\Http\Controllers;

use App\Order;
use App\cart;
use App\User;
use App\Service;
use App\pricings;
use App\Category;
use App\Workingday;
use App\drycleaning;
use App\tailoring;
use App\Bill;

use Session;
use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:sp');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cart = DB::table('carts')->where('sp_id',auth()->id())->get();
          return view('sp.orders.index')->with('cart', $cart);

    }

    public function view($id,$service_id,$sp_id)
    {
      $cart = DB::table('carts')->where('sp_id',auth()->id())->where('carts.id', '=', $id)->get();
      $services = DB::table('services')->where('services.id', '=' , $service_id)->get();
      $prices = DB::table('pricings')->where('pricings.sp_id', '=', $sp_id)->get();

      $drycleaning = drycleaning::whereHas('carts',
       function($query) use($id) {
          $query->where('carts.id', $id);
      })->get();

      $tailoring = tailoring::whereHas('carts',
       function($query) use($id) {
          $query->where('carts.id', $id);
      })->get();





      return view('sp.orders.view')->with('cart', $cart)->with('services', $services)->with('prices', $prices)->with('tailoring', $tailoring)->with('drycleaning', $drycleaning);

    }

    public function bill($id,$service_id,$sp_id)
    {

      $cart = DB::table('carts')->where('sp_id',auth()->id())->where('carts.id', '=', $id)->get();
      $services = DB::table('services')->where('services.id', '=' , $service_id)->get();
      $prices = DB::table('pricings')->where('pricings.sp_id', '=', $sp_id)->first();
      $bill=DB::table('bills')->where('bills.sp_id','=', auth()->id() )->where('bills.cart_id','=', $id)->get();

      $drycleaning = drycleaning::whereHas('carts',
       function($query) use($id) {
          $query->where('carts.id', $id);
      })->get();

      $tailoring = tailoring::whereHas('carts',
       function($query) use($id) {
          $query->where('carts.id', $id);
      })->get();




      return view('sp.orders.bill')->with('bill', $bill)->with('cart', $cart)->with('services', $services)->with('prices', $prices)->with('tailoring', $tailoring)->with('drycleaning', $drycleaning);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id,$service_id,$sp_id)
    {

          $data = array();
          $data['waf_1'] = $request->waf_1;
          $data['p_waf_1'] = $request->p_waf_1;

          $data['f_dc_1'] = $request->f_dc_1;
          $data['f_dc_2'] = $request->f_dc_2;
          $data['f_dc_3'] = $request->f_dc_3;
          $data['f_dc_4'] = $request->f_dc_4;
          $data['f_dc_5'] = $request->f_dc_5;
          $data['f_dc_6'] = $request->f_dc_6;
          $data['f_dc_7'] = $request->f_dc_7;
          $data['f_dc_8'] = $request->f_dc_8;
          $data['f_dc_9'] = $request->f_dc_9;
          $data['f_dc_10'] = $request->f_dc_10;

          $data['f_dc_11'] = $request->f_dc_11;
          $data['f_dc_12'] = $request->f_dc_12;
          $data['f_dc_13'] = $request->f_dc_13;
          $data['f_dc_14'] = $request->f_dc_14;
          $data['f_dc_15'] = $request->f_dc_15;
          $data['f_dc_16'] = $request->f_dc_16;
          $data['f_dc_17'] = $request->f_dc_17;
          $data['f_dc_18'] = $request->f_dc_18;
          $data['f_dc_19'] = $request->f_dc_19;
          $data['f_dc_20'] = $request->f_dc_20;

          $data['f_dc_21'] = $request->f_dc_21;
          $data['f_dc_22'] = $request->f_dc_22;
          $data['f_dc_23'] = $request->f_dc_23;
          $data['f_dc_24'] = $request->f_dc_24;
          $data['f_dc_25'] = $request->f_dc_25;
          $data['f_dc_26'] = $request->f_dc_26;
          $data['f_dc_27'] = $request->f_dc_27;
          $data['f_dc_28'] = $request->f_dc_28;
          $data['f_dc_29'] = $request->f_dc_29;
          $data['f_dc_30'] = $request->f_dc_30;

          $data['f_dc_31'] = $request->f_dc_31;
          $data['f_dc_32'] = $request->f_dc_32;
          $data['f_dc_33'] = $request->f_dc_33;
          $data['f_dc_34'] = $request->f_dc_34;
          $data['f_dc_35'] = $request->f_dc_35;
          $data['f_dc_36'] = $request->f_dc_36;
          $data['f_dc_37'] = $request->f_dc_37;
          $data['f_dc_38'] = $request->f_dc_38;
          $data['f_dc_39'] = $request->f_dc_39;
          $data['f_dc_40'] = $request->f_dc_40;

          $data['f_dc_41'] = $request->f_dc_41;
          $data['f_dc_42'] = $request->f_dc_42;
          $data['f_dc_43'] = $request->f_dc_43;
          $data['f_dc_44'] = $request->f_dc_44;
          $data['f_dc_45'] = $request->f_dc_45;
          $data['f_dc_46'] = $request->f_dc_46;
          $data['f_dc_47'] = $request->f_dc_47;
          $data['f_dc_48'] = $request->f_dc_48;
          $data['f_dc_49'] = $request->f_dc_49;
          $data['f_dc_50'] = $request->f_dc_50;

          $data['f_dc_51'] = $request->f_dc_51;
          $data['f_dc_52'] = $request->f_dc_52;
          $data['f_dc_53'] = $request->f_dc_53;
          $data['f_dc_54'] = $request->f_dc_54;
          $data['f_dc_55'] = $request->f_dc_55;
          $data['f_dc_56'] = $request->f_dc_56;
          $data['f_dc_57'] = $request->f_dc_57;
          $data['f_dc_58'] = $request->f_dc_58;
          $data['f_dc_59'] = $request->f_dc_59;
          $data['f_dc_60'] = $request->f_dc_60;

          $data['f_t_1'] = $request->f_t_1;
          $data['f_t_2'] = $request->f_t_2;
          $data['f_t_3'] = $request->f_t_3;
          $data['f_t_4'] = $request->f_t_4;
          $data['f_t_5'] = $request->f_t_5;
          $data['f_t_6'] = $request->f_t_6;
          $data['f_t_7'] = $request->f_t_7;
          $data['f_t_8'] = $request->f_t_8;

          foreach ($request->dc as $key => $value)
                  $data['dc_'.$key] = $value;

          foreach ($request->p_dc as $key => $value)
                  $data['p_dc_'.$key] = $value;

          foreach ($request->t as $key => $value)
                  $data['t_'.$key] = $value;

          foreach ($request->p_t as $key => $value)
                  $data['p_t_'.$key] = $value;



                  $bill = Bill::create($data);
                  $bill->cart_id=$id;
                  $bill->sp_id= $sp_id;
                  $bill->service_id= $service_id;
                  $bill->save();



          return redirect()->route('sp.orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order,$id,$service_id,$sp_id)
    {


  $bill = Bill::find($id);
      $data = array();
      $data['waf_1'] = $request->waf_1;
      $data['p_waf_1'] = $request->p_waf_1;
      $data['f_dc_1'] = $request->f_dc_1;
      $data['f_dc_2'] = $request->f_dc_2;
      $data['f_dc_3'] = $request->f_dc_3;
      $data['f_dc_4'] = $request->f_dc_4;
      $data['f_dc_5'] = $request->f_dc_5;
      $data['f_dc_6'] = $request->f_dc_6;
      $data['f_dc_7'] = $request->f_dc_7;
      $data['f_dc_8'] = $request->f_dc_8;
      $data['f_dc_9'] = $request->f_dc_9;
      $data['f_dc_10'] = $request->f_dc_10;
      $data['f_dc_11'] = $request->f_dc_11;
      $data['f_dc_12'] = $request->f_dc_12;
      $data['f_dc_13'] = $request->f_dc_13;
      $data['f_dc_14'] = $request->f_dc_14;
      $data['f_dc_15'] = $request->f_dc_15;
      $data['f_dc_16'] = $request->f_dc_16;
      $data['f_dc_17'] = $request->f_dc_17;
      $data['f_dc_18'] = $request->f_dc_18;
      $data['f_dc_19'] = $request->f_dc_19;
      $data['f_dc_20'] = $request->f_dc_20;
      $data['f_dc_21'] = $request->f_dc_21;
      $data['f_dc_22'] = $request->f_dc_22;
      $data['f_dc_23'] = $request->f_dc_23;
      $data['f_dc_24'] = $request->f_dc_24;
      $data['f_dc_25'] = $request->f_dc_25;
      $data['f_dc_26'] = $request->f_dc_26;
      $data['f_dc_27'] = $request->f_dc_27;
      $data['f_dc_28'] = $request->f_dc_28;
      $data['f_dc_29'] = $request->f_dc_29;
      $data['f_dc_30'] = $request->f_dc_30;
      $data['f_dc_31'] = $request->f_dc_31;
      $data['f_dc_32'] = $request->f_dc_32;
      $data['f_dc_33'] = $request->f_dc_33;
      $data['f_dc_34'] = $request->f_dc_34;
      $data['f_dc_35'] = $request->f_dc_35;
      $data['f_dc_36'] = $request->f_dc_36;
      $data['f_dc_37'] = $request->f_dc_37;
      $data['f_dc_38'] = $request->f_dc_38;
      $data['f_dc_39'] = $request->f_dc_39;
      $data['f_dc_40'] = $request->f_dc_40;
      $data['f_dc_41'] = $request->f_dc_41;
      $data['f_dc_42'] = $request->f_dc_42;
      $data['f_dc_43'] = $request->f_dc_43;
      $data['f_dc_44'] = $request->f_dc_44;
      $data['f_dc_45'] = $request->f_dc_45;
      $data['f_dc_46'] = $request->f_dc_46;
      $data['f_dc_47'] = $request->f_dc_47;
      $data['f_dc_48'] = $request->f_dc_48;
      $data['f_dc_49'] = $request->f_dc_49;
      $data['f_dc_50'] = $request->f_dc_50;
      $data['f_dc_51'] = $request->f_dc_51;
      $data['f_dc_52'] = $request->f_dc_52;
      $data['f_dc_53'] = $request->f_dc_53;
      $data['f_dc_54'] = $request->f_dc_54;
      $data['f_dc_55'] = $request->f_dc_55;
      $data['f_dc_56'] = $request->f_dc_56;
      $data['f_dc_57'] = $request->f_dc_57;
      $data['f_dc_58'] = $request->f_dc_58;
      $data['f_dc_59'] = $request->f_dc_59;
      $data['f_dc_60'] = $request->f_dc_60;
      $data['f_t_1'] = $request->f_t_1;
      $data['f_t_2'] = $request->f_t_2;
      $data['f_t_3'] = $request->f_t_3;
      $data['f_t_4'] = $request->f_t_4;
      $data['f_t_5'] = $request->f_t_5;
      $data['f_t_6'] = $request->f_t_6;
      $data['f_t_7'] = $request->f_t_7;
      $data['f_t_8'] = $request->f_t_8;

      foreach ($request->dc as $key => $value)
              $data['dc_'.$key] = $value;

      foreach ($request->p_dc as $key => $value)
              $data['p_dc_'.$key] = $value;

      foreach ($request->t as $key => $value)
              $data['t_'.$key] = $value;

      foreach ($request->p_t as $key => $value)
              $data['p_t_'.$key] = $value;


      return redirect()->route('sp.orders.bill');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
