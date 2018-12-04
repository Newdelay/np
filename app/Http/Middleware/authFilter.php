<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use App\Models\AllRolesAuth;
use Session;

class authFilter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userType = Sentinel::getUser()->user_type;


        if($userType!='1'){
            $authList = AllRolesAuth::where('role_id',$userType)->get();
            if($authList){
                foreach ($authList as $authDetail){
                    $lastList[]=$authDetail->route_name;
                }
            }
        }else{
            $lastList = "*";
        }

        //$lastList = "*";

        if(!isset($lastList)){
            $lastList=array();
        }


        Session::put('authList', $lastList);

        if(request()->route()->getName()=='noAuthorization' OR request()->route()->getName()=='dashboards'){
            return $next($request);
        }else{
            $authStatus = 0 ;

            if($lastList=='*'){
                $authStatus = 1;
            }
            elseif(isset($lastList) AND is_array($lastList) AND in_array(request()->route()->getName(),$lastList)){
                $authStatus = 1;

            }

            if(!empty($authStatus)){
                return $next($request);
            }
            else{
                return redirect()->route('noAuthorization')->send();
            }
        }



    }
}
