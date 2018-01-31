<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Product;
use App\Shade;
use App\Paking;
use Cart;
use Auth;
use App\Company;
use App\Sharings;

class PaintController extends Controller {

    //
    public function shades(Request $request, $id) {
        $shades = Shade::where("product_id", $id)
                ->skip(0)
                ->take(100)
                ->get();

        $product = Product::where("id", $id)
                ->first();


        $brand = Brand::where("id", $product->brand_id)
                ->first();

        return view('shades')
                        ->with("shades", $shades)
                        ->with("product", $product)
                        ->with("brand", $brand);
    }

    public function khareedo(Request $request) {

        $cart = Cart::instance("shopping")->content();
        $user = Auth::user();
        $cart_count = Cart::instance("shopping")->count();
        if ($cart_count <= 0) {
            return redirect('/');
        }
        return view('khareedo')
                        ->with("user", $user)
                        ->with("cart", $cart);
    }

    public function paintwall() {
        $sharings = Sharings::orderBy("id", "desc")
                ->skip(0)
                ->take(15)
                ->get();

        if (Auth::check()) {
            $user = Auth::user();
            $company = Company::where("user_id", $user->id)
                    ->first();
            return view('paint-wall')
                            ->with('company', $company)
                            ->with("sharings", $sharings)
                            ->with('user', $user);
        }



        return view('paint-wall')
                        ->with("sharings", $sharings);
    }

}
