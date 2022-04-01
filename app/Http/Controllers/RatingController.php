<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rating;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Session;


class RatingController extends Controller
{
    public function add(Request $request)
    {
      $stars_rated = $request->input('product_rating');
      $product_id = $request->input('product_id');
      $product_check = Product::where('id', $product_id)->first();

    //   if($product_check)
    //   {
    //     $userId=Session::get('user')['id'];
    //      $existing_rating = Rating::where('user_id', $userId)->where('prod_id', $product_id)->first();
    //             if($existing_rating)
    //             {
    //                 $existing_rating->stars_rated = $stars_rated;
    //                 $existing_rating->update();
    //             }
    //             else
    //             {
    //                 Rating::create([
    //                     'user_id' => $userId,
    //                     'prod_id' => $product_id,
    //                     'stars_rated' => $stars_rated
    //                 ]);
    //             }
    //   }
    //   return redirect()->back()->with('status',"Thank you for rating this product");

      if($product_check)
      { 
        $userId=Session::get('user')['id'];
         $verified_purchase = DB::table('orders')->join ('products','orders.product_id','=','products.id')->where('orders.user_id',$userId)->get();

        if($verified_purchase)
        {   
            $existing_rating = Rating::where('user_id', $userId)->where('prod_id', $product_id)->first();
            if($existing_rating)
            {
                $existing_rating->stars_rated = $stars_rated;
                $existing_rating->update();
            }
            else
            {
                Rating::create([
                    'user_id' => $userId,
                    'prod_id' => $product_id,
                    'stars_rated' => $stars_rated
                ]);
            }
            return redirect()->back()->with('status',"Thank you for rating this product");
        }
        else
        {
            return redirect()->back()->with('status','You have to purchase the product before rating it');
        }
      }
      else
        {
            return redirect()->back()->with('status','No such product exists');
        }
    }
}
