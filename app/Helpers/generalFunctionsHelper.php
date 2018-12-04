<?php

namespace App\Helpers;

use Mail;
use Request;

class generalFunctionsHelper
{
    static function sendMail($templateView, $bladeDatas ,$mailDatas)
    {
        Mail::send($templateView, $bladeDatas, function ($message) use ($mailDatas) {
            $message->to($mailDatas['mailTo'], $mailDatas['fullName'])
                ->subject($mailDatas['subject']);
            $message->from($mailDatas['fromTo'], $mailDatas['title']);
        });
    }

    public static function selectActiveMenu($segmentNumber, $arraylink, $className, $css = 0)
    {
        foreach ($arraylink as $link) {
            $newlink = explode("/",str_replace(request()->getSchemeAndHttpHost() . "/" . Request::segment(1) . "/", '', $link));
            $newList[] = $newlink[0];
        }

        if (isset($newList) AND Count($newList) > 0 AND in_array(Request::segment($segmentNumber), $newList)) {
            if (!empty($css)) {
                echo "class='" . $className . "'";
            } else {
                echo $className;
            }
        }
    }

    public static function settingMiddlewareMenu($authList=null, $arraylink)
    {

        $middlewareAuth = 0;
        if($authList=='*'){
            $middlewareAuth = 1;
        }
        else{

            if($authList==null){
                $middlewareAuth = 0;
            }else{
                foreach ($authList as $authDetail){

                    if(in_array($authDetail,$arraylink)){
                        $middlewareAuth = 1;
                    }
                }
            }
        }

        return $middlewareAuth;

    }

}
