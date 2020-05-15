<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodItem;

class PizzaController extends Controller
{
    public function index()
    {   // pizzayou.test/pizza
        $foods = FoodItem::all();
        // $pizzas = $foods->where('food_category')
        return view('pizza.index')->with('foods', $foods);
    }

    public function show($id)
    {   // pizzayou.test/pizza/$id
        $food = FoodItem::find($id);
        return view('pizza.show')->with('food', $food);
    }
}