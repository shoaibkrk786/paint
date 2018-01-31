<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Brand;
Use App\Product;
Use App\Shade;
class updateController extends Controller
{
    public function brand(){
        $brand = Brand::orderBy("brand_sort_id","asc")
            ->where('is_active','y')
            ->get();
        return view('admin.adbrands',['brand'=>$brand ]);
    }
    public function shade(Request $request, $id) {
        $shades = Shade::where("product_id", $id)
            ->paginate(10);

        $product = Product::where("id", $id)
            ->first();


        $brand = Brand::where("id", $product->brand_id)
            ->first();

        return view('admin.adshades')
            ->with("shades", $shades)
            ->with("product", $product)
            ->with("brand", $brand);
    }
}
