<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
  
    public function showLoginForm()
    {
        /*var_dump("OLÀ: ");
        print_r("request");
        dump("test");*/
        return view('auth.login');
        
    }

    public function login(Request $request)
    {
        /*echo("teste");
        var_dump("OLÀ: ");
        print_r($request);
        dump("test");*/
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida
            return redirect()->intended('/');
        }

        // Autenticação falhou
        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
