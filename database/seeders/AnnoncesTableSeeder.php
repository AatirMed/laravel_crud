<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnoncesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('annonces')->insert([
            [
                'title' => 'Appartement à vendre',
                'description' => 'Bel appartement rénové à vendre',
                'type' => 'Appartement',
                'ville' => 'Paris',
                'superficie' => 75,
                'neuf' => false,
                'prix' => 250000.00,
                'created_at'=>now()

            ],[
                'title' => 'Maison à louer',
                'description' => 'Belle maison de ville à louer',
                'type' => 'Maison',
                'ville' => 'Lyon',
                'superficie' => 120,
                'neuf' => false,
                'prix' => 1500.00,
                'created_at'=>now()
            ],
            [
                'title' => 'Terrain à vendre',
                'description' => 'Grand terrain constructible à vendre',
                'type' => 'Terrain',
                'ville' => 'Marseille',
                'superficie' => 800,
                'neuf' => true,
                'prix' => 500000.00,
                'created_at'=>now()
            ]
        ]);
    }
}
