<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function dashboard()
    {
        // Logique spécifique au tableau de bord des étudiants
        // ...

        // Retourner la vue du tableau de bord des étudiants
        return view('etudiant.dashboard');
    }

    public function showNotes()
    {
        // Récupérer l'ID de l'étudiant authentifié
        $etudiantId = auth()->user()->id;

        // Récupérer les notes de l'étudiant pour les matières correspondantes
        $notes = Note::where('idE', $etudiantId)->get();

        // Passer les données à la vue et afficher la page des notes
        return view('etudiant.notes', ['notes' => $notes]);
    }

}
