<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    
 public function index()  // get all data from database
 {
     $products = Product::all();

     return view('products', compact('products'));  //  show all data in page of products.blade.php
 }

 // this function is to show cart of product because we wanna show result of choose product by user in this page
 public function cart()  
 {
     return view('cart');  
 }

 

 public function addToCart($id) // by this function we add product of choose in card
 {
     $product = Product::find($id);

     if(!$product) {

         abort(404);

     }
// what is Session:
//Sessions are used to store information about the user across the requests.
// Laravel provides various drivers like file, cookie, apc, array, Memcached, Redis, and database to handle session data. 
// so cause write the below code in controller and tis code is fix
     $cart = session()->get('cart');  

     // if cart is empty then this the first product
     if(!$cart) {

         $cart = [
                 $id => [
                     "name" => $product->name,
                     "quantity" => 1,
                     "price" => $product->price,
                     "photo" => $product->photo
                 ]
         ];

         session()->put('cart', $cart);

         return redirect()->back()->with('success', 'added to cart successfully!');
     }

     // if cart not empty then check if this product exist then increment quantity
     if(isset($cart[$id])) {

         $cart[$id]['quantity']++;

         session()->put('cart', $cart); // this code put product of choose in cart

         return redirect()->back()->with('success', 'Product added to cart successfully!');

     }

     // if item not exist in cart then add to cart with quantity = 1
     $cart[$id] = [
         "name" => $product->name,
         "quantity" => 1,
         "price" => $product->price,
         "photo" => $product->photo
     ];

     session()->put('cart', $cart); // this code put product of choose in cart

     return redirect()->back()->with('success', 'Product added to cart successfully!');
 }

 // update product of choose in cart
 public function update(Request $request)
 {
     if($request->id and $request->quantity)
     {
         $cart = session()->get('cart');

         $cart[$request->id]["quantity"] = $request->quantity;

         session()->put('cart', $cart);

         session()->flash('success', 'Cart updated successfully');
     }
 }

 // delete or remove product of choose in cart
 public function remove(Request $request)
 {
     if($request->id) {

         $cart = session()->get('cart');

         if(isset($cart[$request->id])) {

             unset($cart[$request->id]);

             session()->put('cart', $cart);
         }

         session()->flash('success', 'Product removed successfully');
     }
 }

}
