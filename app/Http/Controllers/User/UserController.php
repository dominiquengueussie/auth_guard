<?php

namespace App\Http\Controllers\User;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|min:5|max:50',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8|max:12',
                'confirm-password' => 'required|max:12|min:8|same:password',
            ],
            [
                'email.exists' => 'Cette adresse email existe délà',
                /* "email" => "Le champ email est requis",
            "password" => "Le champ mot de passe est requis",
            "confirm-password" => "confirmer le mot de passe svp",*/
            ]
        );

        $datas = new User();
        $datas->name = $request->name;
        $datas->email = $request->email;
        $datas->password = Hash::make($request->password);
        $save = $datas->save();

        if ($save) {
            return redirect()
                ->back()
                ->with('success', 'Utilisateur enregistré avec succès!');
        } else {
            return redirect()
                ->back()
                ->with('fail', "Echec d'enregistrement!");
        }
    }

    public function check(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|exists:users,email',
                'password' => 'required|min:8|max:12',
            ],
            [
                'email.exists' =>
                    'mauvaise adresse email, veuillez recommencer svp!',
                'password.exists' =>
                    'mauvais mot de passe, veuillez recommencer svp!',
            ]
        );

        $datas = $request->only('email', 'password');

        if (Auth::attempt($datas)) {
            return redirect()->route('user.home');
        } else {
            return redirect()
                ->route('user.login')
                ->with('fail', 'Données saisies incorrectes');
        }
    }

   /*  public function logout()
    {
        Auth::logout();
        return redirect('/');
    } */
}
