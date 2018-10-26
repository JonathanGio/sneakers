<?php

namespace App\Http\Controllers;

use App\Brand;
use App\User;
use Auth;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
    {
        # code...
        $this->middleware("shoppingcart"); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();

         $brands->each(function($brands)
        {

            
            $brands->user;
            
        });
        return view('auth.dash.brands.index', [
        'brands'=>$brands
       ]
   ); 

            
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
    
        $brands          = new Brand();
        $brands->user_id = \Auth::id();
        $brands->name    = $request->name;
        $brands->available   = $request->available;

        if ($brands->save()) {
            # code...
            return redirect()->back()->with('status', "Success added brand" . $request->name);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brands=Brand::find($id);

        $brands->name=$request->name;
        $brands->available=$request->available;

        if ($brands->save()) 
        {
        
            return redirect()->back()->with('status', 'Se guardo corectamente  ');
        }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands=Brand::find($id);

        if($brands->delete())
        {
            return redirect()->back()->with('status','se elimino  exitosamente');
        }
    }
}
