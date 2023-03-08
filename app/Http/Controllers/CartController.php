<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\CarHelper;
use App\Models\Product;

class CartController extends Controller
{
    public function add(CarHelper $cart, $id)
    {
        $product = Product::find($id);
    }
}
