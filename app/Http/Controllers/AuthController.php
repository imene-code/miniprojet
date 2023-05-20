<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Enseignant;
use App\Models\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Logique de validation et d'authentification de l'utilisateur
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // L'authentification est réussie
            if (auth()->user()->user_type === 'etudiant') {
                return redirect()->route('etudiant.dashboard');
            } elseif (auth()->user()->user_type === 'enseignant') {
                return redirect()->route('enseignant.dashboard');
            } elseif (auth()->user()->user_type === 'responsable') {
                return redirect()->route('responsable.dashboard');
            } else {
                return redirect('/dashboard');
            }
        } else {
            // L'authentification a échoué
            return back()->withErrors([
                'email' => 'Les informations d\'identification sont invalides.',
            ]);
        }
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

    public function getEtudiantEmail($id)
    {
        $etudiant = Etudiant::where('idE', $id)->first();
        if ($etudiant) {
            $email = $etudiant->user->email;
            // Utilisez $email comme nécessaire
            return $email;
        } else {
            // L'étudiant avec l'ID donné n'a pas été trouvé
            return 'Étudiant non trouvé';
        }
    }

    public function getEnseignantEmail($id)
    {
        $enseignant = Enseignant::where('idEN', $id)->first();
        if ($enseignant) {
            $email = $enseignant->user->email;
            // Utilisez $email comme nécessaire
            return $email;
        } else {
            // L'enseignant avec l'ID donné n'a pas été trouvé
            return 'Enseignant non trouvé';
        }
    }

    public function getResponsableEmail($id)
    {
        $responsable = Responsable::where('idR', $id)->first();
        if ($responsable) {
            $email = $responsable->user->email;
            // Utilisez $email comme nécessaire
            return $email;
        } else {
            // Le responsable avec l'ID donné n'a pas été trouvé
            return 'Responsable non trouvé';
        }
    }
}


