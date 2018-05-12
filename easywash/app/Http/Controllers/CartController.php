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
use Stripe\Stripe;
use Stripe\Charge;
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
      $prices = DB::table('pricings')->where('pricings.sp_id', '=', $sp_id)->get();


      // $cart = DB::table('carts')->where('carts.service_id', '=' , $service_id)->where('carts.sp_id','=', $sp_id)->where('user_id', '=' , auth()->id())->get();

      return view('user.cart')->with('prices', $prices)->with('tailoring', $tailoring)->with('drycleaning', $drycleaning)->with('avg_rating', $avg_rating)->with('services', $services)->with('categories', Category::all())->with('$workingday', Workingday::all());
    }


    public function index1($sp_id, $service_id)
    {

      $services = DB::table('services')->where('services.id', '=' , $service_id)->get();
      $drycleaning = drycleaning::all();
      $tailoring = tailoring::all();
      $rating = DB::table('comments')->where('comments.service_id', '=' , $service_id )->avg('rating');
      $avg_rating = round($rating,2);
      $prices = DB::table('pricings')->where('pricings.sp_id', '=', $sp_id)->get();
$cart = DB::table('carts')->latest()->first();
$total = $cart->q_Regular_Laundry * $prices->Regular_Laundry;


      // $cart = DB::table('carts')->where('carts.service_id', '=' , $service_id)->where('carts.sp_id','=', $sp_id)->where('user_id', '=' , auth()->id())->orderBy('id', 'desc')->take(1)->get();

      return view('user.cart1')->with('total', $total)->with('prices', $prices)->with('cart', $cart)->with('tailoring', $tailoring)->with('drycleaning', $drycleaning)->with('avg_rating', $avg_rating)->with('services', $services)->with('categories', Category::all())->with('$workingday', Workingday::all());
    }

    public function checkout()
    {
  }
  public function pay()
  {


\Stripe\Stripe::setApiKey("sk_test_uWBONOY1q6IySSReANhknbcO");
$token = request()->stripeToken;
$charge = \Stripe\Charge::create([
    'amount' => 11300,
    'currency' => 'usd',
    'description' => 'Payment for order to easywash',
    'source' => $token,
]);

dd('gotcha');
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
         'washandfold' => 'required',
         'tailoring' => 'required',
       ]);

       $cart = cart::create([
       'dos' => $request->dos,
       'washandfold' => $request->washandfold,
       'dryclean' => $request->dryclean,
       'tailoring' => $request->tailoring,
       'voucher' => $request->voucher,
       'qshirt' => $request->qshirt,

      'q_Regular_Laundry' => $request->q_Regular_Laundry,
      'q_Bedding_Mattress_Duvet_Cover' => $request->q_Bedding_Mattress_Duvet_Cover,
      'q_Bedding_Comforter_laundry' => $request->q_Bedding_Comforter_laundry,
      'q_Bedding_Blanket_Throw' => $request->q_Bedding_Blanket_Throw,
      'q_Bedding_Pillow_laundry' => $request->q_Bedding_Pillow_laundry,
      'q_Bath_Mat_laundry' => $request->q_Bath_Mat_laundry,
      'q_Every_Hang_Dry_Item' => $request->q_Every_Hang_Dry_Item,
      'q_Dress' => $request->q_Dress,
      'q_Shirt' => $request->q_Shirt,
      'q_Sweater' => $request->q_Sweater,
      'q_Dress_Childrens' => $request->q_Dress_Childrens,
      'q_Skirt' => $request->q_Skirt,
      'q_Tie' => $request->q_Tie,
      'q_Shorts' => $request->q_Shorts,
      'q_Jumpsuit' => $request->q_Jumpsuit,
      'q_Gown' => $request->q_Gown,
      'q_Mittens' => $request->q_Mittens,
      'q_Leggings' => $request->q_Leggings,
      'q_Bath_Mat_dry_clean' => $request->q_Bath_Mat_dry_clean,
      'q_Jacket_Down' => $request->q_Jacket_Down,
      'q_Nightgown' => $request->q_Nightgown,
      'q_Cummerbund' => $request->q_Cummerbund,
      'q_Bathing_suit_one_piece' => $request->q_Bathing_suit_one_piece,
      'q_Bathing_suit_Bottom' => $request->q_Bathing_suit_Bottom,
      'q_Cardigan' => $request->q_Cardigan,
      'q_Tank_Top' => $request->q_Tank_Top,
      'q_Tablecloth' => $request->q_Tablecloth,
      'q_Robe' => $request->q_Robe,
      'q_Curtains_Light' => $request->q_Curtains_Light,
      'q_Coat_Pea_Coat' => $request->q_Coat_Pea_Coat,
      'q_Coat_Overcoat' => $request->q_Coat_Overcoat,
      'q_two_Piece_Suit' => $request->q_two_Piece_Suit,
      'q_Romper' => $request->q_Romper,
      'q_Cushion_Cover' => $request->q_Cushion_Cover,
      'q_Blouse' => $request->q_Blouse,
      'q_Cocktail_Dress' => $request->q_Cocktail_Dress,
      'q_Pants' => $request->q_Pants,
      'q_Jeans' => $request->q_Jeans,
      'q_Suit_Jacket' => $request->q_Suit_Jacket,
      'q_Scarf' => $request->q_Scarf,
      'q_Polo_Sport_Shirt' => $request->q_Polo_Sport_Shirt,
      'q_Vest' => $request->q_Vest,
      'q_Gloves' => $request->q_Gloves,
      'q_Shawl' => $request->q_Shawl,
      'q_Napkins' => $request->q_Napkins,
      'q_Lab_Coat' => $request->q_Lab_Coat,
      'q_Sweatshirt' => $request->q_Sweatshirt,
      'q_Overalls' => $request->q_Overalls,
      'q_Tuxedo' => $request->q_Tuxedo,
      'q_Jersey' => $request->q_Jersey,
      'q_Hoodie' => $request->q_Hoodie,
      'q_Bra' => $request->q_Bra,
      'q_Belt' => $request->q_Belt,
      'q_Jacket' => $request->q_Jacket,
      'q_Coat' => $request->q_Coat,
      'q_Coat_3_4_Coat' => $request->q_Coat_3_4_Coat,
      'q_Coat_Down' => $request->q_Coat_Down,
      'q_two_Piece_Skirt_Suit' => $request->q_two_Piece_Skirt_Suit,
      'q_Bedding_Pillow_Case' => $request->q_Bedding_Pillow_Case,
      'q_Bedding_Blanket' => $request->q_Bedding_Blanket,
      'q_Bedding_Bed_Sheet' => $request->q_Bedding_Bed_Sheet,
      'q_Bedding_Pillow_dry_clean' => $request->q_Bedding_Pillow_dry_clean,
      'q_Bathing_suit_Top' => $request->q_Bathing_suit_Top,
      'q_Bedding_Down_Comforter' => $request->q_Bedding_Down_Comforter,
      'q_Bedding_Comforter_dry_clean' => $request->q_Bedding_Comforter_dry_clean,
      'q_Hemming' => $request->q_Hemming,
      'q_Hemming_Pant' => $request->q_Hemming_Pant,
      'q_Hemming_Sleeve' => $request->q_Hemming_Sleeve,
      'q_Taper' => $request->q_Taper,
      'q_Button' => $request->q_Button,
      'q_Patch' => $request->q_Patch,
      'q_Zipper' => $request->q_Zipper,
       ]);

       $cart->user_id=auth()->id();
       $cart->sp_id= $sp_id;
       $cart->service_id= $service_id;
       $cart->save();

       Session::flash('success','order requested successfully');
       $prices = DB::table('pricings')->where('pricings.sp_id', '=', $sp_id)->get();
       $services = DB::table('services')->where('services.id', '=' , $service_id)->get();
       $drycleaning = drycleaning::all();
       $tailoring = tailoring::all();
       $rating = DB::table('comments')->where('comments.service_id', '=' , $service_id )->avg('rating');
       $avg_rating = round($rating,2);
       // $carts = DB::table('carts')->where('carts.user_id', '=' , auth()->id())->orderBy('id', 'desc')->get();
       $cart = DB::table('carts')->latest()->first();


       $currentuserid = Auth::user()->id;
       // dd($request->all());
$total = $cart->q_Regular_Laundry * $prices->Regular_Laundry;




             return view('user.cart1')->with('total', $total)->with('prices', $prices)->with('cart', $cart)->with('tailoring', $tailoring)->with('drycleaning', $drycleaning)->with('avg_rating', $avg_rating)->with('services', $services)->with('categories', Category::all())->with('$workingday', Workingday::all());

     }

      public function stored(Request $request,$sp_id, $service_id)
      {
        $prices = DB::table('pricings')->where('pricings.sp_id', '=', $sp_id)->get();
               $services = DB::table('services')->where('services.id', '=' , $service_id)->get();
               $drycleaning = drycleaning::all();
               $tailoring = tailoring::all();
               $rating = DB::table('comments')->where('comments.service_id', '=' , $service_id )->avg('rating');
               $avg_rating = round($rating,2);
               $carts = DB::table('carts')->where('carts.user_id', '=' , auth()->id())->orderBy('id', 'desc')->get();
               $currentuserid = Auth::user()->id;
               return view('user.store')->with('prices', $prices)->with('carts', $carts)->with('tailoring', $tailoring)->with('drycleaning', $drycleaning)->with('avg_rating', $avg_rating)->with('services', $services)->with('categories', Category::all())->with('$workingday', Workingday::all());

      }

     public function cartreview(Request $request,$sp_id, $service_id)
     {
              $prices = DB::table('pricings')->where('pricings.sp_id', '=', $sp_id)->get();
              $services = DB::table('services')->where('services.id', '=' , $service_id)->get();
              $drycleaning = drycleaning::all();
              $tailoring = tailoring::all();
              $rating = DB::table('comments')->where('comments.service_id', '=' , $service_id )->avg('rating');
              $avg_rating = round($rating,2);
              $carts = DB::table('carts')->where('carts.user_id', '=' , auth()->id())->where('carts.sp_id', '=' , $sp_id)->where('carts.service_id', '=' , $service_id)->orderBy('updated_at', 'desc')->first();
              $currentuserid = Auth::user()->id;



              return view('user.cartreview')->with('prices', $prices)->with('carts', $carts)->with('tailoring', $tailoring)->with('drycleaning', $drycleaning)->with('avg_rating', $avg_rating)->with('services', $services)->with('categories', Category::all())->with('$workingday', Workingday::all());


     }

//     public function store(Request $request,$sp_id, $service_id)
//     {
//
//       $this->validate($request, [
//         'dos' => 'required',
//         'dryclean' => 'required',
//       ]);
//
//       $cart = cart::create([
//       'dos' => $request->dos,
//       'laundry_weight' => $request->laundry_weight,
//       'dryclean' => $request->dryclean,
//       'voucher' => $request->voucher,
//       ]);
//
//
// // $str_q_drycleaning_id = serialize($request->q_drycleaning_id);
//
//
// $cart->drycleanings()->sync($request->drycleaning_id,['q_drycleaning_id' => $request->q_drycleaning_id]);
//       // $cart->drycleanings()->attach($request->drycleaning_id);
//
// // [$request->q_drycleaning_id]
//
//       $cart->tailorings()->attach($request->tailoring_id);
//       $cart->user_id=auth()->id();
//       $cart->sp_id= $sp_id;
//       $cart->service_id= $service_id;
//       $cart->save();
//
//       Session::flash('success','order requested successfully');
//
//       $services = DB::table('services')->where('services.id', '=' , $service_id)->get();
//       $drycleaning = drycleaning::all();
//       $tailoring = tailoring::all();
//       $rating = DB::table('comments')->where('comments.service_id', '=' , $service_id )->avg('rating');
//       $avg_rating = round($rating,2);
//       $carts = DB::table('carts')->where('carts.user_id', '=' , auth()->id())->orderBy('id', 'desc')->get();
//       $currentuserid = Auth::user()->id;
//
//       // dd($request->all());
//
//       return view('user.orders')->with('carts', $carts)->with('tailoring', $tailoring)->with('drycleaning', $drycleaning)->with('avg_rating', $avg_rating)->with('services', $services)->with('categories', Category::all())->with('$workingday', Workingday::all());
//
//     }

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
