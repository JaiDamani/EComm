<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    // function admin(){
    //     return view("admin");
    // }
    // function show(){
    //     $data = Product::all();        //fetching data from product
    //     return view('admin',['products'=>$data]);      //passing the data to view
    // }
    // public function destroy(Post $product,$id)
    // {
    //     $product=Product::find($id);
    //     $product->delete();
    //     return redirect('show');
    // }

    // public function update(Request $request, Product $product,$id)
    // {
    //     $product=Product::find($id);
    //     $product->product_name = $request->get('name');
    //     $product->product_price = $request->get('price');
    //     $product->product_description = $request->get('description');
        
    //     $product->save();
    //     return redirect('show');
    // }

    // public function edit(Product $product,$id)
    // {
    //     $product=Product::find($id);
    //     return view('edit',['products'=>$product]);
    // }
} 
