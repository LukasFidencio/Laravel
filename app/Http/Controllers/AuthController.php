<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        // form validation
        $request->validate(
            // rules
            [
                'text_username' => 'required|email',
                'text_password' => 'required|min:6|max:16'
            ],
            //error messages
            [
                'text_username.required' => 'O usuário é obrigatório!',
                'text_username.email' => 'Deve ser um email válido!',
                'text_password.required' => 'Senha obrigatória!',
                'text_password.min' => 'A senha deve possuir no mínimo :min caracteres!',
                'text_password.max' => 'A senha deve possuir no máximo :max caracteres!'
                ]
        );

        // get user input
        $username = $request->input('text_username');
        $password = $request->input('text_password');

        echo 'OK!';
    }

    public function logout()
    {
        return view('logout');
    }
}
