<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodWeighIn extends Model
{
    //relationships
    public function days()
    {
        return $this->belongsTo(Day::class);
    }
}
