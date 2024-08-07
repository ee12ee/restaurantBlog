<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function meal()
    {
        $meals = Meal::all();
        return view('front.pages.meal' , compact('meals'));
    }
}
