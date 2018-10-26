<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InShoppingCart extends Model
{
    protected $table = "in_shopping_carts";

    protected $fillable = ["product_id", "shopping_cart_id", "count"];

    public static function productsCount($shopping_cart_id)
    {
        # code...
        return InShoppingCart::where("shopping_cart_id", $shopping_cart_id)->count();
    }

}
