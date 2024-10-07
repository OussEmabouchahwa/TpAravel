<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatController extends Controller
{
    // Fonction index pour sélectionner les données à partir de la base de données
    public function index()
    {
        $matieres = Matiere::all(); // Récupérer toutes les matières
        return view('affMat', compact('matieres'));
    }

    // Fonction store pour insérer des données dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
            'coef' => 'required|integer',
        ]);

        Matiere::create([
            'libelle' => $request->libelle,
            'coef' => $request->coef,
        ]);

        return redirect()->route('matieres.index'); // Redirection après l'insertion
    }
}
