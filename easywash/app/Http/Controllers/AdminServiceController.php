<?php

// contain logic for ADMIN account
// TO VIEW TRASHED SERVICES BY SPS


namespace App\Http\Controllers;
use App\Category;
use App\service;
use Session;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth:admin');
     }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
          'name' => 'required|max:255',
          'address' => 'required|max:255',
          'city' => 'required|max:255',
          'state' => 'required|max:255',
          'zipcode' => 'required|integer|digits:5',
          'featured' => 'image',

        ]);

dd($request)->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function trashed()
    {
      $services = Service::onlyTrashed()->get();
      return view('admin.services.trashed')->with('services',$services );
    }

    public function kill($id)
    {

      $service = Service::withTrashed()->where('id', $id)->get()->first();
      $service->forceDelete();

      Session::flash('success', 'Service deleted Permanently.');

      return redirect()->back();

    }

    public function restore($id)
    {
      $service = Service::withTrashed()->where('id',$id)->first();
      $service->restore();
      Session::flash('success', 'Service restored Successfully.');
return redirect()->route('admin.services.trashed');
    }
}
