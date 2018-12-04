<?php

namespace App\Http\Controllers\Web\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;
use App\Models\User;

class MyTeamController extends Controller
{
    //Üyeler menüsü
    static function getMembers()
    {

    }

    public static function getTeam(){

        $userID = Sentinel::getUser()->id;
        //Tüm Üyelerin Listesini Alıyoruz unilevel listesini belirlemek için
        $allUsers = User::all();
        if($allUsers){
            foreach ($allUsers as $usersDetail){
                $newList[$usersDetail->registrar_id][]=$usersDetail;
            }
        }
        if(!isset($newList[$userID])){
            $newList=0;
        }




        return view('backend/MyTeam/myTeam')
            ->with('userList',$newList)
            ;
    }
}
