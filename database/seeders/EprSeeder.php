<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Epreuve;

class EprSeeder extends Seeder
{
    public function run()
    {
        // You can adjust the number of records you want to create
        Epreuve::factory()->count(10)->create(); 
    }
}
