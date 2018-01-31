<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Hash;
use App\Company;
use App\Brand;

class UserController extends Controller {

    //
    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function login() {
        
    }

    public function signup(Request $request) {
        $data = $request->input();

        $dataP['email'] = $data['email'];
        $dataP['password'] = Hash::make($data['password']);
        $dataP['name'] = $data['name'];
        $dataP['company'] = $data['company'];
        $dataP['city'] = $data['city'];
        $dataP['mobile_number'] = $data['mobile_number'];
        $dataP['state'] = $data['state'];
        $dataP['address'] = $data['address'];

        $alreadyUser = User::where("mobile_number", $data['mobile_number'])
                ->orWhere("email", $data['email'])
                ->first();

        if (is_null($alreadyUser)) {
            $user = User::create($dataP);
            Auth::login($user);
            if ($dataP['company'] != '') {
                $companyData['company_name'] = $data['company'];
                $companyData['company_about'] = $data['Detail'];
                $companyData['user_id'] = $user->id;
                Company::create($companyData);
            }

            $res['status'] = true;
        } else {
            $res['status'] = false;
        }

        return response()->json($res);
    }

    public function profile() {
        $user = Auth::user();
        $company = Company::where("user_id", $user->id)
                ->first();

        if (!is_null($company)) {
            $brands = Brand::where("id", $company->company_brand_id)
                    ->first();
            return view('profile')
                            ->with("brands", $brands)
                            ->with("company", $company);
        } else {
            return view('profile')
                            ->with("user", $user);
        }
    }

    public function add_logo(Request $request) {

        if ($request->hasFile('logoImg')) {
            $file = $request->file('logoImg');
            $tmpFilePath = '/images/cover/';
            $tmpFileName = time() . '-' . $file->getClientOriginalName();
            $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
            $path = $tmpFilePath . $tmpFileName;
            $user = Auth::user();
            $company = Company::where("user_id", $user->id)
                    ->update(["company_logo" => $path]);

            return response()->json(array('path' => $path), 200);
        }
    }

    public function update_aboutus(Request $request) {
        $data = $request->input();
        $user = Auth::user();
        Company::where("user_id", $user->id)
                ->update(["company_about" => $data['aboutus']]);

        return response()->json(array('status' => true), 200);
    }

}
