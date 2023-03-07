<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function home()
    {
        $product = Product::all();
        return view('layout.home',compact('product'),['title'=> "Trang chủ"]);
    }
    public function about()
    {
        return view('layout.about',['title'=> "Giới thiệu"]);
    }
    public function contact()
    {
        return view('layout.contact',['title'=> "Liên hệ"]);
    }
    public function news()
    {
        return view('layout.news');
    }
    public function detail($id)
    {
        $pro = Product::find($id);
        return view('layout.detail',compact('pro'),['title'=> "Trang chi tiết"]);
    }
    public function category($slug)
    {
        $category = Category::where('slug',$slug)->first();
        $product = Product::where('category_id',$category->id)->get();
        $products = Product::where('category_id',1)->limit(4)->get();
        return view('layout.category', compact('product','products'),['title'=>"product"]);
    }

}
