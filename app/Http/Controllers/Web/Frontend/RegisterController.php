<?php

namespace App\Http\Controllers\Web\Frontend;

use PHPUnit\Framework\Constraint\Count;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use userFunctionsHelper;
use Sentinel;
use Toastr;
use App\Models\Countries;
use App\Models\User;


class RegisterController extends Controller
{
    public function Index(Request $request, $id = null)
    {
        $masterNode = 0;
        $myRange = 100;
        $bot = 0;
        if (isset($request->range) AND !empty($request->range) AND $request->range >= 100) {
            $myRange = $request->range;
            if ($request->range >= 1000) {
                $myRange = 1000;
            }
        }

        if (isset($request->mn) AND $request->mn == 'on') {
            $masterNode = 1;
        }

        if (isset($request->bot) AND $request->bot == 'on') {
            $bot = 1;
        }


        $boxMonthlyAct = ($myRange * 4) / 100;
        $boxMonthly = number_format($boxMonthlyAct, 2);
        $boxDaily = number_format(($boxMonthlyAct / 30),2);
        $box6Monthly = number_format(($boxMonthlyAct * 6),2);



        $inputs = array(
            'myRange' => $myRange,
            'masterNode' => $masterNode,
            'bot' => $bot,
        );

        $boxes = array(
            'boxMonthly' => $boxMonthly,
            'boxDaily' => $boxDaily,
            'box6Monthly' => $box6Monthly,
        );


        //Aktif Ülkelerin Listesini Alıyoruz.
        $countryList = Countries::where('status', 1)->get();

        $referenceCode = "";
        if (!empty($id)) {

            if (!empty(userFunctionsHelper::codeControl($id))) {
                $referenceCode = $id;
            } else {
                Toastr::error(trans('frontend/register.errorSponsorCode'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
                return redirect()->route('register');
            }

        }

        return view('frontend/register')
            ->with('referenceCode', $referenceCode)
            ->with('countryList', $countryList)
            ->with('inputs', $inputs)
            ->with('boxes', $boxes)

            ;
    }

    public function newUser(Request $request)
    {

        //dd($request->all());
        if (empty($request->sponsor) OR empty($request->first_name) OR empty($request->last_name) OR empty($request->username) OR empty($request->email) OR empty($request->country_code) OR empty($request->phone_no) OR empty($request->password1) OR empty($request->password2) OR !isset($request->country) OR !isset($request->city) OR !isset($request->bDay) OR !isset($request->bMonth) OR !isset($request->bYear) OR !isset($request->contract) OR !isset($request->mn) OR empty($request->range)) {
            Toastr::error(trans('frontend/register.allfieldError'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
            return back()->withInput();
        } else {


            $masterNode = 0;
            $myRange = 100;
            $bot = 0;
            if (isset($request->range) AND !empty($request->range) AND $request->range >= 100) {
                $myRange = $request->range;
                if ($request->range >= 1000) {
                    $myRange = 1000;
                }
            }

            if (isset($request->mn) AND $request->mn == 'on') {
                $masterNode = 1;
            }

            if (isset($request->bot) AND $request->bot == 'on') {
                $bot = 1;
            }

            //bilgileri sorgulamak için tüm kullanıcıların kaydını veritabanından alıyoruz.
            $allUsers = User::where('status', 1)->get();


            //belirtilen sponsor koduna sahip üyemiz var mı kontrol ediyoruz
            $sponsorID = userFunctionsHelper::columnControl($allUsers, 'reference_code', $request->sponsor);
            if (empty($sponsorID)) {
                Toastr::error(trans('frontend/register.notFoundSponsor'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
                return back()->withInput();
            }

            //belirtilen kullanıcı adına sahip üyemiz var mı kontrol ediyoruz.
            $usernameControl = userFunctionsHelper::columnControl($allUsers, 'username', $request->username);

            if (!empty($usernameControl)) {
                Toastr::error(trans('frontend/register.usernameError'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
                return back()->withInput();
            }


            //belirtilen email sahip üyemiz var mı kontrol ediyoruz.
            $emailControl = userFunctionsHelper::columnControl($allUsers, 'email', $request->email);
            if (!empty($emailControl)) {
                Toastr::error(trans('frontend/register.EmailError'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
                return back()->withInput();
            }

            //şifre ve şifre tekrar kısmı birbiriyle uyuşuyor mu kontrol ediyoruz.
            if ($request->password1 !== $request->password2) {
                Toastr::error(trans('frontend/register.passwordError'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
                return back()->withInput();
            } else {
                $password = password_hash($request->password1, PASSWORD_DEFAULT);
            }

            //Doğum günü inputlarını birleştiriyoruz.
            $birthDay = $request->bYear . "-" . $request->bMonth . "-" . $request->bDay;

            //Telefon numarasına ülke kodunu ekleyip boşlukları siliyoruz.
            $telephone = $request->country_code . str_replace(' ', '', $request->phone_no);

            //Yeni Kayıt için benzersiz bir referans kodu oluşturuyoruz.
            $referenceCode = userFunctionsHelper::generateControl($allUsers, '');

            //veritabanın kaydetmek için bilgilerimizin olduğu bir array oluşturuyoruz.
            $addData = array(
                'reference_code' => $referenceCode,
                'registrar_id' => $sponsorID,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $password,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'country' => $request->country,
                'city' => $request->city,
                'birthday' => $birthDay,
                'telephone' => $telephone,
                'investment' => $myRange,
                'masternode' => $masterNode,
                'bot' => $bot,
            );


            $addUser = User::create($addData);

            if (!$addUser) {
                Toastr::error(trans('frontend/register.passwordError'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
                return back()->withInput();
            }


            //Login yapması için bilgileri yeni bir arrayda topluyorum.
            $credentials = [
                'login' => $request->username,
                'password' => $request->password1,
            ];

            if (Sentinel::forceAuthenticate($credentials)) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('homePage');
            }

        }


    }
}
