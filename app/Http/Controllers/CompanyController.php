<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Auth;
use App\Brand;
use App\User;

class CompanyController extends Controller {

    public function index($comp) {
        $comp = str_replace("-", " ", $comp);

        $company = Company::where("company_name", $comp)
                ->first();

        if (!is_null($company)) {
            $brands = Brand::where("id", $company->company_brand_id)
                    ->first();
            return view('company')
                            ->with("brands", $brands)
                            ->with("company", $company);
        } else {
            $user = User::where("name",$comp)
                    ->first();
            return view('company')
                           ->with("user", $user);
        }
    }

    public function allBrands() {
        $brands = Brand::orderBy("brand_sort_id", "asc")
                ->get();

        return view('brands')
                        ->with("brands", $brands);
    }

}
