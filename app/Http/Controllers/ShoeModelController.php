<?php

namespace App\Http\Controllers;

use App\ShoeModel;
use App\User;
use Auth;

use Illuminate\Http\Request;

class ShoeModelController extends Controller
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


        $models = ShoeModel::all();

         $models->each(function($models)
        {

            
            $models->user;
            
        });
        return view('auth.dash.models.index', [
        'models'=>$models
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
        $models          = new ShoeModel();
        //$models->user_id = \Auth::user()->id;
        $models->user_id = \Auth::id();
        $models->name    = $request->name;
        $models->available   = $request->available;

        if ($models->save()) {
            # code...
            return redirect()->back()->with('status', "Success added model" . $request->name);
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShoeModel  $shoeModel
     * @return \Illuminate\Http\Response
     */
    public function show(ShoeModel $shoeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShoeModel  $shoeModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ShoeModel $shoeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShoeModel  $shoeModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $models=ShoeModel::find($id);

        $models->name=$request->name;
        $models->available=$request->available;

        if ($models->save()) 
        {
            return redirect()->back()->with('status', 'se modifico exitosamente');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShoeModel  $shoeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $models=ShoeModel::find($id);
        
        if ($models->delete())
         {
            return redirect()->back()->with('status', 'se elimino exitosamente');
        }
    }
}
