<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    public function dashboard()
    {
        // Logique spécifique au tableau de bord des enseignants
        // ...

        // Retourner la vue du tableau de bord des enseignants
        return view('enseignant.dashboard');
    }
}
