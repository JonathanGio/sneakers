<?php

namespace App\Http\Controllers;

use App\Product;
use App\Size;
use App\ShoeModel;
use App\User;
use App\Brand;
use \Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $products = Product::all();

       $model=ShoeModel::pluck('name', 'id');
      $size=Size::pluck('name', 'id');
        $brand=Brand::pluck('name', 'id');

        $products->each(function($products)
        {
            $products->user;
            $products->size;
            $products->brand;
            $products->model;

        });

        return view('auth.dash.products.index', [
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
        $products          = new Product();

        
        $products->name    = $request->name;
        $products->sku    = $request->sku;
        $products->slug    = $request->slug;
        $products->pricing_client    = $request->pricing_client;
        $products->pricing_stock    = $request->pricing_stock;
        $products->description    = $request->description;
        $products->meta_description    = $request->meta_description;
        
         if ($request->hasFile('image')) 
       {

         $image = $request->file('image');
         $filename = time() . '.' . $image->getClientOriginalExtension();
         $location = public_path('img/sneakers/' . $filename);
         \Image::make($image)->resize(800, 400)->save($location);

         $products->image = $filename;
       }

        $products->top    = $request->top;
        $products->promotion    = $request->promotion;
        $products->user_id = \Auth::id();
        $products->size_id    = $request->size_id;
        $products->brand_id    = $request->brand_id;
        $products->model_id    = $request->model_id;
        if ($products->save()) {
            # code...
            return redirect()->back()->with('status', "Success added brand" . $request->name);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $products=Product::find($id);

        $products->name    = $request->name;
        $products->sku    = $request->sku;
        $products->slug    = $request->slug;
        $products->pricing_client    = $request->pricing_client;
        $products->pricing_stock    = $request->pricing_stock;
        $products->description    = $request->description;
        $products->meta_description    = $request->meta_description;
        
         if ($request->hasFile('image')) 
       {

         $image = $request->file('image');
         $filename = time() . '.' . $image->getClientOriginalExtension();
         $location = public_path('img/sneakers/' . $filename);
         \Image::make($image)->resize(800, 400)->save($location);

         $products->image = $filename;
       }

        $products->available   = $request->available;
        $products->top    = $request->top;
        $products->promotion    = $request->promotion;
        $products->user_id = \Auth::id();
        $products->size_id    = $request->size_id;
        $products->brand_id    = $request->brand_id;
        $products->model_id    = $request->model_id;
        if ($products->save()) {
            # code...
            return redirect()->back()->with('status', "Success added brand" . $request->name);


    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $products=Product::find($id);

        if($products->delete())
        {
            return redirect()->back()->with('status','se elimino  exitosamente');
        }
    }
}
