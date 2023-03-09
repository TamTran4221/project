<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function home()
    {

       $product = Product::where('category_id',2)->limit(8)->get();
       $products = Product::where('category_id',1)->get();
       $pro = Product::where('category_id',3)->limit(8)->get();
        return view('layout.home',compact('product','products','pro'));
    }
    public function about()
    {
        return view('layout.about');
    }
    public function contact()
    {
        return view('layout.contact');
    }
    public function news()
    {
        return view('layout.news');
    }
    public function detail($id)
    {
        $pro = Product::find($id);
        $product = Product::where('category_id',$pro->category_id)->limit('4')->get();
        
        return view('layout.detail',compact('pro','product'));
    }
    public function category($slug)
    {
        $category = Category::where('slug',$slug)->first();
        $product = Product::where('category_id',$category->id)->get();
        $products = Product::where('category_id',2)->limit(4)->get();
        return view('layout.category', compact('product','products'));
    }

}
