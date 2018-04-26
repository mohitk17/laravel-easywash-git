<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sp;
use DB;
use View;
class SpController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:sp');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sp');
    }

    public function showdata()
    {

      $sps= Sp::all();

      return view('sp/spprofile')->with('sps',$sps);


    }


}
