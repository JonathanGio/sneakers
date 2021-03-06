<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
   protected $table= 'sizes';
    protected $fillable= ['id' ,'user_id', 'name', 'available'];

public function user()
{
	return $this->belongsTo('App\User', 'user_id');
}
}