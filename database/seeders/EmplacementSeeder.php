<?php

namespace Database\Seeders;

use App\Models\Emplacement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmplacementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MAX_EMPLACEMENTS_NUMBER = 1000;
        for ($i = 0; $i < $MAX_EMPLACEMENTS_NUMBER; $i++)
            Emplacement::create([]);
    }
}
