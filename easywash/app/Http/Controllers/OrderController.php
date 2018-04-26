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
      $prices = DB::table('pricings')->where('pricings.sp_id', '=', $sp_id)->get();

      $drycleaning = drycleaning::whereHas('carts',
       function($query) use($id) {
          $query->where('carts.id', $id);
      })->get();

      $tailoring = tailoring::whereHas('carts',
       function($query) use($id) {
          $query->where('carts.id', $id);
      })->get();



      return view('sp.orders.bill')->with('cart', $cart)->with('services', $services)->with('prices', $prices)->with('tailoring', $tailoring)->with('drycleaning', $drycleaning);

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
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, Order $order)
    {
        //
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
