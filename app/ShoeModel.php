<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoeModel extends Model
{
    protected $table= 'shoe_models';
    protected $fillable= ['id', 'user_id', 'name', 'available'];

public function user()
{
	return $this->belongsTo('App\User', 'user_id');
}
}