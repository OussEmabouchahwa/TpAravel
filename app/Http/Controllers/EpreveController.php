<?php

namespace App\Http\Controllers;

use App\Models\Epreuve; // Import the Epreuve model
use Illuminate\Http\Request;

class EpreveController extends Controller
{
    // Display a listing of all 'epreuves'
    public function index()
    {
        $epreuves = Epreuve::all(); // Retrieve all 'epreuves' from the database
        return view('affeprev', compact('epreuves')); // Pass 'epreuves' to the view
    }

    // Show the form for creating a new 'epreuve'
    public function create()
    {
        return view('layouts.createEpreuve'); 
    }
    public function show($id)
{
    // Retrieve the specific Epreuve by ID
    $epreuve = Epreuve::findOrFail($id);

    // Return the view with the Epreuve data
    return view('layouts.showEpreuve', compact('epreuve'));
}


    // Store a newly created 'epreuve' in the database
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
            // \Log::error($e->getMessage());
            return back()->withErrors(['error' => 'Une erreur est survenue lors de l\'ajout de l\'épreuve.'])->withInput();
        }
    }

    // Show the form for editing a specific 'epreuve'
    public function edit(Epreuve $epreuve)
    {
        return view('layouts.editEpreuve', compact('epreuve'));
    }

    // Update the specified 'epreuve' in the database
    public function update(Request $request, Epreuve $epreuve)
    {
        // Validate the incoming request data
        $request->validate([
            'numepreuve' => 'required|numeric',
            'datepreuve' => 'required|date',
            'lieu' => 'required|string|max:255',
        ]);

        // Update the 'epreuve' with validated data
        $epreuve->update($request->all());

        // Redirect with success message
        return redirect()->route('epreuve.index')->with('success', 'Épreuve modifiée avec succès.');
    }

    // Remove the specified 'epreuve' from storage
    public function destroy(Epreuve $epreuve)
    {
        // Delete the specified 'epreuve'
        $epreuve->delete();

        // Redirect with success message
        return redirect()->route('epreuve.index')->with('success', 'Épreuve supprimée avec succès.');
    }
}
