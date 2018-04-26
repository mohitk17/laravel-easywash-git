<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\Pricing;
use App\service;
use App\Category;
use App\Workingday;
use App\Schedule;
use App\Comment;
use App\cart;
use App\drycleaning;
use App\tailoring;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($sp_id, $service_id)
    {
      $services = DB::table('services')->where('services.id', '=' , $service_id)->get();
      $drycleaning = drycleaning::all();
      $tailoring = tailoring::all();
      $rating = DB::table('comments')->where('comments.service_id', '=' , $service_id )->avg('rating');
      $avg_rating = round($rating,2);

      // $cart = DB::table('carts')->where('carts.service_id', '=' , $service_id)->where('carts.sp_id','=', $sp_id)->where('user_id', '=' , auth()->id())->get();

      return view('user.cart')->with('tailoring', $tailoring)->with('drycleaning', $drycleaning)->with('avg_rating', $avg_rating)->with('services', $services)->with('categories', Category::all())->with('$workingday', Workingday::all());
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
    public function store(Request $request,$sp_id, $service_id)
    {

      $this->validate($request, [
        'dos' => 'required',
        'dryclean' => 'required',
      ]);

      $cart = cart::create([
      'dos' => $request->dos,
      'laundry_weight' => $request->laundry_weight,
      'dryclean' => $request->dryclean,
      'voucher' => $request->voucher,
      ]);

      $cart->drycleanings()->attach($request->drycleaning_id);
      $cart->tailorings()->attach($request->tailoring_id);
      $cart->user_id=auth()->id();
      $cart->sp_id= $sp_id;
      $cart->service_id= $service_id;
      $cart->save();

      Session::flash('success','order requested successfully');

      $services = DB::table('services')->where('services.id', '=' , $service_id)->get();
      $drycleaning = drycleaning::all();
      $tailoring = tailoring::all();
      $rating = DB::table('comments')->where('comments.service_id', '=' , $service_id )->avg('rating');
      $avg_rating = round($rating,2);
      $carts = DB::table('carts')->where('carts.user_id', '=' , auth()->id())->orderBy('id', 'desc')->get();
      $currentuserid = Auth::user()->id;


      // dd($request->all());
      return view('user.orders')->with('carts', $carts)->with('tailoring', $tailoring)->with('drycleaning', $drycleaning)->with('avg_rating', $avg_rating)->with('services', $services)->with('categories', Category::all())->with('$workingday', Workingday::all());

    }

    public function orders(Request $request,$sp_id, $service_id)
    {
      $services = DB::table('services')->where('services.id', '=' , $service_id)->get();
      $drycleaning = drycleaning::all();
      $tailoring = tailoring::all();
      $rating = DB::table('comments')->where('comments.service_id', '=' , $service_id )->avg('rating');
      $avg_rating = round($rating,2);
      $carts = DB::table('carts')->where('carts.user_id', '=' , auth()->id())->orderBy('id', 'desc')->get();
      $currentuserid = Auth::user()->id;


      // dd($request->all());
      return view('user.orders')->with('carts', $carts)->with('tailoring', $tailoring)->with('drycleaning', $drycleaning)->with('avg_rating', $avg_rating)->with('services', $services)->with('categories', Category::all())->with('$workingday', Workingday::all());

    }

    public function orderdetails(Request $request,$sp_id, $service_id, $cart_id)
    {
      $services = DB::table('services')->where('services.id', '=' , $service_id)->get();
      $rating = DB::table('comments')->where('comments.service_id', '=' , $service_id )->avg('rating');
      $avg_rating = round($rating,2);
      $carts = DB::table('carts')->where('carts.user_id', '=' , auth()->id())->where('carts.id', '=', $cart_id)->get();
      $currentuserid = Auth::user()->id;
      $prices = DB::table('pricings')->where('pricings.sp_id', '=', $sp_id)->get();

      $drycleaning = drycleaning::whereHas('carts',
       function($query) use($cart_id) {
          $query->where('carts.id', $cart_id);
      })->get();

      $tailoring = tailoring::whereHas('carts',
       function($query) use($cart_id) {
          $query->where('carts.id', $cart_id);
      })->get();

      // dd($request->all());
      return view('user.orderdetails')->with('tailoring', $tailoring)->with('prices', $prices)->with('carts', $carts)->with('tailoring', $tailoring)->with('drycleaning', $drycleaning)->with('avg_rating', $avg_rating)->with('services', $services)->with('categories', Category::all())->with('$workingday', Workingday::all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        //
    }
}
