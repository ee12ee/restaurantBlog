<?php

namespace Database\Seeders;

use App\Models\Meal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MealSeader extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Meal::query()->create([
         'name'=>'breakfast'
        ]);
        Meal::query()->create([
            'name'=>'launch'
        ]);
        Meal::query()->create([
        'name'=>'dinner'
        ]);

    }
}
