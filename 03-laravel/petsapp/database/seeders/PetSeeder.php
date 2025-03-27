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
        DB::table('pets')->insert([
            'name'=>'Firulais',
            'Kind'=>'Dog',
            'weight'=>'16',
            'age'=>'24',
            'breed'=>'Shiba Inu',
            'location'=>'Kioto',
            'description'=>'',
            'created_at'=>now()
        ]);

        DB::table('pets')->insert([
            'name'=>'Michi',
            'Kind'=>'Cat',
            'weight'=>'4',
            'age'=>'18',
            'breed'=>'Siames',
            'location'=>'Osaka',
            'description'=>'',
            'created_at'=>now()
        ]);

        DB::table('pets')->insert([
            'name'=>'Killer',
            'Kind'=>'Dog',
            'weight'=>'5',
            'age'=>'48',
            'breed'=>'Pincher',
            'location'=>'Tokio',
            'description'=>'',
            'created_at'=>now()
        ]);
    }
}
