<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{

    public function signup(Request $request) {

        

        if ($request->method() === 'POST'){

            $errorsList = [];

            dump($request);

            $email = trim($request->input('email'));
            $firstname = trim($request->input('firstname'));
            $lastname = trim($request->input('lastname'));
            $password = trim($request->input('password'));
            $passwordConfirm = trim($request->input('passwordConfirm'));


            if (empty($email) || empty($firstname) || empty($lastname) || empty($password) || empty($passwordConfirm)) {

                $errorsList[] = 'Un ou plusieurs champs ne sont pas renseignés';
                
            }

            if ($password != $passwordConfirm) {

                $errorsList[] = 'Les deux champs mot de passes ne sont pas identiques';

            }

            if (strlen($password) < 6) {

                $errorsList[] = 'Pour des raisons de sécurité veuillez choisir un mot de passe supérieur à 5 caractères';

            }

        }

        return view('signup', ['errorsList' => $errorsList]);

    }

    public function signin(Request $request) {

        dump($request);
        return view('signin');

    }
}