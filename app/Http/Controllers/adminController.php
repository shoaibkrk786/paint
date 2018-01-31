<?php

namespace App\Http\Controllers;
Use App\Brand;
Use App\Shade;
use App\Product;
Use App\Paking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\User;
Use App\Orders;
Use App\ServiceQuery;
class adminController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function admindisplay(Request $request){
        if(
        $request->email =='shoaib.brosol@gmail.com' &&
        $request->password =='brosol') {
            return view('admin');
        }
        return view('admin.login');
    }
    public function shadeform(){
        $brand = Brand::all();
        $products = Product::all();

        return view('shadesform',['brand'=>$brand, 'product'=>$products ]);


    }

    public function savedata(Request $request){
        $shades= new Shade();
        $shades->shade_name = $request->shadename;
        $shades->shade_code = $request->shadecode;
        $shades->shade_color = $request->shadecolor;
        $shades->brand_id = $request->brandid;
        $shades->product_id = $request->productid;
        $shades->save();
        return redirect()->route('shadeformdata');
    }

    public function pakingview(){

        $brand = Brand::all();
        $products = Product::all();
        $shade = Shade::all();

        return view('pakingform')
            ->with("brand",$brand)
        ->with("product",$products)
            ->with("shade",$shade);

    }

    public function savepkfm(Request $request){

        $paking =  new Paking();

        $paking->paking_value = $request->pakingvalue;
        $paking->paking_price = $request->pakingprice;
        $paking->paking_discount_price = $request->discountprice;
        $paking->paking_is_discounted = $request->isdiscountprice;
        $paking->brand_id = $request->brandid;
        $paking->product_id = $request->productid;
        $paking->shade_id = $request->shadeid;
        $paking->save();
        return redirect()->route('pakfm');
    }

    public function getshades(Request $request){

        $data = $request->input();

        $shade = Shade::where("product_id",$data['id'])
            ->select('shade_name','id')
            ->get();

        return response()->json($shade);

    }
    public function usdata(){
        $user = User::orderBy("id","DESC")->paginate(40);
        return view('admin.user')
            ->with("users",$user);

    }
    public function ordata(){
        $order = Orders::orderBy("id","DESC")->paginate(40);
        return view('admin.order')
            ->with("orders",$order);

    }
    public function qudata(){
        $Query = ServiceQuery::orderBy("id","DESC")->paginate(40);
        return view('admin.query')
            ->with("query",$Query);

    }
}
