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
        try {
            // Validate the incoming request data
            $request->validate([
                'codemat' => 'required|string|max:10', // Adjust validation rules as needed
                'libelle' => 'required|string|max:255',
                'coef' => 'required|numeric|min:0', // Assuming coefficients can't be negative
            ]);
        
            // Create a new Matiere instance
            $matiere = new Matiere();
            $matiere->codemat = $request->codemat;
            $matiere->libelle = $request->libelle;
            $matiere->coef = $request->coef;
    
            // Save the instance to the database
            $matiere->save();
    
            // Redirect with success message
            return redirect()->route('matieres.index')->with('success', 'Matière ajoutée avec succès.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            //Log::error($e->getMessage());
            return back()->withErrors(['error' => 'Une erreur est survenue lors de l\'ajout de la matière.'])->withInput();
        }
    }
    
    public function create()
    {
    return view('layouts.createMat'); 
    }

}
