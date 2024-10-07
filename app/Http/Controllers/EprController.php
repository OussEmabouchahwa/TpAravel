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
    public function store(Request $request)
    {
        $request->validate([
            'datepreuve' => 'required|date',
            'lieu' => 'required|string',
        ]);

        Epreuve::create([
            'datepreuve' => $request->datepreuve,
            'lieu' => $request->lieu,
        ]);

        return redirect()->route('epreuves.index');
    }
}
