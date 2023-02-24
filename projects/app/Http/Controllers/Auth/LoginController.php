<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            alert()->error('Uyarı', 'Kullanıcı adı veya şifre formatı yanlış')->showConfirmButton('Tamam', '#3085d6');
            return redirect()->route('login.index');

        }

        if (Auth::guard()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->intended(route('home'));
        }
        alert()->error('Uyarı', 'Kullanıcı adı veya şifre yanlış')->showConfirmButton('Tamam', '#3085d6');
        return redirect()->route('login.index');
    }
}
