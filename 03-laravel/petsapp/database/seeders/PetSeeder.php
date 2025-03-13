<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("pets")->insert([
            'name' => 'firulais',
            'kind' => 'dog',
            'weight' => '16',
            'age' => '24',
            'breed' => 'Shiba Inu',
            'location' => 'kioto',
            'description' => 'El Shiba Inu es un perro japonés pequeño, ágil y de pelaje rojizo',
            'created_at'=> now()
        ]);
        DB::table("pets")->insert([
            'name' => 'michi',
            'kind' => 'cat',
            'weight' => '4',
            'age' => '18',
            'breed' => 'siames',
            'location' => 'osaka',
            'description' => ' el gato siamés es elegante, vocal y de ojos azules',
            'created_at'=> now()
        ]);
        DB::table("pets")->insert([
            'name' => 'hawk',
            'kind' => 'pig',
            'weight' => '16',
            'age' => '24',
            'breed' => 'mangalica',
            'location' => 'tokyo',
            'description' => 'el cerdo mangalica es robusto, lanudo y originario de Hungría.',
            'created_at'=> now()
        ]);
    }
}
