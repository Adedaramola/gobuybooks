<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;

class SiteController extends Controller
{
    public function index(){
        $products = Product::orderBy('id', 'desc')->paginate(5);
        return view('welcome', ['products' => $products]);
    }

    public function shop(){
        $categories = Category::orderBy('id', 'desc')->get();
        $products = Product::orderBy('id', 'desc')->paginate(5);
        return view('shop', ['products' => $products, 'categories' => $categories, 'selected' => []]);
    }

    public function shopCategory($id){
        $categories = Category::orderBy('id', 'desc')->get();
        $selected = Category::where('id', $id)->get();
        $products = Product::where('category_id', $id)->paginate(5);
        return view('shop', ['products' => $products, 'categories' => $categories, 'selected' => $selected]);
    }

    public function short_description($id){
        $product = Product::where('id', $id)->get();
        $related = [];
        if(!$product->isEmpty()){
            $related = Product::where('category_id', $product[0]->category_id)->paginate(4);
        }
        return view('description', ['product' => $product, 'related' => $related]);
    }
}
