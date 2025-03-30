<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FournisseurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fournisseurs')->insert([
            [
                'nom' => 'dupon',
                'prenom' => 'piere',
                'adresse' => 'avenu de la paix',
                'email' => 'pieredupon@example.com',
                'telephone' => '222222',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'nom' => 'dupo',
                'prenom' => 'jean',
                'adresse' => 'avenu ',
                'email' => 'jean@example.com',
                'telephone' => '222222444',
                'created_at' => now(),
                'updated_at' => now(),

            ]
        ]);
    }
}
