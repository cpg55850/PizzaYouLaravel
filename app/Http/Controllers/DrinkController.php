<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodItem;

class DrinkController extends Controller
{
    public function index()
    {   // pizzayou.test/pizza
        $foods = FoodItem::all()->where('food_category', '2');
        // $pizzas = $foods->where('food_category')
        return view('food.index')->with('foods', $foods);
    }

    public function show($id)
    {   // pizzayou.test/pizza/$id
        $food = FoodItem::find($id);
        return view('food.show')->with('food', $food);
    }
}