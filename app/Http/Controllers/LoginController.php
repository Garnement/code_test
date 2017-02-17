<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class LoginController extends Controller
{
  public function login(Request $request){

      if ($request->isMethod('post') == true)
      {

        $this->validate($request, [
          'email' => 'required|email', //rules
          'password' => 'required'
        ]);

        //Récupération en même temps des champs email et password
        $credentials = $request->only('email', 'password');

        //Permet à l'utilisateur de rester connecté
        $remember = true;

        // Auth classe de Laravel qui permet de faire la requête sur la table Users et de vérifier le couple email/password

        if(Auth::attempt($credentials, $remember))
          {

            return redirect()->intended('dashboard'); // redirige vers la page profile

          } else
          {
            //back() renvoi sur la page précédente
            return back()->withInput($request->only('email')); // redirige vers la page login
          }
        }

    return view('auth.login');
  }


  public function logout()
  {
    auth()->logout();

    return redirect()->route('home');
  }
}
