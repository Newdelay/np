<?php

namespace App\Http\Controllers\Web\Frontend;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Sentinel;
use Reminder;
use App\Models\User;
use App\Models\Reminders;
use Toastr;
use Mail;


class LoginController extends Controller
{
    public function Index()
    {

        return view('frontend/login');
    }

    public function loginControl(Request $request)
    {

        $credentials = [
            'login' => $request->username,
            'password' => $request->password,
        ];

        if (Sentinel::forceAuthenticate($credentials)) {
            return redirect()->route('dashboard');
        } else {
            Toastr::error(trans('errors.errorLogin'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
            return back();
        }


    }

    public function passwordReset($id = null)
    {

        if ($id != null) {

            //Süresi geçmiş aktivasyon kodlarını temizliyoruz.
            Reminder::removeExpired();

            //aktivasyon kodu geçerli mi geçerliyse hangi kullanıcıya ait bilgisini alıyoruz.
            $codeControl = Reminders::where('code', $id)->where('completed', 0)->where('completed_at', NULL)->first();
            if (!$codeControl) {
                Toastr::error(trans('errors.activationCodeError'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
                return redirect()->route('passwordReset');
            } else {
                return view('frontend/newPassword')
                    ->with('token', $id);
            }
        }

        return view('frontend.passwordReset');
    }

    public function postPasswordResetToken(Request $request, $id)
    {

        // Parola alanları boş mu geldi diye kontrol ediyoruz.
        if(empty($request->password1) OR empty($request->password2)){
            Toastr::error(trans('frontend/register.allfieldError'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
            return back();
        }

        //Parola alanları birbiriyle uyuşuyor mu diye kontrol ediyoruz.
        if($request->password1!==$request->password2){
            Toastr::error(trans('frontend/register.passwordError'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
            return back();
        }

        //Süresi geçmiş aktivasyon kodlarını temizliyoruz.
        Reminder::removeExpired();

        //aktivasyon kodu geçerli mi geçerliyse hangi kullanıcıya ait bilgisini alıyoruz.
        $codeControl = Reminders::where('code', $id)->where('completed', 0)->where('completed_at', NULL)->first();
        if (!$codeControl) {
            Toastr::error(trans('errors.activationCodeError'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
            return redirect()->route('passwordReset');
        } else {
            $user = Sentinel::findById($codeControl->user_id);

            if(Reminder::complete($user, $id, $request->password1)){
                Toastr::success(trans('general.passwordChanged'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
                return redirect()->route('login');
            }else{
                Toastr::error(trans('general.errorStatic'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
                return redirect()->route('passwordReset');
            }
        }
    }

    public function postPasswordReset(Request $request)
    {

        /*

        //Mail Göndermek için kullandığımız kodlar

        $bladeDatas=array(
            'token' => 'Deneme Emre açıklama',
        );

        $mailDatas = array(
            'mailTo'=>'emremutlum@gmail.com',
            'fromTo'=>'2eb13de50a-72fd2a@inbox.mailtrap.io',
            'fullName'=>'Full Name',
            'subject'=>'Subject',
            'title'=>'Title',
        );

        generalFunctionsHelper::sendMail('mailTemplate/passwordReset',$bladeDatas,$mailDatas);

         */


        if (empty($request->login)) {
            Toastr::error(trans('errors.usernameOrEmailEmpty'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
            return back();
        }

        //Gönderilen bilgi var mı yok mu kontrol ediyoruz.
        $dataControl = User::where('email', $request->login)->orWhere('username', $request->login)->first();
        if (!empty($dataControl->id)) {
            //Eğer veri varsa üyenin email adresine sıfırlama maili gönderiyoruz.

            $userEmail = $dataControl->email;
            $userID = $dataControl->id;
            $user = Sentinel::findById($userID);

            //Süresi geçmiş aktivasyon kodlarını temizliyoruz.
            Reminder::removeExpired();
            $actvCode = Reminder::create($user);

            Toastr::success(trans('general.sendResetPassword'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
            return back();
        }else{
            Toastr::error(trans('general.userNotFound'), '', ["positionClass" => "toast-top-right", "progressBar" => true]);
            return back();
        }


    }


    public function logout()
    {

        Sentinel::logout();
        return redirect()->route('homePage');

    }

}
