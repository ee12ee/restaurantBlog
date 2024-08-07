<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dish extends Model
{
    use HasFactory;
    protected $fillable=['name', 'description', 'price', 'image','meal_id'];

    public function meal(): BelongsTo
    {
        return $this->belongsTo(Meal::class,'meal_id');
    }
}
