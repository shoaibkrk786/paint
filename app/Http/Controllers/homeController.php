<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Brand;
Use App\Shade;
Use App\Product;
class homeController extends Controller
{
    public function Display(){
        $brand = Brand::orderBy("brand_sort_id","asc")
            ->where('is_active','y')
            ->get();
        return view('home',['brand'=>$brand ]);
    }

    public function search(Request $request){
        $data=$request->term;
         $product=Product::where("product_name",'LIKE','%'.$data.'%')
            -> where("is_active","y")
             ->get();
        $result=array();
        foreach ($product as $products){
            $result[]=['value'=>$products->product_name, 'pic'=>$products->product_pic,
                'id'=>$products->id,'dis'=>$products->discount_price, 'ca'=>$products->product_category];
        }
        return response()->json($result);
    }
}
