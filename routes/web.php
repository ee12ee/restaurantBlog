<?php

use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\DishController;
use App\Http\Controllers\Front\MealController;
use App\Http\Controllers\Front\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view("front.home");})->name('home');
Route::get('/service',[ServiceController::class , 'service'])->name('service');
Route::get('/contact',[ContactController ::class , 'show'])->name('contact');
Route::post('/contact',[ContactController ::class , 'contact'])->name('store_contact');
Route::get('/meal',[MealController ::class , 'meal'])->name('meal');
Route::get('/dishes/{id}',[DishController ::class , 'dishes'])->name('dishes');
