<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\FoodItem;
use App\Order;
use App\FoodItemOrder;
use Session;
use Auth;

class CartController extends Controller
{
    public function index()
    {
        if (!Session::has('cart')) {
            return view('cart', ['products' => null]);
        }
        $cart = Session::get('cart');
        return view('cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function addToCart(Request $request, $id) {
        $product = FoodItem::find($id);
        $qty = $request['food_quantity'];

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id, $qty);

        $request->session()->put('cart', $cart);

        // dd($request->session()->get('cart'));
        return redirect('cart');
    }

    public function submitOrder(Request $request) {
        if(!Session::has('cart')) {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $order = new Order;

        $order->user_id = auth()->user()->id;
        $order->total_price = $cart->totalPrice;
        $order->save();

        $orderProducts = [];
        foreach($cart->items as $productId => $item) {
            $orderProducts[] = [
                'user_id' => auth()->user()->id,
                'food_item_id' => $productId,
                'quantity' => $item['qty']
            ];
        }
        
        FoodItemOrder::insert($orderProducts);

        Session::flush();
        
        $total = $cart->totalPrice;
        return view('checkout', ['total' => $total]);
    }
}