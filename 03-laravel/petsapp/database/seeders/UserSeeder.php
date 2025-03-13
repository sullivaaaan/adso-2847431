<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->document = 7500001;
        $user->fullname = "John Wick";
        $user->gender = "Male";
        $user->birthdate = "1980-01-01";
        $user->phone = 3004447985;
        $user->email = 'jwick@gmail.com';
        $user->password = bcrypt('admin');
        $user->role = 'admin';
        $user->save();

        $user = new User;
        $user->document = 7500002;
        $user->fullname = "Lara Croft";
        $user->gender = "Female";
        $user->birthdate = "1994-05-28";
        $user->phone = 30175875390;
        $user->email = 'tombr@gmail.com';
        $user->password = bcrypt('12345');
        $user->save();
    }
}
