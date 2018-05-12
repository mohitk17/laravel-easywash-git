<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\pricings;
use App\service;
use App\Category;
use App\Workingday;
use App\Schedule;
use App\Comment;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $services = DB::table('services')->paginate(6);
      return view('user.home')->with('services', $services)->with('categories', Category::all())->with('$workingday', Workingday::all());

        // return view('home');
    }

    public function categoryindex($cid)
    {


      $services = Service::whereHas('categories',
       function($query) use($cid) {
          $query->where('categories.id', $cid);
      })->paginate(2);


      return view('user.home')->with('services', $services)->with('categories', Category::all())->with('$workingday', Workingday::all());

   }



    public function details(Request $request,$sp_id, $service_id)
    {

      $categories = Category::whereHas('services',
       function($query) use($service_id) {
          $query->where('services.id', $service_id);
      })->get();

      $workingdays = Workingday::whereHas('services',
       function($query) use($service_id) {
          $query->where('services.id', $service_id);
      })->get();


$services = DB::table('services')->where('services.id', '=' , $service_id)->get();
$prices = DB::table('pricings')->where('pricings.sp_id', '=', $sp_id)->get();
$comments = DB::table('comments')->where('comments.service_id', '=' , $service_id )->get();

$rating = DB::table('comments')->where('comments.service_id', '=' , $service_id )->avg('rating');
$avg_rating = round($rating,2);

return view('user.details')->with('avg_rating', $avg_rating)->with('prices', $prices)->with('comments', $comments)->with('services', $services)->with('categories', $categories)->with('workingdays', $workingdays);


    }





    public function store(Request $request,$sp_id, $service_id)
    {
      $this->validate($request, [
        'dos' => 'required'
      ]);

      $schedule = Schedule::create([
      'dos' => $request->dos,
      ]);


      $schedule->user_id=auth()->id();
      $schedule->sp_id= $sp_id;
      $schedule->service_id= $service_id;
      $schedule->save();

      $services = DB::table('services')->where('services.id', '=' , $service_id)->get();
      $prices = DB::table('pricings')->where('pricings.sp_id', '=', $sp_id)->get();
   //  $services= DB::table('services')->where('services.sp_id', '=', 'auth()->id()')->get();
   // $prices = DB::table('prices')->get();
   // dd($request->all());

Session::flash('success','Scheduled successfully');
return view('user.home.details')->with('prices', $prices)->with('services', $services)->with('categories', Category::all())->with('workingday', Workingday::all());
    }

    public function comment(Request $request,$sp_id, $service_id)
    {
      $comment = Comment::create([
      'comment' => $request->comment,
      'rating' => $request->rating,
      ]);

      $loggedin_username = Auth::user()->name;
      $comment->user_id=auth()->id();
      $comment->user_name = $loggedin_username;
      $comment->service_id= $service_id;
      $comment->save();

      $services = DB::table('services')->where('services.id', '=' , $service_id)->get();
      $prices = DB::table('pricings')->where('pricings.sp_id', '=', $sp_id)->get();
      $comments = DB::table('comments')->where('comments.service_id', '=' , $service_id )->get();
      Session::flash('success','Scheduled successfully');
      return view('user.details')->with('prices', $prices)->with('comments', $comments)->with('services', $services)->with('categories', Category::all())->with('$workingday', Workingday::all());
    }

public function showcart()

{
return view('user.home.ordercart');
}



}
