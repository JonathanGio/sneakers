<?php

namespace App\Http\Controllers;

use App\StockProduct;
use Illuminate\Http\Request;

class StockProductController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StockProduct  $stockProduct
     * @return \Illuminate\Http\Response
     */
    public function show(StockProduct $stockProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StockProduct  $stockProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(StockProduct $stockProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StockProduct  $stockProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockProduct $stockProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StockProduct  $stockProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockProduct $stockProduct)
    {
        //
    }
}
