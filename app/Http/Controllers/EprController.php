<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EprController extends Controller

{
    public function index()
    {
        $epreves = [
            ['Numéro' => '1001 ', 'Date' => '23/09/2019', 'Lieu' => 110       ],
            ['Numéro' => '1002 ', 'Date' => '24/09/2019', 'Lieu' => 119       ],
        ];

        return view('affeprev', compact('epreves'));
    }
}
