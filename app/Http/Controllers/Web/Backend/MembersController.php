<?php

namespace App\Http\Controllers\Web\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\User;
use Sentinel;
use Toastr;
use App\Helpers\userFunctionsHelper;

class MembersController extends Controller
{
    static function userList($columb=null,$value=null)
    {

        if($columb!=null AND $value!=null){
            $userQuery = User::where($columb,$value)->orderBy('id', 'asc')->paginate(1);
        }else{
            $userQuery = User::orderBy('id', 'asc')->paginate(1);
        }





        return view('backend/Members/memberList')
            ->with('userlist', $userQuery)
            ->with('pagination',$userQuery)

            ;




        dd($userQuery);
        /*
        return view('backend/user/profileEdit')
            ->with('countryList', $countryList)
            ->with('sponsorCode', $sponsorCode)
            ->with('sponsorName', $sponsorName);

        */

    }
}
