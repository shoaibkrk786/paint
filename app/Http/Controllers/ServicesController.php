<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paking;
use App\Shade;
use Cart;
use App\Product,
    App\Brand;
use Hash;
use App\User;
use Auth;
use App\Company;
use App\ServiceQuery;

class ServicesController extends Controller {

    //
    public function getPriceforPacking(Request $request) {
        $data = $request->input();
        $packing = Paking::where("id", $data['id'])
                ->first();

        return response()
                        ->json($packing);
    }

    public function khareedo_proceed(Request $request) {
        $data = $request->input();
        $brand = Brand::where("id", $data['brand_id'])
                ->first();
        $product = Product::where("id", $data['product_id'])
                ->first();
        $packing = Paking::where("id", $data['packing'])
                ->first();

        $shade = Shade::where("id", $data['shade_id'])
                ->first();

        $options['brand_name'] = $brand->brand_name;
        $options['brand_id'] = $brand->id;
        $options['packing_value'] = $packing->paking_value;
        $options['discount_price'] = $packing->paking_discount_price;
        $options['org_price'] = $packing->paking_price;
        $options['shade_id'] = $shade->id;
        $options['shade_name'] = $shade->shade_name;
        $options['shade_code'] = $shade->shade_code;
        $options['shade_color'] = $shade->shade_color;
        $options['product_pic'] = $product->product_pic;
        $options['org_quantity'] = $data['quantity'];

        Cart::instance('shopping')->add($product->id, $product->product_name, 1, $options['discount_price'], $options);
        $returnData['status'] = True;
        return response()->json($returnData);
    }

    public function place_order(Request $request) {
        $data = $request->input();

        if ($data['password'] != '') {
            $dataP['email'] = $data['email'];
            $dataP['password'] = Hash::make($data['password']);
            $dataP['name'] = $data['name'];
            $dataP['company'] = $data['company'];
            $dataP['city'] = $data['city'];
            $dataP['mobile_number'] = $data['mobile_number'];
            $dataP['state'] = $data['state'];
            $dataP['address'] = $data['address'];
            $user = User::create($dataP);

            if ($data['company'] != '') {

                $companyData['company_name'] = $data['company'];
                $companyData['company_about'] = $data['company'];
                $companyData['user_id'] = $user;
                Company::create($companyData);
            } else {
                $companyData['company_name'] = $data['name'];
                $companyData['company_about'] = $data['name'];
                $companyData['user_id'] = $user;
                Company::create($companyData);
            }
            $dataN['shipping_city'] = $data['city'];
            $dataN['name'] = $data['name'];
            $dataN['shipping_mobile_number'] = $data['mobile_number'];
            $dataN['shipping_state'] = $data['state'];
            $dataN['shipping_email'] = $data['email'];
            $dataN['comments'] = $data['comments'];
            $dataN['user_id'] = $user->id;

            foreach (Cart::instance('shopping')->content() as $ct) {
                $dataN['product_id'] = $ct->id;
                $dataN['brand_id'] = $ct->options->brand_id;
                $dataN['shade_id'] = $ct->options->shade_id;
                $dataN['unit_price'] = $ct->price;
                $dataN['packing_value'] = $ct->options->packing_value;
                $dataN['discounted_price'] = $ct->options->discount_price;
                $dataN['order_rand_id'] = rand(5, 555555);
                $dataN['shipping_address'] = $data['address'];
                \App\Orders::create($dataN);
            }
        } else {

            $dataN['shipping_city'] = $data['city'];
            $dataN['name'] = $data['name'];
            $dataN['shipping_mobile_number'] = $data['mobile_number'];
            $dataN['shipping_state'] = $data['state'];
            $dataN['shipping_email'] = $data['email'];
            $dataN['comments'] = $data['comments'];

            foreach (Cart::instance('shopping')->content() as $ct) {
                $dataN['product_id'] = $ct->id;
                $dataN['brand_id'] = $ct->options->brand_id;
                $dataN['shade_id'] = $ct->options->shade_id;
                $dataN['unit_price'] = $ct->price;
                $dataN['packing_value'] = $ct->options->packing_value;
                $dataN['discounted_price'] = $ct->options->discount_price;
                $dataN['order_rand_id'] = rand(5, 555555);
                $dataN['shipping_address'] = $data['address'];
                \App\Orders::create($dataN);
            }
        }
        Cart::instance('shopping')->destroy();
        $res['status'] = true;
        return response()->json($res);
    }

    public function get_verified_order(Request $request) {
        $data = $request->input();
        $user = User::where("mobile_number", $data['mobile_number'])
                ->first();
        if (!is_null($user)) {
            if (Hash::check($data['password'], $user->password)) {
                Auth::login($user);
                $res['status'] = true;
                return response()->json($res);
            }

            $res['status'] = false;
            return response()->json($res);
        } else {
            $res['status'] = false;
            return response()->json($res);
        }
    }

    public function get_basket() {
        return view('includes.khareedo_basket');
    }

    public function place_query(Request $request) {
        $data = $request->input();
        $data_q['name'] = $data['name'];
        $data_q['mobile_number'] = $data['mobile'];
        $data_q['description'] = $data['description'];
        $data_q['type'] = $data['required'];

        ServiceQuery::create($data_q);
        $res['status'] = true;
        return response()->json($res);
    }

    public function email_sub(Request $request) {
        $data = $request->input();
        $data_q['name'] = $data['email'];
        $data_q['mobile_number'] = $data['email'];
        $data_q['description'] = $data['email'];
        $data_q['type'] = 'email_enquiry';

        ServiceQuery::create($data_q);
        $res['status'] = true;
        return response()->json($res);
    }

    public function remove_shopping(Request $request) {
        $data = $request->input();
        Cart::instance('shopping')->remove($data['id']);
        $res['status'] = true;
        return response()->json($res);
    }

}
