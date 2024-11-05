<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all Matières from the database
        $matieres = Matiere::all();
        
        // Pass Matières to the index view
        return view('matieres.index', compact('matieres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the create view for Matière
        return view('matieres.create');
    }
    public function show($codemat)
    {
    $matiere = Matiere::findOrFail($codemat);
    return view('matieres.show', compact('matiere'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'codemat' => 'required|string|max:10',
            'libelle' => 'required|string|max:255',
            'coef' => 'required|numeric|min:0',
        ]);

        // Create a new Matiere with validated data
        Matiere::create($request->all());

        // Redirect to the index page with success message
        return redirect()->route('matieres.index')->with('success', 'Matière ajoutée avec succès.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matiere $matiere)
    {
        // Pass the specified Matiere to the edit view
        return view('matieres.edit', compact('matiere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matiere $matiere)
    {
        // Validate the incoming request data
        $request->validate([
            'codemat' => 'required|string|max:10',
            'libelle' => 'required|string|max:255',
            'coef' => 'required|numeric|min:0',
        ]);

        // Update the Matiere with validated data
        $matiere->update($request->all());

        // Redirect to the index page with success message
        return redirect()->route('matieres.index')->with('success', 'Matière modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matiere $matiere)
    {
        // Delete the specified Matiere
        $matiere->delete();

        // Redirect to the index page with success message
        return redirect()->route('matieres.index')->with('success', 'Matière supprimée avec succès.');
    }
}
