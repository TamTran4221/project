<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\CarHelper;
use App\Helper\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function view()
    {
        $carts = session('cart') ? session('cart') : [];

        return view ('layout.cart-view', compact('carts'));
    }

    public function add(Cart $cart, Product $product)
    {
         $cart->addToCart($product);

       return redirect()->route('cart.view');
    }

    public function remove(Cart $cart,$id)
    {
        $cart->removeItem($id);
        return redirect()->route('cart.view');
    }

    public function update(Cart $cart,$id)
    {
        $quantity = request('quantity', 1);
        $cart->updateItem($id, $quantity);
        return redirect()->route('cart.view');
 
        return redirect()->route('cart.view');
    }

    public function clear()
    {
        session(['cart' => null]);
        return redirect()->route('cart.view');
    }
}
