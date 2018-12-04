<?php

namespace App\Http\Controllers\Web\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use userFunctionsHelper;
use App\Models\User;
use App\Models\Cities;

class AjaxController extends Controller
{
    public function controlSponsor(Request $request)
    {

        $referenceCode = $request->id;

        $value = 0;

        if (!empty(userFunctionsHelper::codeControl($referenceCode))) {
            $userControl = User::where('reference_code', $referenceCode)->where('status', 1)->first();
            if (!empty($userControl)) {
                $value = $userControl->first_name . " " . $userControl->last_name;
            }

        }

        return $value;
    }

    public function controlUsername(Request $request)
    {

        $username = $request->id;

        $value = 0;

        if (strlen($username) > 2) {
            $userControl = User::where('username', $username)->first();
            if (empty($userControl)) {
                $value = 1;
            }
        }

        return $value;
    }

    public function controlEmail(Request $request)
    {
        $email = $request->id;
        $value = 0;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $userControl = User::where('email', $email)->first();
            if (empty($userControl)) {
                $value = 1;
            }

        }

        return $value;
    }

    public function cityList(Request $request)
    {
        $value = "";
        $countryID = $request->id;
        $cityID = $request->ciyt_id;

        $citiesQuery = Cities::where('country_id', $countryID)->get();

        foreach ($citiesQuery as $citiesDetail) {
            $selected = '';
            if ($citiesDetail->id == $cityID) {
                $selected = 'selected';
            }

            $value = $value . "<option " . $selected . " value='" . $citiesDetail->id . "'>" . $citiesDetail->name . "</option>";
        }


        return $value;

    }

    public function getTeam($userID)
    {

        //Tüm Üyelerin Listesini Alıyoruz unilevel listesini belirlemek için
        $allUsers = User::all();
        if ($allUsers) {
            foreach ($allUsers as $usersDetail) {
                $newList[$usersDetail->registrar_id][] = $usersDetail;
            }
        }
        if (isset($newList[$userID]) AND !empty($newList[$userID])) {
            $return = '<ul class="subteam" data-id="' . $userID . '">';
            foreach ($newList[$userID] as $userDetail) {
                $return = $return . '<li data-id="'.$userDetail->id .'">';

                if (isset($newList[$userDetail->id]) AND !empty($newList[$userDetail->id])) {
                    $return = $return . '<i class="fa fa-plus fa-2x plus"></i>';
                } else {
                    $return = $return . '<i class="fa fa-minus fa-2x plus"></i>';
                }

                $return = $return . '<span class="avatarx"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNDTY_vOTdz8iNjdwFOn0E4an9WlZem_AfIG494Dg-2IocL6hj"/></span>';
                $return = $return . '<span class="name">' . $userDetail->first_name . " " . $userDetail->last_name . ' ('. $userDetail->reference_code .')</span>';
                $return = $return . '<div class="menu">';
                $return = $return . '<a href="#"><span class="fa fa-list"></span></a>';
                $return = $return . '<a href="#"><span class="fa fa-star"></span></a>';
                $return = $return . '<a href="#"> <span class="fa fa-send"></span> </a>';
                $return = $return . '<a href="#"> <span class="fa fa-check"></span></a>';
                $return = $return . '<a href="#"> <span class="fa fa-square"></span> </a>';
                $return = $return . '</div>';
                $return = $return . '<span class="status"></span>';
                $return = $return . '</li>';
            }
            $return = $return . '</ul>';
            // $(icon[0].childNodes[1]).parent().after('<ul class="subteam" data-id='+index+'><li> <i class="fa fa-plus fa-2x plus"></i> <span class="avatarx"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNDTY_vOTdz8iNjdwFOn0E4an9WlZem_AfIG494Dg-2IocL6hj"/></span> <span class="name">Alt Menu</span><div class="menu"> <a href="#"> <span class="fa fa-list"></span> </a> <a href="#"> <span class="fa fa-star"></span> </a> <a href="#"> <span class="fa fa-send"></span> </a> <a href="#"> <span class="fa fa-check"></span> </a> <a href="#"> <span class="fa fa-square"></span> </a></div> <span class="status"></span></li></ul>');


        }


        return $return;

    }


}
