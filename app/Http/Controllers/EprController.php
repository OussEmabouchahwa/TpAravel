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
       
           return redirect()->route('epreuve.index')->with('success', 'Épreuve ajoutée avec succès.');
       }
       

}
