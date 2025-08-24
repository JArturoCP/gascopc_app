<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $usuarios = config('usuarios');

        foreach ($usuarios as $usuario) {
            if ($usuario['email'] === $request->email && $usuario['password'] === $request->password) {
                // Guarda solo lo necesario
                session(['usuario' => [
                    'email' => $usuario['email'],
                    'name'  => $usuario['name'],
                ]]);

                return redirect()->route('dashboard');
            }
        }

        return back()
            ->withErrors(['login' => 'Usuario o contraseña incorrectos'])
            ->withInput();
    }

    public function logout()
    {
        session()->forget('usuario');
        return redirect()->route('login');
    }
}
