<?php

namespace App\Http\Controllers;


use App\Models\User;

use illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Hash;

// class LoginController extends Controller
// {
//     //
//  public function registrer(Request $request){
//         //Validar datos

//         $user = new User();

//         $user ->name = $request->name;
//         // $user ->email = $request->email;
//         $user ->password = Hash::make($request->password) ;

//         $user->save();

//         Auth::login($user);

//         return redirect(route('btoones'));
    
//    }

//     public function login(Request $request){
//         //Validar datos

//         $credentials = [
//             "name" => $request->nombre,
//             "password" => $request->password
//         ];

//         if (Auth::attempt($credentials)) {
//             $request->session()->regenerate();

//             return redirect()->intended(route('btoones'));
//         }else {
//             return redirect()->route('inicio');
//         }
//     }

//     public function logout(Request $request){
//         //Validar datos
//         Auth::logout();

//         $request->session()->invalidate();
//         $request->session()->regenerateToken();

//         return redirect(route('sesion'));
//     }
// }


class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {

        // $credentials = $request->validate([
        //     'name' => ['required', 'name'],
        //     'password' => ['required'],
        //
            $name = $request->name;
            $password = $request->password;
        if (Auth::attempt(['name' => $name, 'password' => $password, 'estado' => 'Activo', 'tipo' => 'Master'])) {
            
            $request->session()->regenerate();
            session_start();
            return redirect()->intended('/btoones');
         }
        //else{
        //         return redirect()->route('inicio');
        // }

        if (Auth::attempt(['name' => $name, 'password' => $password, 'estado' => 'Activo', 'tipo' => 'Empleado'])) {
            
            $request->session()->regenerate();
            session_start();
            return redirect()->intended('/inicio');
        }
 
        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ])->onlyInput('name');
    }

    public function register(Request $request){
        //         //Validar datos
        
                 $user = new User();
        
                 $user ->name = $request->input('name');
                 $user ->password = \Hash::make($request->input('password')) ;
                 $user ->tipo = 'Empleado';
                 $user ->estado ='Activo';

        
                 $user->save();
        
                 Auth::login($user);
        
                 return redirect(asset('btoones'));
            
            }

            public function logout(Request $request){
                         //Validar datos
                         Auth::logout();
                
                         $request->session()->invalidate();
                         $request->session()->regenerateToken();
                
                         return redirect(asset('/inicio'));
                     }
}