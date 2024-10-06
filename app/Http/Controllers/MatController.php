<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatController extends Controller
{
    public function index()
    {
        $matieres = [
            ['code' => 'Algo', 'libelle' => 'Algorithmique', 'coefficient' => 3],
            ['code' => 'DevWeb', 'libelle' => 'Développement Web', 'coefficient' => 3],
        ];

        return view('affMat', compact('matieres'));
    }
}
