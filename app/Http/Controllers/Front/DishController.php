<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function dishes($id)
    {
        $dishes = Dish::query()->where('meal_id',$id)->get();
        return view('front.pages.dishes',compact('dishes'));
    }
}
