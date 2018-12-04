<?php

namespace App\Http\Controllers\Web\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\User;
use Sentinel;
use Toastr;
use App\Helpers\userFunctionsHelper;

class UserController extends Controller
{


    static function getProfile()
    {


        $sponsor = User::where('id', Sentinel::getUser()->registrar_id)->first();

        if (!$sponsor) {
            $sponsorCode = "";
            $sponsorName = "";
        } else {
            $sponsorCode = $sponsor->reference_code;
            $sponsorName = $sponsor->first_name . " " . $sponsor->last_name;
        }


        $countryList = Countries::all();

        return view('backend/user/profileEdit')
            ->with('countryList', $countryList)
            ->with('sponsorCode', $sponsorCode)
            ->with('sponsorName', $sponsorName);
    }

    static function getPassword()
    {


        $sponsor = User::where('id', Sentinel::getUser()->registrar_id)->first();

        if (!$sponsor) {
            $sponsorCode = "";
            $sponsorName = "";
        } else {
            $sponsorCode = $sponsor->reference_code;
            $sponsorName = $sponsor->first_name . " " . $sponsor->last_name;
        }


        return view('backend/user/passwordChange')
            ->with('sponsorCode', $sponsorCode)
            ->with('sponsorName', $sponsorName);
    }

    static function postPassword(Request $request)
    {

        if(empty($request->oldpassword) OR empty($request->password1) OR empty($request->password2)){
            Toastr::error(trans('backend/user.allfieldError'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
            return back()->withInput();
        }


        if($request->password1!==$request->password2){
            Toastr::error(trans('backend/user.passwordError'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
            return back()->withInput();
        }


        if (password_verify($request->oldpassword, Sentinel::getUser()->password)) {
            //Bilgiler Doğru olduğu için bu satır yeni parolayı güncelliyoruz.
            $newPass = password_hash($request->password1, PASSWORD_DEFAULT);
            $changePassword = User::where('id',Sentinel::getUser()->id)
                ->update(['password'=>$newPass]);

            if($changePassword){
                Toastr::success(trans('backend/user.passwordChanged'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
                return back()->withInput();
            }

        }else{
            Toastr::error(trans('backend/user.activePassError'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
            return back()->withInput();
        }


    }

    static function myProfilePost(Request $request)
    {

        if (empty($request->username) OR empty($request->email) OR empty($request->country) OR empty($request->city)) {
            Toastr::error(trans('backend/user.allfieldError'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
            return back()->withInput();
        } else {

            //bilgileri sorgulamak için tüm kullanıcıların kaydını veritabanından alıyoruz.
            $allUsers = User::where('status', 1)->where('id', '!=', Sentinel::getUser()->id)->get();
            //dd($allUsers);

            $usernameControl = userFunctionsHelper::columnControl($allUsers, 'username', $request->username);
            if (!empty($usernameControl)) {
                Toastr::error(trans('backend/user.usernameError'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
                return back()->withInput();
            }

            $userEmailControl = userFunctionsHelper::columnControl($allUsers, 'email', $request->email);
            if (!empty($userEmailControl)) {
                Toastr::error(trans('backend/user.EmailError'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
                return back()->withInput();
            }

            $birthdayLast = '0000-00-00';

            if (!empty($request->birtday)) {
                $birthday = explode('/', $request->birtday);
                if (isset($birthday[0]) AND isset($birthday[0]) AND isset($birthday[0])) {
                    $birthdayLast = $birthday[2] . "-" . $birthday[1] . "-" . $birthday[0];
                }
            }


            $datas = array(
                'identity' => $request->identity,
                'telephone' => $request->telephone,
                'birthday' => $birthdayLast,
                'username' => $request->username,
                'email' => $request->email,
                'country' => $request->country,
                'city' => $request->city,
            );


            //Bilgiler eksiksiz ve doğru güncelleme yapıyoruz.
            $updateUser = User::where('id', Sentinel::getUser()->id)->update($datas);
            if (!empty($updateUser)) {
                Toastr::success(trans('backend/general.updateDatas'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
                return back()->withInput();
            }


        }

    }

    static function noAuthorization(){

        return view('backend.noAuthorization');
    }
}
