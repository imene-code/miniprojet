<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    public function dashboard()
    {
        // Logique spécifique au tableau de bord des responsables
        // ...

        // Retourner la vue du tableau de bord des responsables
        return view('responsable.dashboard');
    }
}
