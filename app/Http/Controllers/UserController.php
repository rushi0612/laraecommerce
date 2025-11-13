<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\ProductCart;
use App\Models\Order;
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
        if(Auth::check()){
        $count= ProductCart::where('user_id', Auth::id())->count();
    } 
       else {
        $count='';
    }
        $Products= Product::latest()->take(2)->get();
        return view('index',compact("Products","count"));
    }
    public function productDetails($id){
        if(Auth::check()){
        $count= ProductCart::where('user_id', Auth::id())->count();
    } 
       else {
        $count='';
    }
        $product = Product::findOrFail($id);
        return view('product_details', compact('product','count'));
    }
    public function allProducts(){
        if(Auth::check()){
        $count= ProductCart::where('user_id', Auth::id())->count();
    } 
       else {
        $count='';
    }
        $products= Product::all();
        return view('allproducts',compact("products","count"));
    }
    public function addToCart( $id){
        $product= Product::findOrFail($id);
        $product_cart=new ProductCart();
        $product_cart->user_id=Auth::id();
        $product_cart->product_id=$product->id;

        $product_cart->save();
        return redirect()->back()->with('cart_message', 'added to cart successfully!');
    }
    public function cartProducts(){
        if(Auth::check()){
        $count= ProductCart::where('user_id', Auth::id())->count();
        $cart= ProductCart::where('user_id', Auth::id())->get();
    } 
       else {
        $count='';
    }
        return view('viewcartproducts',compact("cart","count"));
    }
    public function removeCartProduct($id){
        $cart_product= ProductCart::findOrFail($id);
        $cart_product->delete();
        return redirect()->back()->with('remove_cart_message', 'Product removed from cart successfully!');
    }
    public function conformOrder(REQUEST $request){
        $cart_product_id=ProductCart::where('user_id',Auth::id())->get();
        $address=$request->receiver_address;
        $phone=$request->receiver_phone;
        foreach($cart_product_id as $cart_product) {
            $order=new Order();
            $order->receiver_address=$address;
            $order->receiver_phone=$phone;
            $order->user_id=Auth::id();
            $order->product_id=$cart_product->product_id;
            $order->save();

            return redirect()->back()->with('cunfirm_order', 'Order Confirmed');
        }
    }
}
