<?php

use Illuminate\Database\Seeder;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            [
                'name' => 'Cheese Pizza',
                'price' => 9.99,
                'food_category' => 1,
                'image_url' => 'cheesepizza.png'
            ], 
            [
                'name' => 'Pepperoni Pizza',
                'price' => 11.99,
                'food_category' => 1,
                'image_url' => 'pepperonipizza.png'
            ],
            [
                'name' => 'Pepsi',
                'price' => 3.99,
                'food_category' => 2,
                'image_url' => 'pepsi.png'
            ]
        ]);
    }
}