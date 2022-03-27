<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Blog;
use Carbon\Carbon;

class SiteController extends Controller
{
    public function index(){

        $user = Auth::user();

        $products = Product::orderBy('id', 'desc')->paginate(5);
        $blogs = Blog::orderBy('id', 'desc')->paginate(2);
        return view('welcome', ['products' => $products, 'user' => $user, 'blogs' => $blogs]);

    }

    public function registerShow(){
        $user = Auth::user();
        return view('register', ['user' => $user]);
    }

    public function logout(){
        Auth::logout();
        return back();
    }

    public function register(Request $request){
        try {
            
            $user = new User;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->password = Hash::make($request->password);

            if ($user->save()) {
                return back()->with('success', 'Registration Successful!');
            }
    
            return back()->with('error', 'Registration Failed!');
            
        } catch (\Throwable $th) {
            

            return back()->with('error', 'An error occured, Please try again!');

        }
    }

    public function loginShow(){
        $user = Auth::user();
        return view('login', ['user' => $user]);
    }

    public function login(Request $request){
        try {

            if(!Auth::attempt($request->only('email', 'password')))
            {
                return back()->with('error', 'Invalid Credentials');
            }

            $user = Auth::user();

            return redirect('/');
            
        } catch (\Throwable $th) {
            

            return back()->with('error', 'An error occured, Please try again!');

        }
    }

    public function collection(){
        $user = Auth::user();
        return view('collection', ['user' => $user]);
    }

    public function blogs(){
        $user = Auth::user();
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('blogs', ['blogs' => $blogs, 'user' => $user]);
    }

    public function blog($id){
        $user = Auth::user();
        $blog = Blog::where('id', $id)->get();
        return view('blog', ['blog' => $blog, 'user' => $user]);
    }

    public function shop(){
        $user = Auth::user();
        $categories = Category::orderBy('id', 'desc')->get();
        $products = Product::orderBy('id', 'desc')->paginate(5);
        return view('shop', ['products' => $products, 'categories' => $categories, 'selected' => [], 'user' => $user]);
    }

    public function shopCategory($id){
        $user = Auth::user();
        $categories = Category::orderBy('id', 'desc')->get();
        $selected = Category::where('id', $id)->get();
        $products = Product::where('category_id', $id)->paginate(5);
        return view('shop', ['products' => $products, 'categories' => $categories, 'selected' => $selected, 'user' => $user]);
    }

    public function short_description($id){
        $user = Auth::user();
        $product = Product::where('id', $id)->get();
        $related = [];
        if(!$product->isEmpty()){
            $related = Product::where('category_id', $product[0]->category_id)->paginate(4);
        }
        return view('description', ['product' => $product, 'related' => $related, 'user' => $user]);
    }

    public function cart(){
        $user = Auth::user();
        return view('cart', ['user' => $user]);
    }

    public function checkout(){
        $user = Auth::user();
        return view('checkout', ['user' => $user]);
    }

    public function order(Request $request){
        // dd($request->order);
        $order = new Order;
        $user = Auth::user();
        $order->user_id = $user->id;
        $order->order_tag = $request->order_tag;
        $order->order = json_encode($request->order);

        if ($order->save()) {
            return response()->json(['status'=>'success']);
        }

        return response()->json(['status'=>'failure']);
    }
}
