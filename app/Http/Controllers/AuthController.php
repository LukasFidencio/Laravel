<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        // get all the users from the database
        // $users = User::all()->toArray();

        // as an object instance of the model's class
        $userModel = new User();
        $users = $userModel->all()->toArray();
        echo '<pre>';
        print_r($users);
    }

    public function logout()
    {
        return view('logout');
    }
}
