<?php

namespace App\Http\Controllers\Web\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use userFunctionsHelper;

class HomePageController extends Controller
{
    static function homePage()
    {
        return view('frontend.main');
    }
}
