<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 protected $table = 'products';
 protected $fillable=[ 'user_id', 'size_id', 'brand_id', 'model_id', 'sku', 'name', 'slug', 'pricing_client', 'pricing_stock', 'description', 'meta_description', 'image', 'top', 'promotion'];

  public function user()
{
	return $this->belongsTo('App\User', 'user_id');
}
  

  public function size()
{
	return $this->belongsTo('App\Size', 'size_id');
}

  public function brand()
{
	return $this->belongsTo('App\Brand', 'brand_id');
}

  public function model()
{
	return $this->belongsTo('App\ShoeModel', 'model_id');
}

}
