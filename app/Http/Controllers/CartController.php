<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        if($request->session()->has('user')){

            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect()->route('home');

        }else{
            return redirect()->route('user.login.form');
        }
    }


    public function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }


    public function cartList()
    {
        $userId = Session::get('user')['id'];
        $carts = Cart::where('user_id', $userId)->get();

        $products = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();

        return view('cart.cartList', compact('products'));
    }
}
