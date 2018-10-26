<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
   protected $table= 'brands';
   protected $fillable=['id', 'name', 'available', 'user_id'];

public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}

