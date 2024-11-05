<?php

namespace App\Http\Controllers;

use App\Models\Epreuve; // Import the Epreuve model
use Illuminate\Http\Request;

class EprController extends Controller
{
    public function index()
    {
        $epreuves = Epreuve::all(); // Retrieve all 'epreuves' from the database
        return view('affeprev', compact('epreuves')); // Pass 'epreuves' to the view
    }

    // Méthode pour afficher le formulaire de création d'une épreuve
    public function create()
    {
        return view('layouts.createEpreuve'); 
    }

    public function store(Request $request)
{
    try {
        // Validate the incoming request data
        $request->validate([
            'numepreuve' => 'required|numeric',
            'datepreuve' => 'required|date',
            'lieu' => 'required|string|max:255',
        ]);
    
        // Create a new Epreuve instance
        $epreuve = new Epreuve();
        $epreuve->numepreuve = $request->numepreuve;
        $epreuve->datepreuve = $request->datepreuve;
        $epreuve->lieu = $request->lieu;

        // Save the instance to the database
        $epreuve->save();

        // Redirect with success message
        return redirect()->route('epreuve.index')->with('success', 'Épreuve ajoutée avec succès.');
    } catch (\Illuminate\Validation\ValidationException $e) {
        // Handle validation exceptions
        return back()->withErrors($e->validator)->withInput();
    } catch (\Exception $e) {
        // Log the error and show a generic error message
      //  \Log::error($e->getMessage());
        return back()->withErrors(['error' => 'Une erreur est survenue lors de l\'ajout de l\'épreuve.'])->withInput();
    }
}


}
