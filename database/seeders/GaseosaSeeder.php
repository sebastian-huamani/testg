<?php

namespace Database\Seeders;

use App\Models\Gaseosa;
use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GaseosaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Marca::factory(10)->create()->each(function (Marca $marca) {
            Gaseosa::factory(1)->create([
                'marca_id' => $marca->id
            ]);
        });
    }
}
