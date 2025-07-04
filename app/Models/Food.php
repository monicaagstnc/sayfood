<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';
    protected $casts = [
    'exp_datetime' => 'datetime',
];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
}
