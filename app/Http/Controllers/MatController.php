<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatController extends Controller
{
    // Fonction index pour sélectionner les données à partir de la base de données
    public function index()
    {
        // Récupérer toutes les matières en utilisant le modèle
        $matieres = Matiere::all();
        return view('affMat', compact('matieres'));
    }

    // Fonction store pour insérer des données dans la base de données
    public function store(Request $request)
    {
        // Valider les données de la requête
        $request->validate([
            'libelle' => 'required|string|max:255',
            'coef' => 'required|integer',
            'codemat' => 'required|string|max:10'  // Utiliser 'codemat' pour la validation
        ]);

        // Créer une nouvelle matière en utilisant le modèle
        Matiere::create([
            'libelle' => $request->libelle,
            'coef' => $request->coef,
            'codemat' => $request->codemat,  // Correction ici pour correspondre au champ 'codemat'
        ]);

        // Redirection après l'insertion
        return redirect()->route('matieres.index')->with('success', 'Matière ajoutée avec succès!');
    }
    public function create()
    {
    return view('layouts.createMat'); 
    }

}
