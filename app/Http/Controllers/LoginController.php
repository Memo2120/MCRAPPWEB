<?php

namespace App\Http\Controllers;


use App\Models\User;
use illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function registrer(Request $request){
        //Validar datos

        $user = new User();

        $user ->name = $request->name;
        $user ->email = $request->email;
        $user ->password = Hash::make($request->password) ;

        $user->save();

        Auth::login($user);

        return redirect(route('btoones'));

    }

    public function login(Request $request){
        //Validar datos
    }

    public function logout(Request $request){
        //Validar datos
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('sesion'));
    }
}
