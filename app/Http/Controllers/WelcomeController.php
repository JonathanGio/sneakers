<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Size;
use App\ShoeModel;
use App\Brand;

class WelcomeController extends Controller
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
        
        $products=Product::all();

        $model=ShoeModel::pluck('name', 'id');
      $size=Size::pluck('name', 'id');
        $brand=Brand::pluck('name', 'id');

        $products->each(function($products)
        {
            $products->size;
            $products->brand;
            $products->model;

        });

        return view('welcome', [
        'products'=>$products,
        'size'=>$size,
        'model'=>$model,
        'brand'=>$brand
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);

         $model=ShoeModel::pluck('name', 'id');
      $size=Size::pluck('name', 'id');
        $brand=Brand::pluck('name', 'id');


        $product->each(function($product)
        {
            $product->size;
            $product->brand;
            $product->model;

        });



        return view('product', [
        'products'=>$product,
        'size'=>$size,
        'model'=>$model,
        'brand'=>$brand
       ]
   ); 
    
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
}
