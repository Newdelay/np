<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;


class TranslationController extends Controller
{
    public function changeLocale($locale=null)
    {

        $locales= ["tr","en"];
        if(in_array($locale,$locales)){
            Session::put('locale', $locale);
            App::setLocale($locale);
            return redirect()->back()->with("language",$locale);
        }

    }
}
