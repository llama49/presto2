<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_users = [
            [
                'name' => 'Antonio',
                'email' => 'antonio@mail',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Emanuele',
                'email' => 'emanuele@mail',
                'password' => Hash::make('12345678'),
                'is_revisor' => true
            ],
            [
                'name' => 'Giuseppe',
                'email' => 'giuseppe@mail',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Giorgio',
                'email' => 'giorgio@mail',
                'password' => Hash::make('12345678'),
            ]
        ];

        foreach ($array_users as $user) {
            User::create($user);
        }
    }
}
