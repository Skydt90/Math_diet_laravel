<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'date', 'diet_id', 'goal_weight', 'morning_weight',
        'allowed_food_intake', 'created_at', 'updated_at'
    ];

    //relationships
    public function diet()
    {
        return $this->belongsTo(Diet::class);
    }

    public function foodWeighIns()
    {
        return $this->hasMany(FoodWeighIn::class);
    }

    public function bodyWeighIns()
    {
        return $this->hasMany(BodyWeighIn::class);
    }
}
