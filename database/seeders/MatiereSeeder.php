<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matiere;

class MatiereSeeder extends Seeder
{
    public function run()
    {
        // Create 10 random Matiere entries in the database
        Matiere::factory()->count(10)->create(); 
    }
}

