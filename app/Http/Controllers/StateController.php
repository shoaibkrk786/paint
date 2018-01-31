<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Company;
use App\Sharings;
use \Carbon\Carbon;

class StateController extends Controller {

    //
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function companyLeftsideBar()
    {
        $user = Auth::user();
        $company = Company::where("user_id",$user->id)
                ->first();
        
        return view('includes.leftsidebar')
                ->with("user",$user)
                ->with("company",$company);
    }
    
    public function start_sharing_update(Request $request)
    {
        $user = Auth::user();
        $data = $request->input();
        $data_sharing['user_text'] = $data['share'];
        $data_sharing['is_text'] = 'Y';
        $data_sharing['is_image'] = 'N';
        $data_sharing['status'] = 'Y';
        $data_sharing['user_id'] = $user->id;
        $id = Sharings::create($data_sharing);
        $res['status'] = true;

        $newShare = Sharings::where("id",$id->id)
            ->first();

        $res['timeToShare'] = Carbon::createFromTimeStamp(strtotime($newShare->updated_at))->diffForHumans();
        $res['name'] = $user->name;
        $res['city'] = $user->city;
        $res['share'] = $data_sharing['user_text'];
        return response()->json($res);
    }


}
