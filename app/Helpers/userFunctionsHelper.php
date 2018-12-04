<?php

namespace App\Helpers;

class userFunctionsHelper
{
    // Kod Üret.
    public static function generate(){
        $code = "HMZ-".mt_rand(1111111111,mt_getrandmax());
        return $code;
    }


    public static function generateControl($allUsers,$controlCode=null){
        if(!empty($allUsers)){

            if($controlCode==null){
                $controlCode = userFunctionsHelper::generate();
            }
            foreach ($allUsers as $userDetail){
                $userControl[$userDetail->reference_code]=1;
            }

            if(isset($userControl[$controlCode])){
                $controlCode = userFunctionsHelper::generateControl($allUsers,userFunctionsHelper::generate());
            }
        }else{
            $controlCode = 0;
        }
        return $controlCode;
    }

    public static function codeControl($referenceCode){

        $value = 0;

        if(preg_match('/^HMZ\-\d{10}$/i',$referenceCode)){
            $value = 1;
        }

        return $value;


    }

    public static function columnControl($allUsers,$columnName,$value){

        $return = 0;
        if($allUsers != null){
            foreach ($allUsers as $userDetail){
                $lists[$userDetail->$columnName]=$userDetail->id;
            }

            if(isset($lists[$value])){
                $return=$lists[$value];
            }

        }

        return $return;


    }



}
