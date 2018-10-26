<?php

namespace App\Http\Controllers;

use App\InShoppingCart;
use Illuminate\Http\Request;

class InShoppingCartController extends Controller
{
    public function __construct()
    {
        # code...
        $this->middleware("shoppingcart");
        //$request->shopping_cart;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //SESSION ACTUAL DE MI CARRITO DE COMPRAS
        $shopping_cart = $request->shopping_cart;
        #Peticvion que realizo para almacenar mis datos y ese mismo response me devuelve un bollean (true or false)
        $response = InShoppingCart::create([
            "product_id"       => $request->product_id,
            "shopping_cart_id" => $shopping_cart->id,
        ]);
        //SI VIENE DE UNA PETICION AJAX
        if ($request->ajax()) {
            # code...
            return response()->json([
                'products_count' => InShoppingCart::productsCount($shopping_cart->id),
            ]);
        }

        if ($response) {
            # code...
            return redirect('/in_shopping_cart');
        } else {
            # code...
            return back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InShoppingCart  $inShoppingCart
     * @return \Illuminate\Http\Response
     */
    public function show(InShoppingCart $inShoppingCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InShoppingCart  $inShoppingCart
     * @return \Illuminate\Http\Response
     */
    public function edit(InShoppingCart $inShoppingCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InShoppingCart  $inShoppingCart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InShoppingCart $inShoppingCart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InShoppingCart  $inShoppingCart
     * @return \Illuminate\Http\Response
     */
    public function destroy(InShoppingCart $inShoppingCart)
    {
        //
    }
}
