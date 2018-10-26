<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table= 'orders';
    protected $fillable=['id', 'shopping_cart_id', 'recipient_name', 'email', 'telephone', 'status' 'guide_number', 'total', 'details_order', 'this'];

    public function shopping_cart()
{
	return $this->belongsTo('App\ShoppingCart', 'shopping_cart_id');
}
}
