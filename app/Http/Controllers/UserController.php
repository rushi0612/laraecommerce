<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\ProductCart;
class UserController extends Controller
{
    public function index(){
        if(Auth::check() && Auth::user()->user_type=="user"){
             return view('dashboard');
            }
            else if(Auth::check() && Auth::user()->user_type=="admin"){
                return view('admin.dashboard');
            }
    }
    public function home(){
        $Products= Product::latest()->take(2)->get();
        return view('index',compact("Products"));
    }
    public function productDetails($id){
        $product = Product::findOrFail($id);
        return view('product_details', compact('product'));
    }
    public function allProducts(){
        $products= Product::all();
        return view('allproducts',compact("products"));
    }
    public function addToCart( $id){
        $product= Product::findOrFail($id);
        $product_cart=new ProductCart();
        $product_cart->user_id=Auth::id();
        $product_cart->product_id=$product->id;

        $product_cart->save();
        return redirect()->back()->with('cart_message', 'added to cart successfully!');
    }
}
