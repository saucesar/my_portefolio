<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        try {
            if(Auth::attempt($request->only(['email', 'password']))) {
                return redirect()->route('home')->with('success', 'Bem vindo!');
            } else {
                throw new \Exception('Senha inválida');
            }
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function logout()
    {
        try {
            Auth::logout();
            return redirect()->route('home')->with('success', 'Sessão encerrada!');
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
