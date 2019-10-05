<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{

    protected $fillable = [
        'diet_name', 'start_weight', 'desired_weight', 
        'number_of_days', 'height', 'user_id'
    ];

    //relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function days()
    {
        return $this->hasMany(Day::class);
    }
}
