<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockProduct extends Model
{

protected $table= 'stock_products';
    protected $fillable= ['product_id', 'quantity_min', 'quantity_now'];


public function user()
{
	return $this->belongsTo('App\User', 'user_id');
}
}
