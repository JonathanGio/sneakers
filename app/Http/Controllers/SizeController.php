<?php

namespace App\Http\Controllers;

use App\Size;
use App\User;
use Auth;

use Illuminate\Http\Request;

class SizeController extends Controller
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
        $sizes = Size::all();

         $sizes->each(function($sizes)
        {

            
            $sizes->user;
            
        });
        return view('auth.dash.sizes.index', [
        'sizes'=>$sizes
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
        //
        $sizes          = new Size();
        $sizes->user_id = \Auth::id();
        $sizes->name    = $request->name;
        $sizes->available   = $request->available;

        if ($sizes->save()) 
        {
            # code...
            return redirect()->back()->with('status', "Success added size" . $request->name);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sizes=Size::find($id);

        $size->name=$request->name;
        $size->avaiable=$request->available;

        if ($sizes->save()) {
         return redirect()->back()->with('status', 'se guardo correctamente');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sizes=Size::find($id);

        if ($sizes->delete())
         {
         return redirect()->back()->with('status', 'se elimino correctamente');
            
        }
    }
}
