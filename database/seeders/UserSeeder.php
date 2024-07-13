<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "nama_lengkap"=> "administrator",
            "name"=> "admin",
            "notlp"=> "085871067385",
            "email"=> "admin@gmail.com",
            "role"=> "admin",
            "password"=> Hash::make("12345678"),
            "alamat"=> "Bandung",
        ]);

        User::create([
            "nama_lengkap"=> "User",
            "name"=> "user",
            "notlp"=> "085871067385",
            "email"=> "user@gmail.com",
            "role"=> "user",
            "password"=> Hash::make("12345678"),
            "alamat"=> "Bandung",
        ]);
    }
}
