<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    //
    protected $table = "shopping_carts";

    protected $fillable = ['id', 'status', 'customid'];

    public function total()
    {
        return $this->products()->sum("pricing_client");
    }

    public function inShoppingCarts()
    {
        return $this->hasMany(InShoppingCart::class, 'shopping_cart_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'in_shopping_carts');
    }

    public function productsSize()
    {
        return $this->products()->count();
    }

    public static function findOrCreateBySessionID($shopping_cart_id)
    {
        if ($shopping_cart_id)
        // Buscar el carrito de compras con este ID
        {
            return ShoppingCart::findBySession($shopping_cart_id);
        } else
        // Crear un carrito de compras
        {
            return ShoppingCart::createWithoutSession();
        }

    }

    public static function findBySession($shopping_cart_id)
    {
        return ShoppingCart::find($shopping_cart_id);
    }

    public static function createWithoutSession()
    {

        return ShoppingCart::create([
            "status" => "incompleted",
        ]);
    }

}
